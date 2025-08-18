const observerOptions = { root: null, rootMargin: "0px 0px -10% 0px", threshold: 0.15 };

const observerCallback = (entries, observer) => {
  for (const entry of entries) {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
      // one-and-done for the icons block to avoid flicker
      if (entry.target.classList.contains('social-icons')) observer.unobserve(entry.target);
    } else {
      // keep your other sections repeatable if you want, but icons stay once shown
      if (!entry.target.classList.contains('social-icons')) {
        entry.target.classList.remove('show');
      }
    }
  }
};

const observer = new IntersectionObserver(observerCallback, observerOptions);

// 0) assign stagger delays programmatically (in case icons change later)
document.querySelectorAll('.social-icons').forEach(block => {
  block.querySelectorAll('.social-icon').forEach((icon, i) => {
    icon.style.transitionDelay = `${i * 0.08}s`;
  });
});

// 1) observe everything that should animate
document.querySelectorAll('.animated-element').forEach(el => observer.observe(el));
