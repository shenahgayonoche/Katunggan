<?php $activePage = 'gallery'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | Katunggan Cove Resort</title>
  <meta name="description" content="A visual notebook of Katunggan Cove Resort — rooms, food, sea, and serene island moments in Guimaras.">
  <link rel="icon" href="assets/images/logo/logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="assets/css/header-footer.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/gallery.css?v=1.4"> <!-- Cache buster updated -->
  <link rel="stylesheet" href="assets/css/gallery-carousel-enhancements.css?v=1.0">
  <?php include 'includes/fonts.php'; ?>
</head>
<body>
<?php include 'includes/header.php'; ?>

<!-- Compact Hero Container matching Accommodation exactly -->
<section class="hero accommodation-hero gallery-hero">
  <div class="slides">
    <img src="assets/images/hero/image1.webp" class="slide active" alt="Sunset over the cove">
  </div>
  <div class="overlay"></div>
</section>

<section class="section" style="padding-top:80px;">
  <div class="container">
    <div class="section-title">
      <p>Moments from the Cove</p>
      <h2>Scenes that capture the rhythm of island life.</h2>
    </div>
    
    <div class="gallery-grid">
      <article class="gallery-card">
        <img src="assets/images/hero/image1.webp" alt="Resort pool at sunset" loading="lazy">
      </article>
      <article class="gallery-card">
        <img src="assets/images/hero/image2.webp" alt="Garden walkway" loading="lazy">
      </article>
      <article class="gallery-card">
        <img src="assets/images/hero/image3.webp" alt="Resort room" loading="lazy">
      </article>
      <article class="gallery-card">
        <img src="assets/images/gallery/image4.webp" alt="Mangrove view" loading="lazy">
      </article>
      <article class="gallery-card">
        <img src="assets/images/gallery/image5.webp" alt="Café table overlooking the water" loading="lazy">
      </article>
    </div>
    
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>