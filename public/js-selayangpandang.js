const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide-item');
const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');
let index = 0;

function showSlide(i) {
  if (i >= slides.length) index = 0;
  if (i < 0) index = slides.length - 1;
  slider.style.transform = `translateX(${-index * 100}%)`;
}

nextBtn.addEventListener('click', () => {
  index++;
  showSlide(index);
});

prev.addEventListener("click", function () {
    let items = document.querySelectorAll(".item");
    document.querySelector(".slide").prepend(items[items.length - 1]); // here the length of items = 6
});
