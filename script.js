const slides = document.querySelector('.slides');
const images = document.querySelectorAll('.slides img');

let index = 0;
let startX = 0;
let isDragging = false;

// Touch events (mobile)
slides.addEventListener('touchstart', (e) => {
  startX = e.touches[0].clientX;
});

slides.addEventListener('touchend', (e) => {
  let endX = e.changedTouches[0].clientX;
  handleSwipe(startX, endX);
});

// Mouse events (desktop)
slides.addEventListener('mousedown', (e) => {
  startX = e.clientX;
  isDragging = true;
});

slides.addEventListener('mouseup', (e) => {
  if (!isDragging) return;
  let endX = e.clientX;
  handleSwipe(startX, endX);
  isDragging = false;
});

function handleSwipe(start, end) {
  let diff = start - end;

  if (diff > 50) {
    // swipe left
    index++;
  } else if (diff < -50) {
    // swipe right
    index--;
  }

  // boundaries
  if (index < 0) index = 0;
  if (index >= images.length) index = images.length - 1;

  slides.style.transform = `translateX(-${index * 300}px)`;
}
