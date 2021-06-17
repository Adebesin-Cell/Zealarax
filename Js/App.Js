const body = document.querySelector("body");
const harmburger = document.querySelector(".menu-bar");
const menu = document.querySelector(".menu");
const closeBtns = document.querySelectorAll("#close");

harmburger.addEventListener("click", () => {
  menu.classList.add("show");
  body.classList.add("no-scroll");
});

closeBtns.forEach((close) => {
  close.addEventListener("click", () => {
    menu.classList.remove("show");
    body.classList.remove("no-scroll");
  });
});
