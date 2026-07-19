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

      <p class="contact-like">Prefer booking updates? <a href="https://www.facebook.com/p/Katunggan-Cove-Resort-61589372212595/" target="_blank" rel="noopener noreferrer">Like us on Facebook</a>.</p>
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
          <label>Inquiry
            <select name="inquiry" required>
              <option value="" disabled selected>Select an option</option>
              <option value="Booking Inquiry">Booking Inquiry</option>
              <option value="Restaurant Reservation">Restaurant Reservation</option>
              <option value="General Question">General Question</option>
              <option value="Feedback/Other">Feedback/Other</option>
            </select>
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

<script src="assets/js/contact-form.js"></script>
</body>
</html>
<?php
// Define your receiving email address
$to_email = "shenah.gayonoche@gmail.com"; //replace with actual email address to where it will be sent

$status_msg = "";
$status_class = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and filter inputs
    $name    = filter_var(trim($_POST["name"]), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = filter_var(trim($_POST["subject"]), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        $status_msg = "Please fill in all required fields.";
        $status_class = "error-msg";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status_msg = "Please enter a valid email address.";
        $status_class = "error-msg";
    } else {
        // Construct the email content
        $email_subject = !empty($subject) ? "New Contact Form: $subject" : "New Message from $name";
        
        $email_body = "<h2>Contact Form Submission</h2>";
        $email_body .= "<p><strong>Name:</strong> $name</p>";
        $email_body .= "<p><strong>Email:</strong> $email</p>";
        $email_body .= "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";

        // Crucial headers to prevent Gmail from blocking the message
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
        // It is best practice to set 'From' as an email belonging to your domain or server, 
        // and use 'Reply-To' for the visitor's email address.
        $headers .= "From: noreply@katunggancoveresort.com" . "\r\n"; 
        $headers .= "Reply-To: $email" . "\r\n";

        // Attempt to send
        if (mail($to_email, $email_subject, $email_body, $headers)) {
            $status_msg = "Thank you! Your message has been sent successfully.";
            $status_class = "success-msg";
        } else {
            $status_msg = "Server error: Unable to send mail. Please try again later or contact your hosting provider.";
            $status_class = "error-msg";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Katunggan Cove Resort</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/header-footer.css">
</head>
<body>
<?php include '../includes/header.php'; ?>

<section class="section" style="padding-top:120px;">
  <div class="container" style="max-width: 600px;">
    <h2>Contact Us</h2>
    <p>We would love to hear from you. Please drop us a line below!</p>

    <!-- Status Alert Container -->
    <?php if (!empty($status_msg)): ?>
        <div class="alert <?php echo $status_class; ?>" style="padding: 10px; margin-bottom: 20px; border-radius: 4px; background: #f0f0f0;">
            <?php echo $status_msg; ?>
        </div>
    <?php endif; ?>

    <!-- Ensure your method is POST and target matches the input keys below -->
    <form action="contact.php" method="POST" class="contact-form">
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="name">Name *</label>
        <input type="text" id="name" name="name" required style="width:100%; padding:8px; margin-top:5px;">
      </div>
      
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" required style="width:100%; padding:8px; margin-top:5px;">
      </div>

      <div class="form-group" style="margin-bottom: 15px;">
        <label>Inquiry Type
      <select name="inquiry" required style="width:100%; padding:8px; margin-top:5px; background-color:#fff; border:1px solid #ccc; border-radius:4px;">
        <option value="" disabled selected>Select an option</option>
        <option value="Booking Inquiry">Booking Inquiry</option>
        <option value="Restaurant Reservation">Restaurant Reservation</option>
        <option value="General Question">General Question</option>
        <option value="Feedback/Other">Feedback/Other</option>
      </select>
    </label>
      </div>

      <div class="form-group" style="margin-bottom: 15px;">
        <label for="message">Message *</label>
        <textarea id="message" name="message" rows="5" required style="width:100%; padding:8px; margin-top:5px;"></textarea>
      </div>

      <button type="submit" class="btn">Send Message</button>
    </form>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
</body>
</html><!-- Updated line -->
<li><a href="../php/contact.php" data-nav-link>Contact</a></li>