<?php
// Shared site header/navbar
?>

  <!-- Navigation -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="logo">
        <img src="assets/images/logo/logo.svg" alt="Logo">

        <div>
          <h2>Katunggan Cove Resort</h2>
        </div>
      </a>

      <nav>
        <ul id="site-menu" class="nav-links" aria-label="Primary navigation">
          <li><a href="index.php" data-nav-link class="<?= (!isset($activePage) || $activePage === 'home') ? 'active' : '' ?>">Home</a></li>
          <li><a href="accommodation.php" data-nav-link class="<?= ($activePage ?? '') === 'accommodation' ? 'active' : '' ?>">Accommodation</a></li>
          <li><a href="facilities.php" data-nav-link class="<?= ($activePage ?? '') === 'facilities' ? 'active' : '' ?>">Facilities</a></li>
          <li><a href="gallery.php" data-nav-link class="<?= ($activePage ?? '') === 'gallery' ? 'active' : '' ?>">Gallery</a></li>
          <li><a href="cafe.php" data-nav-link class="<?= ($activePage ?? '') === 'cafe' ? 'active' : '' ?>">Café</a></li>
          <li><a href="contact.php" data-nav-link class="<?= ($activePage ?? '') === 'contact' ? 'active' : '' ?>">Contact</a></li>
        </ul>
      </nav>

      <button class="menu-btn" type="button" aria-label="Open menu" aria-controls="site-menu" aria-expanded="false">
        &#9776;
      </button>

    </div>
  </header>

