// Defining options mandatory param in IntersectionObserver
const options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.1,
};

// Callback function
const callback = (entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animated");
      observer.unobserve(entry.target);
    }
  });
};
// New instance of IntersectionObserver
const observer = new IntersectionObserver(callback, options);

const animatedElements = document.querySelectorAll(".animated-element");

animatedElements.forEach(element => observer.observe(element));