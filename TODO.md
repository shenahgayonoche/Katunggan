<<<<<<< HEAD
# TODO - KatungganCove Contact Fix

- [ ] Fix `contact.php` to remove duplicated HTML and embedded mail-handling code.
- [ ] Update the contact form to submit via `contact-handler.php` (AJAX + JSON expected by `assets/js/contact-form.js`).
- [ ] Ensure correct include paths (`includes/header.php`, `includes/footer.php`) and remove the stray trailing `<li>`.
- [ ] Include `assets/js/contact-form.js` on the contact page.
- [ ] Quick test: open `/contact.php`, submit form, and confirm no include warnings + correct JSON response handling.
=======
# TODO - KatungganCove (Café Page Enhancements)

- [x] Inspect existing `cafe.php` and `assets/css/cafe.css` styling hooks.
- [x] Replace `cafe.php` page markup with 7 requested sections (hero, about/story, features, signature dishes, gallery, full menu PDF, final CTA).

- [x] Extend `assets/css/cafe.css` to match the site’s premium resort dining language and ensure responsiveness.

- [x] Add section ids for internal navigation: hero CTA → `#menu-pdf`.

- [x] Add responsive PDF preview container with rounded corners + iframe.

- [x] Ensure smooth scrolling works with in-page anchor links.

- [x] Verify PDF path `pdf/katunggan-cafe-menu.pdf` exists; if not, adjust iframe src gracefully.



- [ ] Final manual check: render in browser at desktop + mobile widths.



>>>>>>> 35287633815a6078eaa30350c36737c6005cde6a

