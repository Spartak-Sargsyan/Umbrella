let menuBtn = document.getElementById("mobile__btn");
let nav = document.getElementById("mobile__nav");

menuBtn.addEventListener("click", () => {
  nav.classList.toggle("active");
});

//aos
AOS.init();