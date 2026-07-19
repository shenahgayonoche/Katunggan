<?php $activePage = 'cafe'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katunggan Café | Katunggan Cove Resort</title>
  <link rel="icon" href="assets/images/logo/logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="assets/css/header-footer.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/cafe.css">

  <?php include 'includes/fonts.php'; ?>
</head>
<body>

<?php include 'includes/header.php'; ?>

<!-- ================= HERO (INTRO) ================= -->
<section class="hero cafe-hero cafe-hero-static" aria-label="Katunggan Café hero">
  <div class="hero-static-bg" aria-hidden="true">
    <div class="hero-static-texture"></div>
  </div>

  <div class="hero-static-content">
    <div class="hero-left">
      <p class="hero-subtitle">RESTAURANT & CAFÉ</p>
      <h1>Modern Filipino Flavors from the Island</h1>
      <span>
        Bounty of Guimaras nestled along the bay of Nueva, Valencia.
        Welcome to Katunggan Café, where the vibrant flavors of Guimaras come to life through a modern Filipino dining experience inspired by the island's rich land, sea, and culture.
      </span>

      <div class="hero-buttons hero-buttons-left">
        <a href="#menu-pdf" class="btn btn-ghost" aria-label="View Full Menu">
          View Full Menu
        </a>
      </div>
      </div>
  </div>

  <div class="hero-right" aria-hidden="true">
    <img class="hero-food" src="assets/images/hero/trial2.png" alt="" loading="eager">
  </div>
</section>


<!-- ================= FEATURES (4 CARDS) ================= -->
<section class="section cafe-features" data-reveal>

  <div class="container">

    <div class="section-title">
      <p>What Makes Katunggan Café Special</p>
      <h2>What Makes Katunggan Café Special</h2>
    </div>

    <div class="feature-grid">
      <article class="feature-card">
        <div class="feature-icon" aria-hidden="true">
          <!-- leaf + basket -->
          <svg viewBox="0 0 24 24" width="26" height="26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 20c5-1 8-5 10-12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M7 20c0-6 4-10 11-11" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M4 13c2 1 4 1 6 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M6 11c2 1 4 1 6 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M5 17c2 2 5 2 8 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <h3>Local Ingredients</h3>

        <p>Highlight the use of locally sourced ingredients from Guimaras.</p>
      </article>

      <article class="feature-card">
        <div class="feature-icon" aria-hidden="true">
          <!-- sprout + water drop -->
          <svg viewBox="0 0 24 24" width="26" height="26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2c3 3 5 7 5 11a5 5 0 0 1-10 0c0-4 2-8 5-11Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
            <path d="M9 21c1-3 2-5 3-7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M12 7c1.5 1 3 3 3 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <h3>Fresh & Sustainable</h3>

        <p>From farm to sea, we keep freshness close and waste low.</p>
      </article>

      <article class="feature-card">
        <div class="feature-icon" aria-hidden="true">
          <!-- mango outline -->
          <svg viewBox="0 0 24 24" width="26" height="26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2c3 3 6 6 6 10a6 6 0 1 1-12 0c0-4 3-7 6-10Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
            <path d="M9 6c1.5.5 4.5.5 6 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <h3>Guimaras Mangoes</h3>

        <p>Sweet & world-famous—served in refreshing, modern ways.</p>
      </article>

      <article class="feature-card" data-feature="global-touch">
        <div class="feature-icon" aria-hidden="true">
          <!-- plate + globe -->
          <svg viewBox="0 0 24 24" width="26" height="26" fill="none" xmlns="http://www.w3.org/2000/svg">

            <path d="M4 13c2.2-7 13.8-7 16 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <circle cx="12" cy="13" r="6" stroke="currentColor" stroke-width="2"/>
            <path d="M12 7c2.5 2 3.5 6 0 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M7 10h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M7 16h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <h3>Filipino Soul, Global Touch</h3>

        <p>Traditional Filipino flavors combined with modern culinary creativity.</p>
      </article>
    </div>
  </div>
</section>

<!-- ================= SIGNATURE DISHES ================= -->
<section class="section cafe-signatures" data-reveal>
  <div class="container">
    <div class="section-title">
      <p>Menu Highlights</p>
      <h2>Signature Dishes</h2>
    </div>

    <div class="signature-grid">
      <article class="signature-card">
        <div class="signature-media">
          <img src="assets/images/gallery/image1.webp" alt="Local Seafood Creation" loading="lazy">
        </div>
        <div class="signature-content">
          <h3>Local Seafood Creation</h3>
          <p>Fresh coastal ingredients prepared with Filipino-inspired flavors.</p>
        </div>
      </article>

      <article class="signature-card">
        <div class="signature-media">
          <img src="assets/images/gallery/image2.webp" alt="Guimaras Mango Specialty" loading="lazy">
        </div>
        <div class="signature-content">
          <h3>Guimaras Mango Specialty</h3>
          <p>A refreshing creation featuring the island's famous mangoes.</p>
        </div>
      </article>

      <article class="signature-card">
        <div class="signature-media">
          <img src="assets/images/gallery/image3.webp" alt="Modern Filipino Favorite" loading="lazy">
        </div>
        <div class="signature-content">
          <h3>Modern Filipino Favorite</h3>
          <p>A contemporary take on a classic Filipino dish.</p>
        </div>
      </article>
    </div>

    <div class="center-actions">
      <a href="#menu-pdf" class="btn btn-lg">View Complete Menu</a>
    </div>
  </div>
</section>

<!-- ================= GALLERY / EXPERIENCE ================= -->
<section class="section cafe-experience" data-reveal>
  <div class="container cafe-experience-grid">
    <div class="experience-image">
      <img src="assets/images/gallery/image4.webp" alt="Katunggan Café interior and dining experience" loading="lazy">
    </div>
    <div class="experience-content">
      <p class="section-subtitle">A Dining Experience Surrounded by Nature</p>
      <h2>A Dining Experience Surrounded by Nature</h2>
      <p>
        At Katunggan Café, every meal is more than food—it is an experience inspired by the beauty, warmth, and flavors of Guimaras.
      </p>
    </div>
  </div>
</section>

<!-- ================= FULL MENU PDF ================= -->
<section class="section cafe-menu-pdf" data-reveal>
  <div class="container">
    <div class="section-title">
      <p>Explore Our Full Menu</p>
      <h2>Explore Our Full Menu</h2>
      <p class="section-description">
        Discover our complete selection of dishes, beverages, and island-inspired creations.
      </p>
    </div>

    <div id="menu-pdf" class="pdf-wrap">
      <a class="btn btn-lg" href="pdf/katunggan-cafe-menu.pdf" target="_blank" rel="noopener noreferrer">View Full Menu PDF</a>

      <div class="pdf-frame">
        <iframe
          src="pdf/katunggan-cafe-menu.pdf"
          width="100%"
          height="700px"
          title="Katunggan Café Full Menu PDF"
          loading="lazy"
          referrerpolicy="no-referrer">
        </iframe>
      </div>

      <p class="pdf-note">
        If the PDF does not load yet, please ensure <span class="mono">pdf/katunggan-cafe-menu.pdf</span> exists on the server.
      </p>
    </div>
  </div>
</section>


<?php include 'includes/footer.php'; ?>

<script src="assets/js/section-reveal.js"></script>
</body>
</html>

