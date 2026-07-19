# TODO - KatungganCove Contact Fix

- [ ] Fix `contact.php` to remove duplicated HTML and embedded mail-handling code.
- [ ] Update the contact form to submit via `contact-handler.php` (AJAX + JSON expected by `assets/js/contact-form.js`).
- [ ] Ensure correct include paths (`includes/header.php`, `includes/footer.php`) and remove the stray trailing `<li>`.
- [ ] Include `assets/js/contact-form.js` on the contact page.
- [ ] Quick test: open `/contact.php`, submit form, and confirm no include warnings + correct JSON response handling.

