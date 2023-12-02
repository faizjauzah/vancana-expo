const jumbotronElement = document.querySelector("section.jumbotron");

const jumbotronObserver = new IntersectionObserver(
  (entries) => {
    const [entry] = entries;

    if (!entry.isIntersecting) {
      document.querySelector("nav").classList.add("scrolled");
    } else {
      document.querySelector("nav").classList.remove("scrolled");
    }
  },
  { threshold: 0.9 }
);

jumbotronObserver.observe(jumbotronElement);
