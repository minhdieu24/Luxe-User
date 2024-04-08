// Click "-"
function Decrease(){
    var count = parseInt(document.getElementById("count").innerHTML);
    if (count > 0) {
      count--;
      document.getElementById("count").innerHTML = count;
    }
  }
  //Click "+"
  function Increase(){
    var count = parseInt(document.getElementById("count").innerHTML);
    count++;
    document.getElementById("count").innerHTML = count;
  }
  
  function darkFunction() {
    const element = document.body;
    element.classList.toggle("dark-mode");
    // Đổi ảnh marquee chỉ khi bật dark-mode
    const imageReturn = document.querySelector(".return img");
    const imagePayment = document.querySelector(".payment img");
    const imageGuarantee = document.querySelector(".guarantee img");
    const imageDelivery = document.querySelector(".delivery img");
    //Đổi màu shadow của imgWrap khi qua dark mode
    const imgWrapShadows = document.querySelectorAll(".product-card");
    if (element.classList.contains("dark-mode")) {
      imageReturn.src = "./icon/sanpham-return-dark.svg";
      imagePayment.src = "./icon/sanpham-payment-dark.svg";
      imageGuarantee.src = "./icon/sanpham-guarantee-dark.svg";
      imageDelivery.src = "./icon/sanpham-delivery-dark.svg";
      imgWrapShadows.forEach((element) => {
        element.style.boxShadow = "0px 20px 60px 0px rgba(0, 0, 0, 0.2)";
      });
    } else {
      imageReturn.src = "./icon/sanpham-return.svg";
      imagePayment.src = "./icon/sanpham-payment.svg";
      imageGuarantee.src = "./icon/sanpham-guarantee.svg";
      imageDelivery.src = "./icon/sanpham-delivery.svg";
      imgWrapShadows.forEach((element) => {
        element.style.boxShadow = "0px 60px 20px 0px rgba(237, 237, 246, 0.20)";
      });
    }
  
    }
    function openModal() {
      var modal = document.getElementById("myModal");
      modal.style.display = "block";
    }
  
    function closeModal() {
      var modal = document.getElementById("myModal");
      modal.style.display = "none";
    }
    function toggleSizeList() {
      var sizeList = document.getElementById("sizeList");
      sizeList.style.display = sizeList.style.display === "none" ? "block" : "none";
    }
  
    function selectSize() {
      var sizeSelect = document.getElementById("sizeSelect");
      var selectedSize = sizeSelect.value;
      displaySelectedSize(selectedSize);
    }
  
    function setSize(size) {
      var sizeSelect = document.getElementById("sizeSelect");
      sizeSelect.value = size;
      displaySelectedSize(size);
      toggleSizeList();
    }
  
    function displaySelectedSize(size) {
      var selectedSizeElement = document.querySelector(".selected-size");
      selectedSizeElement.textContent = size !== "" ? size : "Chọn size";
    }
    function validateStar() {
      var starInput = document.getElementById("reviewStar").value;
      var starError = document.getElementById("starError");
  
      // Chuyển đổi giá trị nhập vào thành số
      var starValue = parseFloat(starInput);
  
      // Kiểm tra xem giá trị có nằm trong khoảng từ 1 đến 5 không
      if (starValue < 1 || starValue > 5 || isNaN(starValue)) {
          starError.textContent = "Số sao phải nằm trong khoảng từ 1 đến 5";
      } else {
          starError.textContent = ""; // Xóa thông báo lỗi nếu hợp lệ
      }
    } 
  