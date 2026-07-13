(function () {
  function ready(fn) {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', fn);
    } else {
      fn();
    }
  }

  ready(function () {
    const root = document.querySelector('.about-grid');
    if (!root) return;

    // Mark visible once to avoid repeated class toggling.
    const io = new IntersectionObserver(
      (entries) => {
        for (const entry of entries) {
          if (entry.isIntersecting) {
            root.classList.add('is-visible');
            io.disconnect();
            break;
          }
        }
      },
      { threshold: 0.25 }
    );

    io.observe(root);
  });
})();

