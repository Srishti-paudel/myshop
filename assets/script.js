const slides = document.querySelectorAll(".slides img");
const dots = document.querySelectorAll(".dot");
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");

let index = 0;
let autoSlide;

// Show slide
function showSlide(i) {
  slides.forEach(img => img.classList.remove("active"));
  dots.forEach(dot => dot.classList.remove("active"));

  slides[i].classList.add("active");
  dots[i].classList.add("active");
}

// Next slide
function nextSlide() {
  index = (index + 1) % slides.length;
  showSlide(index);
}

// Prev slide
function prevSlide() {
  index = (index - 1 + slides.length) % slides.length;
  showSlide(index);
}

// Auto slide (10s)
function startAutoSlide() {
  autoSlide = setInterval(nextSlide, 4000);
}

function stopAutoSlide() {
  clearInterval(autoSlide);
}

// Dot click
function switchImage(element) {
  index = Number(element.getAttribute("attr"));
  showSlide(index);
  stopAutoSlide();
  startAutoSlide();
}

// Button events
nextBtn.addEventListener("click", () => {
  nextSlide();
  stopAutoSlide();
  startAutoSlide();
});

prevBtn.addEventListener("click", () => {
  prevSlide();
  stopAutoSlide();
  startAutoSlide();
});


startAutoSlide();
