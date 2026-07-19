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


<section class="section">
  <div class="container contact-grid">
    <div class="contact-sidebar">
      <div class="contact-card">
        <h3>Email</h3>
        <p>katunggancoveresort@gmail.com</p>
      </div>
      <div class="contact-card">
        <h3>Phone</h3>
        <p>0920 928 1766</p>
      </div>
      <div class="contact-card">
        <h3>Address</h3>
        <p>Brgy. Tando, Nueva Valencia, Guimaras, Philippines</p>
      </div>
    </div>

    <div class="contact-form-card">
      <h2>Get in touch</h2>
      <p>Please use this form to get in touch with us. We'll be happy to assist you with any inquiries or requests.</p>

      <p class="contact-like"> <a href="https://www.facebook.com/p/Katunggan-Cove-Resort-61589372212595/" target="_blank" rel="noopener noreferrer">Message us on Facebook</a>.</p>

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
</section>

<section class="section faq-section">
  <div class="container">
    <div class="section-title">
      <p>Frequently Asked Questions</p>
      <h2>Answers to the usual questions.</h2>
    </div>

    <div class="faq-list">
      <details open>
        <summary>What are your check-in and check-out times?</summary>
        <p>Check-in from 2:00pm and check-out by 12:00 noon. Early or late requests can be arranged based on availability.</p>
      </details>
      <details>
        <summary>Do you offer airport and port transfers?</summary>
        <p>Yes — private transfers from Iloilo Airport or Jordan Port can be arranged with advance notice.</p>
      </details>
      <details>
        <summary>Can I host a wedding or private event?</summary>
        <p>Yes. Our garden function hall accommodates up to 120 guests and can be arranged for bespoke events.</p>
      </details>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/contact-form.js"></script>
</body>
</html>

