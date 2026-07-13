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

<section class="hero cafe-hero">
  <div class="slides">
    <img src="assets/images/gallery/image4.webp" class="slide active" alt="Café view at Katunggan Cove Resort">
  </div>
  <div class="overlay"></div>

  <div class="hero-content">
    <p>Katunggan Café</p>
    <h1>Slow food, ocean-side.</h1>
    <span>An unhurried café built for long breakfasts and lantern-lit dinners.</span>
  </div>
</section>

<section class="section">
  <div class="container cafe-grid">
    <div class="cafe-image">
      <img src="assets/images/gallery/image5.webp" alt="Breakfast served at the café" loading="lazy">
    </div>

    <div class="cafe-content">
      <p class="section-subtitle">The Café</p>
      <h2>Island produce, cooked without hurry.</h2>
      <p>
        Our kitchen sources from local fisherfolk, farmers in Nueva Valencia, and our own herb garden.
        Menus turn with the season, and the sunset always gets the best table.
      </p>
      <p>
        Open to resort guests and walk-ins. Reservations are recommended on weekends for dinner.
      </p>
      <div class="cafe-details">
        <div>
          <h3>Hours</h3>
          <p>Daily · 6:30am – 10pm</p>
        </div>
        <div>
          <h3>Reserve</h3>
          <p>+63 33 555 0199</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section cafe-menu">
  <div class="container">
    <div class="section-title">
      <p>Featured Menu</p>
      <h2>A few things we love serving.</h2>
    </div>

    <div class="menu-list">
      <div class="menu-item">
        <div><h3>Guimaras Mango Bowl</h3><p>Chilled mango, coconut cream, calamansi zest</p></div>
        <span>₱320</span>
      </div>
      <div class="menu-item">
        <div><h3>Cove Breakfast</h3><p>Farm eggs, longganisa, garlic rice, brewed coffee</p></div>
        <span>₱480</span>
      </div>
      <div class="menu-item">
        <div><h3>Blue Marlin, Grilled</h3><p>Line-caught, banana leaf, ginger-lime butter</p></div>
        <span>₱780</span>
      </div>
      <div class="menu-item">
        <div><h3>Mangrove Prawn Pasta</h3><p>Local prawns, chilli, aged parmesan</p></div>
        <span>₱620</span>
      </div>
      <div class="menu-item">
        <div><h3>Coconut Barako Latte</h3><p>Single-origin barako beans, coconut milk</p></div>
        <span>₱180</span>
      </div>
      <div class="menu-item">
        <div><h3>Sunset Halo-Halo</h3><p>Ube, langka, ripe mango, evaporated milk</p></div>
        <span>₱240</span>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>
