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

<section class="hero contact-hero">
  <div class="slides">
    <img src="assets/images/hero/image3.webp" class="slide active" alt="Resort garden path">
  </div>
  <div class="overlay"></div>

  <div class="hero-content">
    <p>Contact</p>
    <h1>Say hello. We reply slowly, but warmly.</h1>
    <span>For reservations, events, or a simple question about the tide.</span>
  </div>
</section>

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
      <h2>Send a message</h2>
      <p>We’ll respond within 24 hours, island time.</p>
      <form>
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
          <label>Subject
            <input type="text" name="subject">
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
      <p>FAQ</p>
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

</body>
</html>
