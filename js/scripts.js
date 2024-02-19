// Click hambergur menu
function burgerFunction() {
  var overlay = document.querySelector(".menu-overlay");
  var menuDrawer = document.querySelector(".menu-drawer");
  overlay.classList.toggle("active");
  menuDrawer.classList.toggle("active");
}

//Click dark mode button
function darkFunction() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}
