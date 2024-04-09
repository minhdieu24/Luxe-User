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
  // Đổi ảnh marquee chỉ khi bật dark-mode
  const imageMarquee = document.querySelector(".mar img");
  if (element.classList.contains("dark-mode")) {
    imageMarquee.src = "./img/marquee-dark.png";
  } else {
    imageMarquee.src = "./img/marquee-light.png";
  }
}

//Load slider
function loadImage() {
  const imgPosition = document.querySelectorAll(".hero-slider img");
  const imgContainer = document.querySelector(".hero-slider");
  const dotItem = document.querySelectorAll(".dot");
  let imgNumber = imgPosition.length;
  let index = 0;
  imgPosition.forEach(function (image, index) {
    image.style.left = index * 100 + "%";
    dotItem[index].addEventListener("click", function () {
      slide(index);
    });
  });
  function imgSlide() {
    index++;
    if (index >= imgNumber) {
      index = 0;
    }
    slide(index);
  }

  function slide(index) {
    imgContainer.style.left = index * -100 + "%";
    const dotActive = document.querySelector(".dot-container .dot.active");
    dotActive.classList.remove("active");
    dotItem[index].classList.add("active");
  }
  setInterval(imgSlide, 5000);
}
