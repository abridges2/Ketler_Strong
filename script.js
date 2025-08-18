// Defining options mandatory param in IntersectionObserver
const options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.1,
};

// Callback function
const callback = (entries) => {
  entries.forEach(entry => {
    const el = entry.target;

    if (entry.isIntersecting) {
      // Restart the CSS animation each time it enters
      el.classList.remove("animated");
      void el.offsetWidth;
      el.classList.add("animated");
    } else{
      el.classList.remove("animated");
    }
  });
};

// New instance of IntersectionObserver
const observer = new IntersectionObserver(callback, options);

const animatedElements = document.querySelectorAll(".animated-element");

animatedElements.forEach(element => observer.observe(element));