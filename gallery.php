<?php $activePage = 'gallery'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | Katunggan Cove Resort</title>
  <link rel="icon" href="assets/images/logo/logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="assets/css/header-footer.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/gallery.css?v=1.1">

  <?php include 'includes/fonts.php'; ?>
</head>
<body>

<?php include 'includes/header.php'; ?>

<section class="hero gallery-hero">
  <div class="slides">
    <img src="assets/images/hero/image1.webp" class="slide active" alt="Sunset over the cove">
    <img src="assets/images/hero/image2.webp" class="slide" alt="Resort pathways">
  </div>
  <div class="overlay"></div>

  <div class="hero-content">
    <p>Gallery</p>
    <h1>Slow moments, in still frame.</h1>
    <span>A visual notebook of the cove — rooms, food, sea, and everything between.</span>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-title">
      <p>Moments from the Cove</p>
      <h2>Scenes that capture the rhythm of island life.</h2>
    </div>

    <div class="gallery-grid">
      <article class="gallery-card wide tall">
        <img src="assets/images/hero/image1.webp" alt="Resort pool at sunset" loading="lazy">
        <div class="gallery-caption">Sunset by the pool</div>
      </article>
      <article class="gallery-card">
        <img src="assets/images/hero/image2.webp" alt="Garden walkway" loading="lazy">
        <div class="gallery-caption">Garden paths</div>
      </article>
      <article class="gallery-card">
        <img src="assets/images/hero/image3.webp" alt="Resort room" loading="lazy">
        <div class="gallery-caption">Quaint rooms</div>
      </article>
      <article class="gallery-card tall">
        <img src="assets/images/gallery/image4.webp" alt="Mangrove view" loading="lazy">
        <div class="gallery-caption">Mangrove stillness</div>
      </article>
      <article class="gallery-card wide">
        <img src="assets/images/gallery/image5.webp" alt="Café table overlooking the water" loading="lazy">
        <div class="gallery-caption">Café by the sea</div>
      </article>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>
