const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide-item");
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");
let index = 0;

function showSlide(i) {
  if (i >= slides.length) index = 0; // Reset to first slide
  if (i < 0) index = slides.length - 1; // Go to last slide if index is negative
  slider.style.transform = `translateX(${-index * 100}%)`; // Adjust slider position
}

nextBtn.addEventListener("click", () => {
  index++;
  showSlide(index); // Move to the next slide
});

prevBtn.addEventListener("click", function () {
  index--;
  showSlide(index); // Move to the previous slide
});
