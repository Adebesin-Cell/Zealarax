//menu
const body = document.querySelector("body");
const harmburger = document.querySelector(".menu-bar");
const menu = document.querySelector(".menu");
const closeBtns = document.querySelectorAll("#close");

//menu open function
harmburger.addEventListener("click", () => {
  menu.classList.add("show");
  body.classList.add("no-scroll");
});

//menu close function
closeBtns.forEach((closeBtn) => {
  closeBtn.addEventListener("click", () => {
    menu.classList.remove("show");
    body.classList.remove("no-scroll");
  });
});
