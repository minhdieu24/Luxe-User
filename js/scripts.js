// Click hambergur menu
function burgerFunction() {
    const overlay = document.querySelector(".menu-overlay");
    const menuDrawer = document.querySelector(".menu-drawer");
    overlay.classList.toggle("active");
    menuDrawer.classList.toggle("active");
  }
  function search() {
    const searchBox = document.querySelector(".search-box");
    searchBox.classList.add("active");
  }
  function closeSearch() {
    const searchBoxActive = document.querySelector(".search-box.active");
    searchBoxActive.classList.remove("active");
  }

    
  //Click dark mode button
  function darkFunction() {
    const element = document.body;
    element.classList.toggle("dark-mode");
   //Đổi ảnh icon xóa
   const imageDelete = document.querySelector(".delete img");
   if (element.classList.contains("dark-mode")) {
    imageDelete.src = "./icon/delete-dark.svg";
  } else {
    imageDelete.src = "./icon/delete.svg";
  }
}
  
      

    




  