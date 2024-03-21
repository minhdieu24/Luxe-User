// Click hambergur menu
function burgerFunction() {
    const overlay = document.querySelector(".menu-overlay");
    const menuDrawer = document.querySelector(".menu-drawer");
    overlay.classList.toggle("active");
    menuDrawer.classList.toggle("active");
  }
  
  
  //Click dark mode button
  function darkFunction() {
    const element = document.body;
    element.classList.toggle("dark-mode");
  }

  
  
  
  