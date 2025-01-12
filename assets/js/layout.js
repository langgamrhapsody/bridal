//navbar and footerbutton
const nav = document.querySelector(".navbar");
const scrollButton = document.getElementById("footer__button");
window.addEventListener("scroll", function () {
  if (window.scrollY > 16) {
    nav.classList.add("navbar__scrolled");
    scrollButton.classList.add("footer__button-appear");
  } else if (window.scrollY < 16) {
    nav.classList.remove("navbar__scrolled");
    scrollButton.classList.remove("footer__button-appear");
  }
});

//navbar active
const currentPage = window.location.pathname;
if (currentPage === "/property.php") {
  nav.classList.add("custom-nav");
}

//body
const body = document.getElementsByTagName("body")[0];
if (currentPage === "/property.php") {
  body.style.overflow = "hidden";
}
