// Navbar background on scroll
const navbar = document.querySelector(".navbar");
let isScrolling = false;

if (navbar) {
  window.addEventListener("scroll", () => {
    if (!isScrolling) {
      window.requestAnimationFrame(() => {
        navbar.classList.toggle("scrolled", window.scrollY > 50);
        isScrolling = false;
      });
      isScrolling = true;
    }
  });
}

// Mobile hamburger toggle
const menuBtn = document.querySelector(".menu-btn");
const siteMenu = document.querySelector("#site-menu");

function setMenuOpen(isOpen) {
  if (!navbar || !menuBtn) return;
  navbar.classList.toggle("menu-open", isOpen);
  menuBtn.setAttribute("aria-expanded", String(isOpen));
  document.body.style.overflow = isOpen ? "hidden" : "";
  document.documentElement.style.overflow = isOpen ? "hidden" : "";
}

if (menuBtn && siteMenu) {
  // click
  menuBtn.addEventListener("click", () => {
    const isOpen = navbar && navbar.classList.contains("menu-open");
    setMenuOpen(!isOpen);
  });

  // keyboard support for Enter / Space
  menuBtn.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      const isOpen = navbar && navbar.classList.contains('menu-open');
      setMenuOpen(!isOpen);
    }
  });

  // Close on link click (use delegation)
  siteMenu.addEventListener('click', (e) => {
    const link = e.target.closest('[data-nav-link]');
    if (!link) return;
    // allow the navigation to happen, but close the menu for UX
    setMenuOpen(false);
  });

  // Close on Escape
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") setMenuOpen(false);
  });

  // Close when clicking outside the header
  document.addEventListener("click", (e) => {
    if (!navbar || !navbar.classList.contains("menu-open")) return;
    const header = navbar;
    if (header && !header.contains(e.target)) setMenuOpen(false);
  });
}

// Active nav link logic (runs regardless of mobile menu presence)
// Simplified, robust active link detection
function updateActiveNavLinks() {
  const anchors = Array.from(document.querySelectorAll('#site-menu a[data-nav-link]'));
  if (!anchors.length) return;

  // Determine current file name (use index.php for directory roots)
  let currentFile = window.location.pathname.split('/').pop() || '';
  if (currentFile === '') currentFile = 'index.php';

  // Clear previous active states
  anchors.forEach(a => a.classList.remove('active'));

  // Find first matching anchor by resolved pathname or filename
  for (const a of anchors) {
    const raw = (a.getAttribute('href') || '').trim();

    // skip placeholders
    if (!raw || raw === '#') continue;

    // same-page hash link: only match if hash equals
    if (raw.startsWith('#')) {
      if (raw === window.location.hash && window.location.hash !== '') {
        a.classList.add('active');
        return;
      }
      continue;
    }

    let hrefFile = '';
    try {
      const resolved = new URL(raw, window.location.href);
      hrefFile = resolved.pathname.split('/').pop() || '';
      // treat directory paths as index.php
      if (hrefFile === '') hrefFile = 'index.php';
    } catch (e) {
      // fallback: use raw filename
      hrefFile = raw.split('/').pop() || '';
    }

    if (hrefFile === currentFile) {
      a.classList.add('active');
    }
  }
}

updateActiveNavLinks();
window.addEventListener('popstate', updateActiveNavLinks);
window.addEventListener('hashchange', updateActiveNavLinks);

// Automatic slider
const slides = Array.from(document.querySelectorAll(".slide"));
const dots = Array.from(document.querySelectorAll(".dot"));

if (slides.length > 0) {
  let current = 0;

  function showSlide(index) {
    const safeIndex = (index + slides.length) % slides.length;

    slides.forEach((slide, slideIndex) => {
      slide.classList.toggle("active", slideIndex === safeIndex);
    });

    if (dots.length === slides.length) {
      dots.forEach((dot, dotIndex) => {
        dot.classList.toggle("active-dot", dotIndex === safeIndex);
      });
    }
  }

  setInterval(() => {
    current++;
    showSlide(current);
  }, 5000);
}

const gallery = document.querySelector(".gallery-carousel");
const galleryTrack = document.querySelector(".gallery-track");
const galleryPrev = document.querySelector(".gallery-prev");
const galleryNext = document.querySelector(".gallery-next");

if (gallery && galleryTrack && galleryPrev && galleryNext) {
  const cards = () => Array.from(galleryTrack.querySelectorAll(".gallery-card"));
  const getCardWidth = () => {
    const first = galleryTrack.querySelector(".gallery-card");
    if (!first) return 0;
    const styles = window.getComputedStyle(first);
    const marginRight = parseFloat(styles.marginRight || "0");
    return first.getBoundingClientRect().width + marginRight;
  };

  let index = 0;

  function clamp(val, min, max) {
    return Math.max(min, Math.min(max, val));
  }

  function update() {
    const list = cards();
    if (!list.length) return;

    index = clamp(index, 0, list.length - 1);
    const cardWidth = getCardWidth();
    galleryTrack.style.transform = `translateX(${-index * cardWidth}px)`;
  }

  galleryPrev.addEventListener("click", () => {
    index -= 1;
    update();
  });

  galleryNext.addEventListener("click", () => {
    index += 1;
    update();
  });



  // swipe support
  let startX = null;
  gallery.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  }, { passive: true });

  gallery.addEventListener("touchend", (e) => {
    if (startX == null) return;
    const dx = e.changedTouches[0].clientX - startX;
    if (Math.abs(dx) > 40) {
      index += dx > 0 ? -1 : 1;
      update();
    }
    startX = null;
  });

  // keep in sync on resize
  window.addEventListener("resize", update);
  update();
}