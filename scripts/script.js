var button = document.querySelector(".main-nav__toggle");
var button2 = document.querySelector(".main-nav__toggle2");

var menu = document.querySelector(".main-nav");

button.addEventListener("click", function (evt) {
    evt.preventDefault();
    menu.classList.add("main-nav--closed");
});

button2.addEventListener("click", function (evt) {
    evt.preventDefault();
    menu.classList.remove("main-nav--closed");
});
