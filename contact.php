<?php $activePage = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | Katunggan Cove Resort</title>
  <link rel="icon" href="assets/images/logo/logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="assets/css/header-footer.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/contact.css">
  <?php include 'includes/fonts.php'; ?>
</head>
<body>

<?php include 'includes/header.php'; ?>

<section class="section contact-hero-bg">
  <div class="container contact-grid">

    <!-- Left Column: Form -->
    <div class="contact-left">
      <div class="contact-form-card">
        <h2>Contact Us</h2>
        <p class="contact-intro">We'd love to hear from you. Whether you have questions about bookings, accommodations, dining, or special events, our team is here to help. Fill out the form below and we'll get back to you as soon as possible.</p>

        <form class="contact-form" action="contact-handler.php" method="POST">
          <div class="form-row">
            <label>Name
              <input type="text" name="name" required>
            </label>
            <label>Email
              <input type="email" name="email" required>
            </label>
          </div>

          <div class="form-row">
            <label>Phone
              <input type="tel" name="phone">
            </label>
            <label>Inquiry
              <select name="inquiry" required>
                <option value="" disabled selected>Select an option</option>
                <option value="Booking Inquiry">Booking Inquiry</option>
                <option value="Restaurant Reservation">Restaurant Reservation</option>
                <option value="General Question">General Question</option>
                <option value="Feedback/Other">Feedback/Other</option>
                <option value="Other">Other</option>
              </select>
            </label>
          </div>

          <!-- Shown only when inquiry is Other -->
          <div class="inquiry-other-row" style="display:none;">
            <label>Other (type here)
              <input type="text" name="inquiry_other" placeholder="e.g., wedding, transfer, special request">
            </label>
          </div>

          <label>Message
            <textarea name="message" rows="5" required></textarea>
          </label>

          <button type="submit" class="btn">Send Message</button>
        </form>
      </div>
    </div>

    <!-- Right Column: Contact Information -->
    <div class="contact-right">
      <div class="contact-card">
        <div class="contact-card-header">
          <span class="contact-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 6h16v12H4V6Z" stroke="currentColor" stroke-width="1.8"/>
              <path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="1.8"/>
            </svg>
          </span>
          <h3>Email</h3>
        </div>
        <p>katunggancoveresort@gmail.com</p>
      </div>

      <div class="contact-card">
        <div class="contact-card-header">
          <span class="contact-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6.5 3.8h2.2l1.2 3.4-1.4 1.4c1.2 2.4 3.3 4.5 5.7 5.7l1.4-1.4 3.4 1.2v2.2c0 .9-.7 1.6-1.6 1.6C10.3 20 4 13.7 4 6.4c0-.9.7-1.6 1.6-1.6Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          <h3>Phone</h3>
        </div>
        <p>0920 928 1766</p>
      </div>

      <div class="contact-card">
        <div class="contact-card-header">
          <span class="contact-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 21s7-4.4 7-11a7 7 0 0 0-14 0c0 6.6 7 11 7 11Z" stroke="currentColor" stroke-width="1.8"/>
              <path d="M12 10.3a2.2 2.2 0 1 0 0-4.4 2.2 2.2 0 0 0 0 4.4Z" stroke="currentColor" stroke-width="1.8"/>
            </svg>
          </span>
          <h3>Address</h3>
        </div>
        <p>Brgy. Tando, Nueva Valencia, Guimaras, Philippines</p>
      </div>

      <div class="contact-card">
        <div class="contact-card-header">
          <span class="contact-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 7h10v14H7V7Z" stroke="currentColor" stroke-width="1.8"/>
              <path d="M5 3h14v4H5V3Z" stroke="currentColor" stroke-width="1.8"/>
              <path d="M9 11h6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </span>
          <h3>Booking</h3>
        </div>
        <a class="booking-btn" href="https://www.facebook.com/p/Katunggan-Cove-Resort-61589372212595/" target="_blank" rel="noopener noreferrer" aria-label="Book Now on Facebook">
          <span>Book Now</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M5 12h12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <path d="m13 6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ section removed per request -->

<?php include 'includes/footer.php'; ?>

<script src="assets/js/contact-form.js"></script>
</body>
</html>

