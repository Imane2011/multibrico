// const slides = document.querySelectorAll('.slide');
// const next = document.querySelector('.next');
// const prev = document.querySelector('.prev');
// let index = 0;

// function showSlide(i) {
//   slides.forEach((slide, idx) => {
//     slide.classList.remove('active');
//     if (idx === i) slide.classList.add('active');
//   });
// }

// function nextSlide() {
//   index = (index + 1) % slides.length;
//   showSlide(index);
// }

// function prevSlide() {
//   index = (index - 1 + slides.length) % slides.length;
//   showSlide(index);
// }

// next.addEventListener('click', nextSlide);
// prev.addEventListener('click', prevSlide);

// Slide automatique toutes les 5 secondes
// setInterval(nextSlide, 5000);

const buttons = document.querySelectorAll(".btn");
const slides = document.querySelectorAll(".slide");
// console.log(buttons);
// console.log(slides);

buttons.forEach((button) => {
  button.addEventListener("click", (e) => {
  const calcNextSLide = e.target.id === "next" ? 1 : -1;
  const slideActive = document.querySelector(".active");

  let newIndex = calcNextSLide + [...slides].indexOf(slideActive);

if(newIndex < 0) newIndex = [...slides].length - 1;
if(newIndex >= [...slides].length) newIndex = 0;
slides[newIndex].classList.add("active");
slideActive.classList.remove("active");
});
});