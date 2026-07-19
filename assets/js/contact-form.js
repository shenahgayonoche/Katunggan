(() => {
  const form = document.querySelector('section.section .contact-form-card form');
  if (!form) return;

  // Ensure form submits via JS to contact-handler.php
  form.setAttribute('method', 'POST');
  form.setAttribute('action', 'contact-handler.php');

  // Add CSRF later if needed; for now keep simple.
  form.addEventListener('submit', async (e) => {
    e.preventDefault();

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
        if (submitBtn) submitBtn.textContent = originalText ?? 'Send Message';

        // simple UX
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
})();

