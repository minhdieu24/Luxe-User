<!DOCTYPE html>
<html lang="vn">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Chỉnh biểu tượng web -->
    <link href="./icon/Logo.svg" rel="shortcut icon" />
    <title>Luxe - Trang sức cao cấp</title>
    <!-- GG Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <!-- Styles -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/responsinve.css" />
    <!-- Scripts -->
    <script src="./js/scripts.js"></script>
  </head>
  <body>
    <!-- PC Header -->
    <header class="fixed-header">
      <div class="container">
        <div class="top-bar">
          <!-- Mobile menu -->
          <button class="hamburger-menu" onclick="burgerFunction()">
            <img src="./icon/burger.svg" alt="" />
          </button>
          <!-- Logo -->
          <a href="./" class="logo-nav">
            <img src="./icon/Logo.svg" alt="Luxe" />
            <h1 class="logo-title">Luxe</h1>
          </a>
          <!-- Search button -->
          <div class="top-act-group mobile">
            <button class="top-act-btn">
              <img src="./icon/search.svg" name="search-btn" class="searchBtn" onclick="search()"/>
            </button>
          </div> 
          <!-- nav = navigation giống div nhưng có ngữ nghĩa -->
          <!-- Navigation -->
          <nav class="navbar">
            <ul id="PC_nav">
              <li><a href="#!">TRANG CHỦ</a></li>
              <li><a href="#!">SẢN PHẨM</a></li>
              <li><a href="#!">VỀ CHÚNG TÔI</a></li>
              <li><a href="#!">HỖ TRỢ</a></li>
              <li><a href="#!">LIÊN HỆ</a></li>
            </ul>
          </nav>


          <!-- Action -->
          <div class="top-act">
            <div class="top-act-group">
              <button class="top-act-btn">
                <img src="./icon/search.svg" name="search-btn" class="searchBtn" onclick="search()"/>
              </button>
            </div>
            <div class="top-act-group">
              <button class="top-act-btn">
                <img src="./icon/heart.svg" alt="" />
                <span class="top-act-title"> 03 </span>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn">
                <img src="./icon/cart.svg" alt="" />
                <span class="top-act-title"> 03 </span>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn">
                <img src="./icon/user.svg" alt="" />
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn mode" onclick="darkFunction()">
                <img src="./icon/mode.svg" alt="" />
              </button>
            </div>
          </div>
        </div>    
        <div class="search-box">
            <input type="text" placeholder="Tìm kiếm sản phẩm...">
            <img src="./icon/delete.svg" name="close-btn" class="closeBtn" onclick="closeSearch()"/>
          </div>
      </div>
      
    </header>
    <!-- Mobile Header -->
    <header class="mobile-header">
      <div class="menu-overlay" onclick="burgerFunction()"></div>
      <!-- Menu-content -->
      <div class="menu-drawer">
        <button class="navbar-close" onclick="burgerFunction()">
          <img src="./icon/arrow-left.svg" alt="" />
        </button>
        <hr>
        <nav class="navbar-mobile">
          <ul id="mobile_nav" >
            <script>
              const pcNav = document.querySelector("#PC_nav");
              const mobileNav = document.querySelector("#mobile_nav");
              //Copy from PC nav to Mobile nav
              mobileNav.innerHTML = pcNav.innerHTML;
            </script>
            <!-- Dùng JS copy ul từ PC qua mobile -->
          </ul>
          
        </nav>
        
        <hr>
        <!-- Action -->
        <div class="top-act">
            <button class="top-act-btn">
              <img src="./icon/heart.svg" alt="" />
              <span class="top-act-title"> 03 </span>
            </button>
            <button class="top-act-btn">
              <img src="./icon/cart.svg" alt="" />
              <span class="top-act-title"> 03 </span>
            </button>
            <button class="top-act-btn">
              <img src="./icon/user.svg" alt="" />
            </button>
            <button class="top-act-btn mode" onclick="darkFunction()">
              <img src="./icon/mode.svg" alt="" />
            </button>
        </div>
      </div>
    </header>
    <script>
      
      
    </script>  
    <!--  Slider section -->
    <section id="slider">  
         <!-- aspect-ratio-169 -->
      <div class="hero-slider">
          <!-- Slide 1 -->
          <div class="hero-slide--1">
            <img src="./img/slider1.png" alt=""/>
          </div>
          <!-- Slide 2 -->
          <div class="hero-slide--2">
            <img src="./img/Slider2.png" alt=""/>
          </div>
          <!-- Slide 3 -->
          <div class="hero-slide--3">
            <img src="./img/Slider3.png" alt="" onload="loadImage()" />
          </div>
        </div>
      </div>
      <div class="dot-container">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </section>
    <!-- marquee -->
    <marquee behavior="scroll" direction="left" class="mar">
      <img src="./img/marquee-light.png" alt="marquee">
    </marquee>
    <div class="main">
      <!-- List products sales-->
    <section id="product-sale">
      <div class="container">
        <h2>Khuyến mãi ngày 8/3</h2>
        <div class="product-home">
          <!-- Product card 1 -->
          <div class="product-item">
              <div class="product-card">
                  <div class="product-card__img-wrap">
                      <a href="./product-detail.html">
                          <img src="./img/item-1.png" alt="" class="product-card__thumb" />
                      </a>
                      <button class="like-btn">
                          <img src="./icon/heart.svg" alt="" class="like-icon icon" />
                      </button>
                  </div>
                  <h3 class="product-card__title">
                      <a href="./product-detail.html">Nhẫn Vàng Đá Trang Sức NLF 453 </a>
                  </h3>
                  <p class="product-card__collection">Nhẫn cưới</p>
                  <div class="product-card__row">
                    <span class="product-card__price">1.000.000đ</span>
                    <span class="product-card__price-sales">1.500.000đ</span>
                    <img src="./icon/star.svg" alt="" class="product-card__star" />
                    <span class="product-card__score">4.3</span>
                  </div>
              </div>
          </div>
          <!-- Product 2 -->
          <div class="product-item">
            <div class="product-card">
                <div class="product-card__img-wrap">
                    <a href="./product-detail.html">
                        <img src="./img/item-1.png" alt="" class="product-card__thumb" />
                    </a>
                    <button class="like-btn">
                      <img src="./icon/heart.svg" alt="" class="like-icon icon" />
                    </button>
                </div>
                <h3 class="product-card__title">
                    <a href="./product-detail.html">Nhẫn Vàng Đá Trang Sức NLF 453 </a>
                </h3>
                <p class="product-card__collection">Nhẫn cưới</p>
                <div class="product-card__row">
                  <span class="product-card__price">1.000.000đ</span>
                  <span class="product-card__price-sales">1.500.000đ</span>
                  <img src="./icon/star.svg" alt="" class="product-card__star" />
                  <span class="product-card__score">4.3</span>
                </div>
            </div>
          </div>
            <!-- Product 3 -->
          <div class="product-item">
              <div class="product-card">
                  <div class="product-card__img-wrap">
                      <a href="./product-detail.html">
                          <img src="./img/item-1.png" alt="" class="product-card__thumb" />
                      </a>
                      <button class="like-btn">
                        <img src="./icon/heart.svg" alt="" class="like-icon icon" />
                      </button>
                  </div>
                  <h3 class="product-card__title">
                      <a href="./product-detail.html">Nhẫn Vàng Đá Trang Sức NLF 453 </a>
                  </h3>
                  <p class="product-card__collection">Nhẫn cưới</p>
                  <div class="product-card__row">
                    <span class="product-card__price">1.000.000đ</span>
                    <span class="product-card__price-sales">1.500.000đ</span>
                    <img src="./icon/star.svg" alt="" class="product-card__star" />
                    <span class="product-card__score">4.3</span>
                  </div>
              </div>
          </div>
          <!-- Product 4 -->
          <div class="product-item">
            <div class="product-card">
                <div class="product-card__img-wrap">
                    <a href="./product-detail.html">
                        <img src="./img/item-1.png" alt="" class="product-card__thumb" />
                    </a>
                    <button class="like-btn">
                      <img src="./icon/heart.svg" alt="" class="like-icon icon" />
                    </button>
                </div>
                <h3 class="product-card__title">
                    <a href="./product-detail.html">Nhẫn Vàng Đá Trang Sức NLF 453 </a>
                </h3>
                <p class="product-card__collection">Nhẫn cưới</p>
                <div class="product-card__row">
                  <span class="product-card__price">1.000.000đ</span>
                  <span class="product-card__price-sales">1.500.000đ</span>
                  <img src="./icon/star.svg" alt="" class="product-card__star" />
                  <span class="product-card__score">4.3</span>
                </div>
            </div>
          </div>
        </div>
        <!-- Button xem thêm -->
        <a href="#!" class="btn home-product">Xem thêm</a>
      </div>
    </section>
    <!-- Collection -->
    <section id="collection-home">
      <div class="collection-infor">
        <h2 class="collection-title">Bộ sưu tập nhẫn cầu hôn</h2>
        <p class="collection-desc">
          Đánh thức trái tim với những viên kim cương rực rỡ, biểu tượng cho tình yêu bất diệt
        </p>
      </div>
      <div class="img-collection">
        <div class="banner-left">
          <img src="./img/banner-1.png" alt="">
        </div>
        <div class="banner-right">
          <img src="./img/banner-2.png" alt="">
          <img src="./img/banner-3.png" alt="">
        </div>
      </div>
      <!-- Button Khám phá bộ sưu tập -->
      <a href="#!" class="btn home-col">Khám phá bộ sưu tập</a>
    </section>
    <!-- List products best-seller-->
    <section id="product-sale">
      <div class="container">
        <h2>Sản phẩm bán chạy</h2>
        <div class="product-home">
          <!-- Product card 1 -->
          <div class="product-item">
              <div class="product-card">
                  <div class="product-card__img-wrap">
                      <a href="./product-detail.html">
                          <img src="./img/item-1.png" alt="" class="product-card__thumb" />
                      </a>
                      <button class="like-btn">
                          <img src="./icon/heart.svg" alt="" class="like-icon icon" />
                      </button>
                  </div>
                  <h3 class="product-card__title">
                      <a href="./product-detail.html">Nhẫn Vàng Đá Trang Sức NLF 453 </a>
                  </h3>
                  <p class="product-card__collection">Nhẫn cưới</p>
                  <div class="product-card__row">
                    <span class="product-card__price">1.000.000đ</span>
                    <span class="product-card__price-sales">1.500.000đ</span>
                    <img src="./icon/star.svg" alt="" class="product-card__star" />
                    <span class="product-card__score">4.3</span>
                  </div>
              </div>
          </div>
          <!-- Product 2 -->
          <div class="product-item">
            <div class="product-card">
                <div class="product-card__img-wrap">
                    <a href="./product-detail.html">
                        <img src="./img/item-1.png" alt="" class="product-card__thumb" />
                    </a>
                    <button class="like-btn">
                      <img src="./icon/heart.svg" alt="" class="like-icon icon" />
                    </button>
                </div>
                <h3 class="product-card__title">
                    <a href="./product-detail.html">Nhẫn Vàng Đá Trang Sức NLF 453 </a>
                </h3>
                <p class="product-card__collection">Nhẫn cưới</p>
                <div class="product-card__row">
                  <span class="product-card__price">1.000.000đ</span>
                  <span class="product-card__price-sales">1.500.000đ</span>
                  <img src="./icon/star.svg" alt="" class="product-card__star" />
                  <span class="product-card__score">4.3</span>
                </div>
            </div>
          </div>
            <!-- Product 3 -->
          <div class="product-item">
              <div class="product-card">
                  <div class="product-card__img-wrap">
                      <a href="./product-detail.html">
                          <img src="./img/item-1.png" alt="" class="product-card__thumb" />
                      </a>
                      <button class="like-btn">
                        <img src="./icon/heart.svg" alt="" class="like-icon icon" />
                      </button>
                  </div>
                  <h3 class="product-card__title">
                      <a href="./product-detail.html">Nhẫn Vàng Đá Trang Sức NLF 453 </a>
                  </h3>
                  <p class="product-card__collection">Nhẫn cưới</p>
                  <div class="product-card__row">
                    <span class="product-card__price">1.000.000đ</span>
                    <span class="product-card__price-sales">1.500.000đ</span>
                    <img src="./icon/star.svg" alt="" class="product-card__star" />
                    <span class="product-card__score">4.3</span>
                  </div>
              </div>
          </div>
          <!-- Product 4 -->
          <div class="product-item">
            <div class="product-card">
                <div class="product-card__img-wrap">
                    <a href="./product-detail.html">
                        <img src="./img/item-1.png" alt="" class="product-card__thumb" />
                    </a>
                    <button class="like-btn">
                      <img src="./icon/heart.svg" alt="" class="like-icon icon" />
                    </button>
                </div>
                <h3 class="product-card__title">
                    <a href="./product-detail.html">Nhẫn Vàng Đá Trang Sức NLF 453 </a>
                </h3>
                <p class="product-card__collection">Nhẫn cưới</p>
                <div class="product-card__row">
                  <span class="product-card__price">1.000.000đ</span>
                  <span class="product-card__price-sales">1.500.000đ</span>
                  <img src="./icon/star.svg" alt="" class="product-card__star" />
                  <span class="product-card__score">4.3</span>
                </div>
            </div>
          </div>
        </div>
        <!-- Button xem thêm -->
        <a href="#!" class="btn home-product">Xem thêm</a>
      </div>
    </section>
    <!-- Testimonials -->
    <section id="home-reviews">
      <div class="review-main">
        <h2 class="review-title active">
          <span class="review-title-1">Khách Hàng</span>
          <span class="review-title-2">Đánh Giá</span>
        </h2>
        <p class="review-desc">
          KHÁCH HÀNG CHÚNG TÔI NÓI GÌ
        </p>
        <div class="review-container">
          <!-- Review 1 -->
          <div class="home-review">
            <div class="review-content">
              <img src="./img/avatar-1.jpg" alt="" class="review-avt">
              <img src="./icon/review.svg" alt="" class="review-icon">
              <p class="review-script">
                "Mình rất hài lòng với sản phẩm nhẫn bạc đính đá thương hiệu Luxe. Nhẫn được làm từ chất liệu bạc cao cấp, sáng bóng, không bị xỉn màu. Đá đính trên nhẫn có màu sắc tươi tắn, lấp lánh, tạo nên vẻ đẹp tinh tế và sang trọng."
              </p>
            </div>
          </div>
          <!-- Review 2 -->
          <div class="home-review">
            <div class="review-content">
              <img src="./img/avatar-2.jpg" alt="" class="review-avt">
              <img src="./icon/review.svg" alt="" class="review-icon">
              <p class="review-script">
                "Tôi đã mua đôi hoa tai kim cương từ Luxe làm quà tặng cho vợ và cô ấy rất thích. Thiết kế Luxe tinh tế và thanh lịch, chất lượng kim cương cũng rất tốt, sáng bóng và lấp lánh. Đây là món quà hoàn hảo cho những dịp đặc biệt."
              </p>
            </div>
          </div>
          <!-- Review 3 -->
          <div class="home-review">
            <div class="review-content">
              <img src="./img/avatar-3.jpg" alt="" class="review-avt" onload="loadReview()">
              <img src="./icon/review.svg" alt="" class="review-icon">
              <p class="review-script">
                "Chất liệu cao cấp và chế tác tinh xảo từ Luxe khiến tôi cảm thấy vô cùng sang trọng và đẳng cấp. Dịch vụ khách hàng của Luxe cũng rất chuyên nghiệp và chu đáo. Tôi thực sự hài lòng với sản phẩm này và highly recommend cho mọi người!"
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- 3 dots -->
      <div class="dot-container-review">
        <div class="dot-review active"></div>
        <div class="dot-review"></div>
        <div class="dot-review"></div>
      </div>
    </section>
    <!-- Newsletter -->
    <section id="newsletter">
      <div class="container">
        <div class="news">
          <p class="news-content">Đăng ký bản tin của LUXE để cập nhật thông tin mới nhất về chương trình giảm giá và sản phẩm!</p>
          <form class="news-register">
            <input type="text" name="dangKy" id="dangKy" placeholder="Nhập Email của bạn" class="text-reg">
            <button class="btn register">
              Đăng ký
            </button>
          </form>
        </div>
      </div>
    </section>
    </div>
    <!-- Footer -->
    <footer class="footer">
      <div class="footer-row">
        <div class="container">
          <div class="footer-column">
            <!-- Logo -->
            <a href="./" class="logo-foot">
              <img src="./icon/Logo.svg" alt="Luxe" />
              <h1 class="logo-title">Luxe</h1>
            </a>
            <!-- Download app -->
            <div class="download-container">
              <p class="download-title">
                Tải ngay Luxe app
              </p>
              <div class="download-method">
                <a href="https://play.google.com/store/apps" class="ch-store">
                <img src="./icon/ch-play.svg" alt="" />
              </a>
              <a href="https://www.apple.com/vn/app-store" class="app-store">
                <img src="./icon/app-store.svg" alt="" />
              </a>
              </div>
            </div>
          </div>
          <div class="footer-column">
            <h3 class="footer__heading">Danh mục</h3>
            <ul class="footer__list">
                <li class="footer__item">
                    <a href="#!" class="footer__link">
                      Trang chủ
                    </a>
                </li>
                <li class="footer__item">
                    <a href="#!" class="footer__link">
                      Sản phẩm
                    </a>
                </li>
                <li class="footer__item">
                    <a href="#!" class="footer__link"> Về chúng tôi </a>
                </li>
                <li class="footer__item">
                    <a href="#!" class="footer__link">
                      Hỗ trợ
                    </a>
                </li>
                <li class="footer__item">
                  <a href="#!" class="footer__link">
                    Liên hệ
                  </a>
              </li>
            </ul>
          </div>
          <div class="footer-column">
            <h3 class="footer__heading">Thông tin liên hệ</h3>
            <ul class="footer__list">
                <li class="footer__item">
                  279 Nguyễn Tri Phương, Phường 5, Quận 10, TP.HCM
                </li>
                <li class="footer__item">
                  (+84) 046 990 809
                </li>
                <li class="footer__item">
                  info@example.com
                </li>
            </ul>
          </div>
          <div class="footer-column">
            <h3 class="footer__heading">Theo dõi</h3>
            <div class="footer__social">
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/facebook.svg" alt="">
                </a>
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/insta.svg" alt="">
                </a>
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/twitter.svg" alt="">
                </a>
            </div>
          </div>
        </div>
    </div>


    <div class="footer-copyright">
        <div class="container">
          <div class="payment-method">
            <img src="./icon/paypal.svg" alt="">
            <img src="./icon/visa.svg" alt="">
            <img src="./icon/master-card.svg" alt="">
          </div>
          <p class="footer__copyright-text">
            Copyright © 2023 UIHUT All Rights Reserved
          </p>
        </div>
    </div>
    </footer>
  </body>
</html>


