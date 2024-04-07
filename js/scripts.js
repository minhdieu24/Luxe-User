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
   //Đổi ảnh icon xóa //chưa chạy được
   const imageDelete = document.querySelector(".delete img");
   if (element.classList.contains("dark-mode")) {
    imageDelete.src = "./icon/delete-dark.svg";
  } else {
    imageDelete.src = "./icon/delete.svg";
  }
}
// Lấy modal
var modal = document.getElementById("cartModal");

// Lấy nút đóng
var closeBtn = modal.querySelector(".close");

// Khi người dùng nhấn nút đóng, ẩn modal
closeBtn.onclick = function() {
  modal.style.display = "none";
}

// Hiển thị modal khi sản phẩm được thêm vào giỏ hàng
function showCartModal() {
  modal.style.display = "block";
  
  // Tự động ẩn modal sau 3 giây
  setTimeout(function() {
    modal.style.display = "none";
  }, 3000);
}

// Sự kiện click cho nút "Thêm vào giỏ hàng"
function addToCart() {
  // Thêm sản phẩm vào giỏ hàng (có thể là một chức năng PHP)
  
  // Hiển thị modal thông báo
  showCartModal();
}
  
      

    




  