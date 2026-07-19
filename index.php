<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katunggan Cove Resort</title>
  <link rel="icon" href="assets/images/logo/logo.svg" type="image/svg+xml">

  <link rel="stylesheet" href="assets/css/header-footer.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="stylesheet" href="assets/css/accommodation.css">









<?php include 'includes/fonts.php'; ?>


</head>
<body>

<?php include 'includes/header.php'; ?>

<!-- ================= HERO ================= -->
<section class="hero" data-reveal>


  <div class="slides">
    <img src="assets/images/hero/image1.webp" class="slide active" alt="">
    <img src="assets/images/hero/image2.webp" class="slide" alt="">
    <img src="assets/images/hero/image3.webp" class="slide" alt="">
    <img src="assets/images/hero/image1.webp" class="slide" alt="">
    <img src="assets/images/hero/image2.webp" class="slide" alt="">

  </div>

  <div class="overlay"></div>

  <div class="hero-content">

    <h1>Katunggan Cove Resort</h1>

    <span>
      Discover your private nature escape in Guimaras.
      Explore mangroves, enjoy island tours, relax in our pools and jacuzzi,
      and savor local cuisine at our restaurant and café.
    </span>

  </div>

  <div class="dots">
    <span class="dot active-dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

</section>

<!-- ================= ABOUT ================= -->
<section class="section" data-reveal is-visible>
  <div class="container about-grid" data-animate-about>

    <div class="about-leaves" aria-hidden="true">
      <img src="assets/images/hero/leaf.webp" alt="" loading="lazy" />
      <img src="assets/images/hero/leaf2.webp" alt="" loading="lazy" class="kc-leaf-left" />
    </div>



    <div class="about-image round-image">

      <img src="assets/images/hero/image1.webp" alt="Katunggan Cove Resort" loading="lazy" width="600" height="450">
      

    </div>

    <div class="about-content">
      <p class="section-subtitle">Our Sanctuary</p>
      <h2>A Peaceful Retreat</h2>
      <p>
        Nestled in the beautiful island of Guimaras, Katunggan Cove Resort
        offers a peaceful retreat surrounded by mangroves, pristine waters,
        and breathtaking sunsets. Experience comfort, relaxation, and
        unforgettable adventures with your family and friends.
      </p>
    </div>

  </div>
</section>

<!-- ================= ACCOMMODATION ================= -->
<section class="section bg-light" data-reveal>

  <div class="container">

    <div class="section-title">
      <h2>Relax in Comfort</h2>
    </div>


    <div class="cards">

      <div class="card">
        <img src="assets/images/hero/image1.webp" alt="Villa" loading="lazy">

        <div class="card-content">
          <h3>Villa</h3>
          <p>A spacious getaway designed for families and groups seeking comfort, privacy, and a relaxing resort experience.</p>
        </div>
      </div>

      <div class="card">
        <img src="assets/images/hero/image2.webp" alt="Premium Queen" loading="lazy">

        <div class="card-content">
          <h3>Premium Queen</h3>
          <p>A cozy retreat featuring a private terrace, perfect for couples or guests looking for a peaceful and refreshing stay.</p>
        </div>
      </div>

      <div class="card">
        <img src="assets/images/hero/image3.webp" alt="Quad Room" loading="lazy">

        <div class="card-content">
          <h3>Quad Room</h3>
          <p>Ideal for families and friends, offering generous space and comfortable accommodations for memorable vacations together.</p>
        </div>
      </div>

    </div>

  </div>

</section>



<!-- ================= GALLERY (CAROUSEL) ================= -->
<section class="section bg-light" data-reveal>
  <div class="container">
    <div class="section-title">
      <h2>Capture Beautiful Memories</h2>
      <p class="section-description">Cherish every moment with our curated gallery—sunsets, stays, and smiles.</p>
    </div>


    <div class="gallery-carousel" aria-label="Gallery carousel">


      <button class="gallery-nav gallery-prev" type="button" aria-label="Previous image">&#10094;</button>

      <div class="gallery-viewport">
        <div class="gallery-track">
          <div class="gallery-card">
            <img src="assets/images/gallery/image1.webp" alt="Gallery image 1" loading="lazy">
          </div>

          <div class="gallery-card">
            <img src="assets/images/gallery/image2.webp" alt="Gallery image 2" loading="lazy">
          </div>

          <div class="gallery-card">
            <img src="assets/images/gallery/image3.webp" alt="Gallery image 3" loading="lazy">
          </div>

          <div class="gallery-card">
            <img src="assets/images/gallery/image4.webp" alt="Gallery image 4" loading="lazy">
          </div>

          <div class="gallery-card">
            <img src="assets/images/gallery/image5.webp" alt="Gallery image 5" loading="lazy">
          </div>

          <div class="gallery-card">
            <img src="assets/images/gallery/image5.webp" alt="Gallery image 6" loading="lazy">
          </div>

        </div>
      </div>

      <button class="gallery-nav gallery-next" type="button" aria-label="Next image">&#10095;</button>
    </div>
  </div>
</section>


<!-- ================= CAFE ================= -->
<section class="section" data-reveal>

  <div class="container about-grid">

    <div class="about-content">
      <p class="section-subtitle">RESTAURANT & CAFÉ</p>

      <h2>Local Flavors and Island Delights</h2>

      <p>
        Enjoy delicious meals and refreshing beverages while taking in
        the beautiful scenery of Katunggan Cove Resort.
      </p>

    <a href="cafe.php" class="btn">
        View Menu
      </a>
    </div>

    <div class="about-image">
      <img src="assets/images/cafe/breakfastmeals.webp" alt="">
    </div>


  </div>

</section>

<!-- ================= CTA ================= -->
<section class="cta" data-reveal>

  <div class="container">

    <h2>Ready for Your Island Getaway?</h2>

    <p>
      Book your stay today and experience nature,
      relaxation, and adventure at Katunggan Cove Resort.
    </p>

    <br>

    <a href="booking.php" class="btn">
      Book Your Stay
    </a>

  </div>

</section>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/section-reveal.js"></script>
<script src="assets/js/about-reveal.js"></script>
<script src="assets/js/gallery-carousel.js"></script>

</body>
</html>

