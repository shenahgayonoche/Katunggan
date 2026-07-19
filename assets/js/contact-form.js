(() => {
  const form = document.querySelector('section.section .contact-form-card form');
  if (!form) return;

  // Ensure form submits via JS to contact-handler.php
  form.setAttribute('method', 'POST');
  form.setAttribute('action', 'contact-handler.php');

  const nameInput = form.querySelector('input[name="name"]');
  const emailInput = form.querySelector('input[name="email"]');
  const phoneInput = form.querySelector('input[name="phone"]');
  const inquirySelect = form.querySelector('select[name="inquiry"]');
  const messageInput = form.querySelector('textarea[name="message"]');

  const OTHER_VALUE = 'Other';

  function normalizeNameForValidation(value) {
    return String(value || '')
      .trim()
      .replace(/\s+/g, ' ');
  }

  function isValidEmail(email) {
    // pragmatic email check
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(String(email || '').trim());
  }

  function sanitizeErrorKey(key) {
    return `err-${key}`;
  }

  function getOrCreateErrorEl(forKey) {
    const id = sanitizeErrorKey(forKey);
    let el = form.querySelector(`#${CSS.escape(id)}`);
    if (!el) {
      el = document.createElement('small');
      el.id = id;
      el.className = 'field-error';
      el.setAttribute('aria-live', 'polite');

      // place right after the corresponding field
      const field = form.querySelector(`[name="${CSS.escape(forKey)}"]`);
      if (field && field.parentElement) {
        field.parentElement.appendChild(el);
      } else {
        form.appendChild(el);
      }
    }
    return el;
  }

  function setError(forKey, msg) {
    const el = getOrCreateErrorEl(forKey);
    el.textContent = msg;
    el.style.display = msg ? 'block' : 'none';

    const field = form.querySelector(`[name="${CSS.escape(forKey)}"]`);
    if (field) {
      field.classList.toggle('has-error', Boolean(msg));
    }
  }

  function clearError(forKey) {
    setError(forKey, '');
  }

  function otherTextFromMessage() {
    // We keep "Other" entered text inside message
    // In UI, we append if inquiry is Other.
    return String(messageInput?.value || '').trim();
  }

  function syncOtherIntoMessage() {
    if (!inquirySelect || !messageInput) return;
    if (inquirySelect.value !== OTHER_VALUE) return;

    const otherVal = form.querySelector('input[name="inquiry_other"]')?.value?.trim() || '';

    // Append "Other: ..." to message if provided and not already appended.
    // If user left it blank, we won't append.
    if (!otherVal) return;

    const msg = messageInput.value || '';
    const marker = `\n\nOther: ${otherVal}`;

    if (!msg.includes(marker.trim())) {
      messageInput.value = msg + marker;
    }
  }

  function validateName() {
    const raw = normalizeNameForValidation(nameInput?.value);
    const key = 'name';

    // letters/spaces/hyphen/apostrophe/period, min length 2
    const ok = raw.length >= 2 && /^[A-Za-z\s.'-]+$/.test(raw);

    if (!ok) {
      setError(key, 'Please enter a valid name (letters only).');
      return false;
    }

    clearError(key);
    return true;
  }

  function validateEmail() {
    const email = String(emailInput?.value || '').trim();
    const key = 'email';

    if (email.length === 0) {
      setError(key, 'Email is required.');
      return false;
    }

    if (!isValidEmail(email)) {
      setError(key, 'Please enter a real email address.');
      return false;
    }

    clearError(key);
    return true;
  }

  function validateInquiry() {
    const key = 'inquiry';
    const v = inquirySelect?.value || '';

    if (!v) {
      setError(key, 'Please select an inquiry type.');
      return false;
    }

    // If user selects Other, ensure they provided extra text.
    if (v === OTHER_VALUE) {
      const otherField = form.querySelector('input[name="inquiry_other"]');
      const otherVal = otherField?.value?.trim() || '';
      if (!otherVal) {
        setError('inquiry_other', 'Please specify your inquiry.');
        return false;
      }
      clearError('inquiry_other');
    }

    clearError(key);
    return true;
  }

  function validateMessage() {
    const key = 'message';
    const v = String(messageInput?.value || '').trim();

    if (v.length < 10) {
      setError(key, 'Message is required (min 10 characters).');
      return false;
    }

    clearError(key);
    return true;
  }

  function validateAll() {
    const a = validateName();
    const b = validateEmail();
    const c = validateInquiry();
    const d = validateMessage();

    // phone optional
    return a && b && c && d;
  }

  // Real-time checks
  if (nameInput) {
    nameInput.addEventListener('input', () => validateName());
    nameInput.addEventListener('blur', () => validateName());
  }

  if (emailInput) {
    emailInput.addEventListener('input', () => validateEmail());
    emailInput.addEventListener('blur', () => validateEmail());
  }

  if (inquirySelect) {
    inquirySelect.addEventListener('change', () => {
      // toggle other input visibility
      const otherRow = form.querySelector('.inquiry-other-row');
      if (otherRow) {
        otherRow.style.display = inquirySelect.value === OTHER_VALUE ? 'block' : 'none';
      }

      // validate
      validateInquiry();
    });
  }

  const otherInput = form.querySelector('input[name="inquiry_other"]');
  if (otherInput) {
    otherInput.addEventListener('input', () => {
      if (inquirySelect.value === OTHER_VALUE) validateInquiry();
    });
    otherInput.addEventListener('blur', () => {
      if (inquirySelect.value === OTHER_VALUE) validateInquiry();
    });
  }

  if (messageInput) {
    messageInput.addEventListener('input', () => {
      if (String(messageInput.value || '').trim().length === 0) {
        setError('message', 'Message is required.');
      }
      validateMessage();
    });
  }

  // Submit
  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    if (!validateAll()) {
      // keep focused on first error
      const firstErr = form.querySelector('.field-error:not([style*="display: none"])');
      if (firstErr) firstErr.scrollIntoView({ behavior: 'smooth', block: 'center' });
      return;
    }

    // Prepare payload for "Other": sync into message
    syncOtherIntoMessage();

    const submitBtn = form.querySelector('button[type="submit"], button[type="submit"].btn');
    const originalText = submitBtn ? submitBtn.textContent : null;

    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending...';
    }

    const formData = new FormData(form);

    try {
      const res = await fetch(form.getAttribute('action'), {
        method: 'POST',
        body: formData
      });

      const data = await res.json().catch(() => null);

      if (data && data.success) {
        form.reset();

        // hide other row
        const otherRow = form.querySelector('.inquiry-other-row');
        if (otherRow) otherRow.style.display = 'none';

        if (submitBtn) submitBtn.textContent = originalText ?? 'Send Message';

        const msg = form.querySelector('.form-status') || document.createElement('div');
        msg.className = 'form-status';
        msg.style.marginTop = '12px';
        msg.style.color = '#1f7a4a';
        msg.textContent = data.message || 'Sent!';
        if (!msg.parentElement) form.appendChild(msg);
      } else {
        const message = (data && data.message) ? data.message : 'Something went wrong. Please try again.';
        const msg = form.querySelector('.form-status') || document.createElement('div');
        msg.className = 'form-status';
        msg.style.marginTop = '12px';
        msg.style.color = '#b00020';
        msg.textContent = message;
        if (!msg.parentElement) form.appendChild(msg);

        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.textContent = originalText ?? 'Send Message';
        }
      }
    } catch (err) {
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.textContent = originalText ?? 'Send Message';
      }

      const msg = form.querySelector('.form-status') || document.createElement('div');
      msg.className = 'form-status';
      msg.style.marginTop = '12px';
      msg.style.color = '#b00020';
      msg.textContent = 'Network error. Please try again.';
      if (!msg.parentElement) form.appendChild(msg);
    }
  });

  // Initial state
  const initialOtherRow = form.querySelector('.inquiry-other-row');
  if (initialOtherRow && inquirySelect && inquirySelect.value !== OTHER_VALUE) {
    initialOtherRow.style.display = 'none';
  }
})();

