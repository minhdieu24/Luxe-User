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
    imageReturn.src = "./icon/return-dark.svg";
    imagePayment.src = "./icon/payment-dark.svg";
    imageGuarantee.src = "./icon/guarantee-dark.svg";
    imageDelivery.src = "./icon/delivery-dark.svg";
    imgWrapShadows.forEach((element) => {
      element.style.boxShadow = "0px 20px 60px 0px rgba(0, 0, 0, 0.2)";
    });
  } else {
    imageReturn.src = "./icon/return.svg";
    imagePayment.src = "./icon/payment.svg";
    imageGuarantee.src = "./icon/guarantee.svg";
    imageDelivery.src = "./icon/delivery.svg";
    imgWrapShadows.forEach((element) => {
      element.style.boxShadow = "0px 60px 20px 0px rgba(237, 237, 246, 0.20)";
    });
  }

  }
  function openPopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "block";
  }

  function closePopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "none";
  }

