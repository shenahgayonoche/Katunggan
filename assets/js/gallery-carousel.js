(function(){
  const CAROUSEL_SELECTOR = '.gallery-carousel';
  const AUTOPLAY_INTERVAL = 3500; // ms
  const TRANSITION_DURATION = 520; // ms, should match CSS (.gallery-track)


  function initCarousel(root){
    const viewport = root.querySelector('.gallery-viewport');
    const track = root.querySelector('.gallery-track');
    const cards = Array.from(root.querySelectorAll('.gallery-card'));
    const btnPrev = root.querySelector('.gallery-prev');
    const btnNext = root.querySelector('.gallery-next');
    if(!viewport || !track || cards.length===0) return;

    let active = 0;
    let timer = null;
    let isHover = false;

    function updateClasses(){
      cards.forEach((c, i)=>{
        c.classList.remove('is-active','is-prev','is-next');
        if(i===active) c.classList.add('is-active');
        else if(i===mod(active-1, cards.length)) c.classList.add('is-prev');
        else if(i===mod(active+1, cards.length)) c.classList.add('is-next');
      });
    }

    function mod(n,m){ return ((n % m) + m) % m }

    function layout(){
      // compute translation to center active card
      const styles = getComputedStyle(track);
      const gap = parseFloat(styles.gap) || 18;
      const cardWidth = cards[0].getBoundingClientRect().width;
      const viewportWidth = viewport.getBoundingClientRect().width;

      // distance between card left edges
      const step = cardWidth + gap;
      const centerOffset = (viewportWidth / 2) - (cardWidth / 2);

      // translate so active card lands at centerOffset
      const translateX = centerOffset - (active * step);
      track.style.transform = `translateX(${translateX}px)`;
    }


    function goTo(index){
      active = mod(index, cards.length);
      updateClasses();
      layout();
    }

    function next(){ goTo(active+1) }
    function prev(){ goTo(active-1) }

    btnNext && btnNext.addEventListener('click', ()=>{ next(); resetTimer(); });
    btnPrev && btnPrev.addEventListener('click', ()=>{ prev(); resetTimer(); });

    // autoplay
    function startTimer(){
      stopTimer();
      timer = setInterval(()=>{ if(!isHover) next(); }, AUTOPLAY_INTERVAL);
    }
    function stopTimer(){ if(timer){ clearInterval(timer); timer = null } }
    function resetTimer(){ stopTimer(); startTimer(); }

    // pause on hover/focus
    root.addEventListener('mouseenter', ()=>{ isHover=true });
    root.addEventListener('mouseleave', ()=>{ isHover=false });
    root.addEventListener('focusin', ()=>{ isHover=true });
    root.addEventListener('focusout', ()=>{ isHover=false });

    // responsive: recalc on resize
    let resizeTimer = null;
    window.addEventListener('resize', ()=>{
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(()=>{ layout(); }, 120);
    });

    // initial
    // Wait a tick so layout measurements are stable
    setTimeout(()=>{
      updateClasses();
      layout();
      startTimer();
    }, 60);

    // keyboard navigation
    root.addEventListener('keydown', (e)=>{
      if(e.key==='ArrowLeft') { prev(); resetTimer(); }
      if(e.key==='ArrowRight'){ next(); resetTimer(); }
    });

    // allow clicking cards to bring forward
    cards.forEach((c,i)=>{
      c.style.cursor = 'pointer';
      c.addEventListener('click', ()=>{ if(i!==active){ goTo(i); resetTimer(); } });
    });
  }

  // init all carousels on DOMContentLoaded
  document.addEventListener('DOMContentLoaded', ()=>{
    const roots = Array.from(document.querySelectorAll(CAROUSEL_SELECTOR));
    roots.forEach(r=>{
      // make carousel focusable for keyboard nav
      r.setAttribute('tabindex','0');
      initCarousel(r);
    });
  });
})();

