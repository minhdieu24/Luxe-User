<!DOCTYPE html>
<html lang="vn">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Chỉnh biểu tượng web -->
  <link href="./icon/Logo.svg" rel="shortcut icon" />
  <title>Luxe - Trang sức cao cấp</title>
  <link
    href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
    rel="stylesheet" />
  <!-- FONT AWESOME - THƯ VIỆN ICON -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <!-- GG Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prata:wght@400&display=swap" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet" />
  <!-- Boxicon CSS -->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  <!-- swiper css -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />

  <!-- Styles -->
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/responsinve.css" />
  <!-- Scripts -->
  <script src="./js/scripts.js"></script>
  <script src="./js/filter.js"></script>
</head>

<body>

  <!-- PC Header -->
  <!-- PC Header -->
  <?php
  ?>
  <header class="fixed-header">
    <div class="container">
      <div class="top-bar">
        <!-- Mobile menu -->
        <button class="hamburger-menu" onclick="burgerFunction()">
          <img src="./icon/burger.svg" alt="" />
        </button>
        <script src="./js/scripts.js"></script>
        <!-- Logo -->
        <a href="./" class="logo-nav">
          <img src="./icon/Logo.svg" alt="Luxe" />
          <h1 class="logo-title">Luxe</h1>
        </a>
        <!-- nav = navigation giống div nhưng có ngữ nghĩa -->
        <!-- Navigation -->
        <nav class="navbar">
          <ul>
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
              <img src="./icon/search.svg" alt="" />
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
      <hr />
      <nav class="navbar-mobile">
        <ul>
          <li><a href="#!">TRANG CHỦ</a></li>
          <li><a href="#!">SẢN PHẨM</a></li>
          <li><a href="#!">VỀ CHÚNG TÔI</a></li>
          <li><a href="#!">HỖ TRỢ</a></li>
          <li><a href="#!">LIÊN HỆ</a></li>
        </ul>
      </nav>
      <hr />
      <!-- Action -->
      <div class="top-act">
        <button class="top-act-btn">
          <img src="./icon/search.svg" alt="" />
        </button>
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
  <!-----------------Phần trang chủ/sản phẩm-------------->
  <div class="prod-longest-line"></div>
  <div class="prod-nav-bar">
    <div class="container">
      <nav class="prod-nav-bar__text">
        <ul>
          <li>
            <a href="#!" class="prod-nav-bar__text--Trang-chu">Trang chủ</a>
          </li>
          <!-- Đường phân cách -->
          <li class="top-act-separate"></li>
          <li><span class="prod-nav-bar__text--San-pham">Sản phẩm</span></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="container-main">
    <!------------------- Product Wrap --------------------------->
    <div class="container">
      <h2 class="container__title-page-product">SẢN PHẨM</h2>
      <div class="container__product-wrap">
        <!-- <nav class="list-product">
            <a href="#!" id="all">TẤT CẢ</a>
            <span class="separator"> | </span>
            <a class="center" href="#!">VÒNG TAY</a>
            <span class="separator"> | </span>
            <a href="#!">NHẪN</a>
            <span class="separator"> | </span>
            <a href="#!">BÔNG TAI</a>
            <span class="separator"> | </span>
            <a href="#!">LẮC TAY</a>
            <span class="separator"> | </span>
            <a href="#!">DÂY CHUYỀN</a>
            </nav> -->
        <ul class="product-wrap--nav-links">
          <li class="center"><a href="#">TẤT CẢ</a></li>
          <li class="center"><a href="#">NHẪN</a></li>
          <li class="center"><a href="#">DÂY CHUYỀN</a></li>
          <li class="center"><a href="#">VÒNG TAY</a></li>
          <li class="center"><a href="#">BÔNG TAI</a></li>
        </ul>
      </div>
      <div class="prod-second-line"></div>
    </div>

    <!---------------------- BỘ LỌC SẢN PHẨM --------------------------------->
    <article id="article-products">
      <div class="toolbar toolbar-products">
        <div class="filter-wrapper pull-left">
          <div class="filter-custom trigger-filter">
            <span>Bộ lọc</span>
            <div class="groupFilterNew">
              <div class="contentFilter clearfix">
                <div class="collection-filter-price collection-item">
                  <div class="sidebar-sort">
                    <div class="sort_title">
                      <span>Khoảng giá</span> <i class="fa fa-sort-down"></i>
                    </div>
                    <ul class="no-bullets filter-price clearfix sidebar-content">
                      <li class="hide custom-filter-input" data-filter1="0-max">
                        <label>
                          <input type="checkbox" name="price-filter" data-price="0:max" data-value="0-max"
                            value="((price:product>=0))" />
                          <span>Tất cả</span>
                        </label>
                      </li>
                      <li class="custom-filter-input" data-filter1="0-1-000-000">
                        <label>
                          <input type="checkbox" name="price-filter" data-price="0:1,000,000" data-value="0-1-000-000"
                            value="((price:product<1,000,000))" />
                          <span>Nhỏ hơn 1.000.000₫</span>
                        </label>
                      </li>
                      <li class="custom-filter-input" data-filter1="1-000-000-3-000-000">
                        <label>
                          <input type="checkbox" name="price-filter" data-price="1,000,000:3,000,000"
                            data-value="1-000-000-3-000-000"
                            value="((price:product>=1,000,000)&amp;&amp;(price:product<3,000,000))" />
                          <span>Từ 1.000.000₫ - 3.000.000₫</span>
                        </label>
                      </li>
                      <li class="custom-filter-input" data-filter1="3-000-000-5-000-000">
                        <label>
                          <input type="checkbox" name="price-filter" data-price="3,000,000:5,000,000"
                            data-value="3-000-000-5-000-000"
                            value="((price:product>=3,000,000)&amp;&amp;(price:product<5,000,000))" />
                          <span>Từ 3.000.000₫ - 5.000.000₫</span>
                        </label>
                      </li>
                      <li class="custom-filter-input" data-filter1="5-000-000-7-000-000">
                        <label>
                          <input type="checkbox" name="price-filter" data-price="5,000,000:7,000,000"
                            data-value="5-000-000-7-000-000"
                            value="((price:product>=5,000,000)&amp;&amp;(price:product<7,000,000))" />
                          <span>Từ 5.000.000₫ - 7.000.000₫</span>
                        </label>
                      </li>
                      <li class="custom-filter-input" data-filter1="7-000-000-10-000-000">
                        <label>
                          <input type="checkbox" name="price-filter" data-price="7,000,000:10,000,000"
                            data-value="7-000-000-10-000-000"
                            value="((price:product>=7,000,000)&amp;&amp;(price:product<10,000,000))" />
                          <span>Từ 7.000.000₫ - 10.000.000₫</span>
                        </label>
                      </li>
                      <li class="custom-filter-input" data-filter1="10-000-000-max">
                        <label>
                          <input type="checkbox" name="price-filter" data-price="10,000,000:max"
                            data-value="10-000-000-max" value="((price:product>=10,000,000))" />
                          <span>Lớn hơn 10.000.000₫</span>
                        </label>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="collection-filter-color collection-item">
                  <div class="sidebar-sort">
                    <div class="sort_title">
                      <span>Màu sắc</span> <i class="fa fa-sort-down"></i>
                    </div>
                    <ul class="mg-left-0 no-bullets filter-variant filter-color clearfix">
                      <li class="pd-left-0">
                        <label data-filter="Vàng Vàng" data-filter1="vang-vang"
                          class="filter-vendor__item custom-filter-input vang-vang">
                          <input class="" type="checkbox" value="(variant:product=Vàng Vàng)" data-value="vang-vang" />
                          <span>Vàng Vàng</span>
                        </label>
                      </li>

                      <li class="pd-left-0">
                        <label data-filter="Vàng Trắng" data-filter1="vang-trang"
                          class="filter-vendor__item custom-filter-input vang-trang">
                          <input class="" type="checkbox" value="(variant:product=Vàng Trắng)"
                            data-value="vang-trang" />
                          <span>Vàng Trắng</span>
                        </label>
                      </li>

                      <li class="pd-left-0">
                        <label data-filter="Vàng Hồng" data-filter1="vang-hong"
                          class="filter-vendor__item custom-filter-input vang-hong">
                          <input class="" type="checkbox" value="(variant:product=Vàng Hồng)" data-value="vang-hong" />
                          <span>Vàng Hồng</span>
                        </label>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="collection-filter-tag1 collection-item">
                  <div class="sidebar-sort">
                    <div class="sort_title">
                      <span>Chất liệu</span> <i class="fa fa-sort-down"></i>
                    </div>
                    <ul class="grid mg-left-0 no-bullets filter-variant filter-size clearfix">
                      <li class="pd-left-0 grid__item large--one-whole medium--one-whole small--one-whole">
                        <label data-filter="10k" data-filter1="10k" class="filter-vendor__item custom-filter-input 10k">
                          <input type="checkbox" value="(tag:product=10k)" data-value="10k" />
                          <span>10k</span>
                        </label>
                      </li>

                      <li class="pd-left-0 grid__item large--one-whole medium--one-whole small--one-whole">
                        <label data-filter="14k" data-filter1="14k" class="filter-vendor__item custom-filter-input 14k">
                          <input type="checkbox" value="(tag:product=14k)" data-value="14k" />
                          <span>14k</span>
                        </label>
                      </li>

                      <li class="pd-left-0 grid__item large--one-whole medium--one-whole small--one-whole">
                        <label data-filter="18k" data-filter1="18k" class="filter-vendor__item custom-filter-input 18k">
                          <input type="checkbox" value="(tag:product=18k)" data-value="18k" />
                          <span>18k</span>
                        </label>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="collection-filter-tag2 collection-item">
                  <div class="sidebar-sort">
                    <div class="sort_title">
                      <span>Đá</span> <i class="fa fa-sort-down"></i>
                    </div>
                    <ul class="grid mg-left-0 no-bullets filter-variant filter-size clearfix">
                      <li class="pd-left-0 grid__item large--one-whole medium--one-whole small--one-whole">
                        <label data-filter="Kim Cương" data-filter1="kim-cuong"
                          class="filter-vendor__item custom-filter-input kim-cuong">
                          <input type="checkbox" value="(tag:product=Kim Cương)" data-value="kim-cuong" />
                          <span>Kim Cương</span>
                        </label>
                      </li>

                      <li class="pd-left-0 grid__item large--one-whole medium--one-whole small--one-whole">
                        <label data-filter="Moissanite" data-filter1="moissanite"
                          class="filter-vendor__item custom-filter-input moissanite">
                          <input type="checkbox" value="(tag:product=Moissanite)" data-value="moissanite" />
                          <span>Moissanite</span>
                        </label>
                      </li>

                      <li class="pd-left-0 grid__item large--one-whole medium--one-whole small--one-whole">
                        <label data-filter="Đá Cubic Zirconia" data-filter1="da-cubic-zirconia"
                          class="filter-vendor__item custom-filter-input da-cubic-zirconia">
                          <input type="checkbox" value="(tag:product=Đá Cubic Zirconia)"
                            data-value="da-cubic-zirconia" />
                          <span>Đá Cubic Zirconia</span>
                        </label>
                      </li>

                      <li class="pd-left-0 grid__item large--one-whole medium--one-whole small--one-whole">
                        <label data-filter="Đá Màu" data-filter1="da-mau"
                          class="filter-vendor__item custom-filter-input da-mau">
                          <input type="checkbox" value="(tag:product=Đá Màu)" data-value="da-mau" />
                          <span>Đá Màu</span>
                        </label>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Các phần tử filter -->
              <div class="header_filter_chosen">
                <span class="filter_chosen price" data-value="0:max">0 : max <a><span></span></a></span>
                <span class="filter_chosen price" data-value="0-1-000-000">0 : 1.000.000đ <a><span></span></a></span>
                <span class="filter_chosen price" data-value="1-000-000-3-000-000">1.000.000đ : 3.000.000đ
                  <a><span></span></a></span>
                <span class="filter_chosen price" data-value="3-000-000-5-000-000">3,000.000đ : 5.000.000đ
                  <a><span></span></a></span>
                <span class="filter_chosen price" data-value="5-000-000-7-000-000">5.000.000đ : 7.000.000đ
                  <a><span></span></a></span>
                <span class="filter_chosen price" data-value="7-000-000-10-000-000">7.000.000đ : 10.000.000đ
                  <a><span></span></a></span>
                <span class="filter_chosen price" data-value="10-000-000-max">10.000.000đ : max
                  <a><span></span></a></span>

                <span class="filter_chosen" data-value="vang-vang">Vàng Vàng <a><span></span></a></span>

                <span class="filter_chosen" data-value="vang-trang">Vàng Trắng <a><span></span></a></span>

                <span class="filter_chosen" data-value="vang-hong">Vàng Hồng <a><span></span></a></span>

                <span class="filter_chosen" data-value="10k">10k <a><span></span></a></span>

                <span class="filter_chosen" data-value="14k">14k <a><span></span></a></span>

                <span class="filter_chosen" data-value="18k">18k <a><span></span></a></span>

                <span class="filter_chosen" data-value="kim-cuong">Kim Cương <a><span></span></a></span>

                <span class="filter_chosen" data-value="moissanite">Moissanite <a><span></span></a></span>

                <span class="filter_chosen" data-value="da-cubic-zirconia">Đá Cubic Zirconia <a><span></span></a></span>

                <span class="filter_chosen" data-value="da-mau">Đá Màu <a><span></span></a></span>
                <span class="clear_all"><a href="javascript:void(0)">Bỏ lọc</a></span>
              </div>
              <div class="bottom-filter">
                <button class="btn-custom-filter">ÁP DỤNG</button>
                <button class="cancel-filter">HỦY</button>
              </div>
            </div>
          </div>

          <!-- bao gồm thư viện jQuery -->
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script>
            $(document).ready(function () {
              $(".custom-filter-input input").click(function () {
                // lấy giá trị của thuộc tính data-value của ô lựa chọn đã được nhấp vào và lưu trữ vào biến value
                var value = $(this).attr("data-value");
                console.log(value);
                $(
                  //hiển thị giá trị đã chọn trong bộ lọc
                  ".header_filter_chosen .filter_chosen[data-value=" +
                  value +
                  "]"
                ).toggleClass("show_tag");

                var check_filter = false;
                $(".filter_chosen").each(function () {
                  if ($(this).hasClass("show_tag")) {
                    check_filter = true;
                  }
                });
                if (check_filter) {
                  $(".clear_all").addClass("show_btn");
                } else {
                  $(".clear_all").removeClass("show_btn");
                }
              });

              $(".clear_all a").click(function () {
                $(".filter_chosen.show_tag a").trigger("click");
              });

              $(".filter-color label").click(function () {
                $(this).toggleClass("active");
              });

              $(".header_filter_chosen .filter_chosen > a").click(
                function () {
                  var $parent = $(this).parent();
                  //      $(this).parent('.filter_chosen').removeClass('show_tag');

                  var val = $parent.attr("data-value");
                  $(".custom-filter-input[data-filter1=" + val + "]")
                    .find("input")
                    .trigger("click");
                }
              );
              $(".header_filter_chosen .filter_chosen.price > a").click(
                function () {
                  var $parent = $(this).parent();
                  var val = $parent.attr("data-value");
                  $(".custom-filter-input[data-filter1=0-max]")
                    .find("input")
                    .trigger("click");
                }
              );
            });
          </script>
          <script>
            $(document).ready(function () {
              $(".filter-custom > span").click(function () {
                $(".groupFilterNew").toggle("fast");
              });
              $(".btn-custom-filter").click(function () {
                $(".groupFilterNew").hide();
              });
              $(".cancel-filter").click(function () {
                $(".clear_all > a").trigger("click");
              });
            });
          </script>
          <!----------------------------- -->
          <h3 class="trigger-filter--separator">|</h3>
          <div class="toolbar-amount" id="toolbar-amount">
            <!-- Hiển thị: -->
            <span class="toolbar-number">20</span>
            sản phẩm
          </div>
        </div>
        <!----------- DROPDOWN ------------>
        <div class="prod-dropdown">
          <label class="prod-dropdown--left">
            <!-- <img
                width="20"
                height="auto"
                alt="Sắp xếp"
                src="./img/icon-sort.png"
              /> -->
            <i class="fa-solid fa-arrow-up-wide-short"></i> Sắp xếp:
          </label>
          <div class="prod-dropdown--right">
            <div class="prod-dropdown__input-box"></div>
            <div class="prod-dropdown__list">
              <input type="radio" name="drop1" id="id1" class="radio" />
              <label for="id1">
                <span class="name">Mặc định</span>
              </label>

              <input type="radio" name="drop1" id="id2" class="radio" />
              <label for="id2">
                <span class="name">Mới nhất</span>
              </label>

              <input type="radio" name="drop1" id="id3" class="radio" />
              <label for="id3">
                <span class="name">Bán chạy nhất</span>
              </label>

              <input type="radio" name="drop1" id="id4" class="radio" />
              <label for="id4">
                <span class="name">Giá từ thấp tới cao</span>
              </label>

              <input type="radio" name="drop1" id="id5" class="radio" />
              <label for="id5">
                <span class="name">Giá từ cao tới thấp</span>
              </label>
            </div>
          </div>
        </div>
      </div>
      <script src="./js/dropdown.js"></script>

      <!--------------- Tổng hợp các sản phẩm-------------->
      <div class="prod-list">
        <div class="prod-list__grid">
          <!-- Dòng 1 -->
          <!-- SP 1 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/day-chuyen-2.webp" />
              </a>
              <span class="product-sale-tag">
                <span> NEW!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- SP 2 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- SP 3 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SP 4 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <span class="product-sale-tag">
                <span> SALES!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dòng 2 -->
          <!-- SP 1 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SP 2 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SP 3 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SP 4 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dòng 3 -->
          <!-- SP 1 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>

              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SP 2 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SP 3 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SP 4 -->
          <section class="prod-list__item">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!---------------------- PAGINATION PHÍA DƯỚI CÁC SẢN PHẨM --------------------------------->
      <div class="prod-list__pagination">
        <div class="pagination--container">
          <!-- --------- Mũi tên "<<" ------------>
          <button class="pagination--container__button" id="pagination_startBtn" disabled>
            <i class="fa-solid fa-angles-left"></i>
          </button>
          <!-- --------- Mũi tên "<" ------------>
          <button class="pagination--container__button prevNext" id="pagination_prev" disabled>
            <i class="fa-solid fa-angle-left"></i>
          </button>
          <!-- ---------Các số trang------------>
          <div class="prod-list__pagination--numbers">
            <a href="#" class="link active">1</a>
            <a href="#" class="link">2</a>
            <a href="#" class="link">3</a>
            <a href="#" class="link">4</a>
            <!-- <a href="#" class="link">5</a> -->
          </div>
          <!-- --------- Mũi tên ">" ------------>
          <button class="pagination--container__button prevNext" id="pagination_next">
            <i class="fa-solid fa-angle-right"></i>
          </button>
          <!-- --------- Mũi tên ">>" ------------>
          <button class="pagination--container__button" id="pagination_endBtn">
            <i class="fa-solid fa-angles-right"></i>
          </button>
        </div>
      </div>
      <script src="./js/pagination.js"></script>
      <div class="prod-third-line"></div>
    </article>

    <!------------------ GỢI Ý SẢN PHẨM----------------------->
    <div class="suggest-prod">
      <h2 class="suggest-prod--text">GỢI Ý CHO BẠN</h2>
    </div>
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <!-- sp1 -->
          <div class="card swiper-slide">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <span class="product-sale-tag">
                <span> NEW!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sp2 -->
          <div class="card swiper-slide">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sp3 -->
          <div class="card swiper-slide">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sp4 -->
          <div class="card swiper-slide">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <span class="product-sale-tag">
                <span> HOT!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sp5 -->
          <div class="card swiper-slide">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- sp6 -->
          <div class="card swiper-slide">
            <div class="prod-list__item__image">
              <a href="">
                <img class="prod-list__item__img1" loading="lazy" alt="" src="./img/lac-tay-2.webp" />
              </a>
              <span class="product-sale-tag">
                <span> HOT!</span>
              </span>
              <!-- Hover heart and cart -->
              <div class="button-heart-cart-hover">
                <!-- <div class="button-heart"> -->
                <a href="">
                  <img src="./icon/heart.svg" alt="" class="prod-list__item__image--heart-hover" />
                </a>
                <!-- </div> -->
                <!-- <div class="button-cart"> -->
                <a href="">
                  <img src="./icon/cart.svg" alt="" class="prod-list__item__image--cart-hover" />
                </a>
                <!-- </div> -->
              </div>
            </div>

            <div class="prod-list__item__inner">
              <div class="prod-list__item__inner--child">
                <div class="prod-list__item__info">
                  <div class="prod-list__item__info--title">
                    <a href="">Nhẫn Đá Cubic Zirconia NLF 415</a>
                  </div>
                  <div class="prod-list__item__info--masp">Nhẫn</div>
                </div>
                <div class="prod-list__item__info--price-fb">
                  <div class="prod-list__item--price">
                    <span class="prod-list__item__info--price">
                      2.090.000đ
                    </span>
                    <span class="prod-list__item__info--price-sales">
                      3.000.000đ
                    </span>
                  </div>
                  <div class="prod-list__item__info--star-icon">
                    <img class="info--star-icon" loading="lazy" alt="" src="./img/iconlylightstar.svg" />
                    <div class="prod-list__item__info--fb">4.3</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="js/Card-slider.js"></script>
    <!-------------- DANH MỤC ƯA CHUỘNG -------------->
    <div class="third-line"></div>
    <div class="explore-dm">
      <h2 class="explore-dm--text">DANH MỤC ƯA CHUỘNG</h2>
      <div class="explore-dm--content" style="width: 70%; display: inline-block">
        <p>
          Với sự sáng tạo không ngừng, chúng tôi tin rằng mỗi sản phẩm sẽ góp
          phần tạo nên phong cách của riêng bạn và là điểm nhấn nhá tuyệt vời
          mỗi khi bạn xuất hiện
        </p>
      </div>
      <!-- Day chuyen -->
      <div class="container-listing">
        <div class="listing-title">
          <a href="" class="listing-tile__link">
            <figure class="listing-tile__image">
              <img class="" src="img/day-chuyen-9.webp" />
            </figure>
            <div class="listing-tile__content">
              <p class="listing-tile__title">DÂY CHUYỀN</p>
            </div>
          </a>
        </div>
        <!-- Bong tai -->
        <div class="listing-title">
          <a href="" class="listing-tile__link">
            <figure class="listing-tile__image">
              <img class="" src="img/bong-tai-8.jpg" />
            </figure>
            <div class="listing-tile__content">
              <p class="listing-tile__title">BÔNG TAI</p>
            </div>
          </a>
        </div>
        <!-- nhan -->
        <div class="listing-title">
          <a href="" class="listing-tile__link">
            <figure class="listing-tile__image">
              <img class="" src="img/nhan-5.webp" />
            </figure>
            <div class="listing-tile__content">
              <p class="listing-tile__title">NHẪN</p>
            </div>
          </a>
        </div>
        <!-- lắc tay -->
        <div class="listing-title">
          <a href="" class="listing-tile__link">
            <figure class="listing-tile__image">
              <img class="" src="img/lac-tay-8.webp" />
            </figure>
            <div class="listing-tile__content">
              <p class="listing-tile__title">VÒNG TAY</p>
            </div>
          </a>
        </div>
        <!-- ALL -->
        <div class="listing-title">
          <a href="" class="listing-tile__link">
            <figure class="listing-tile__image">
              <img class="" src="img/Nhan-cau-hon-1.webp" />
            </figure>
            <div class="listing-tile__content">
              <p class="listing-tile__title">Shop All</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Newsletter -->
  <section id="newsletter">
    <div class="container">
      <div class="news">
        <p class="news-content">
          Đăng ký bản tin của LUXE để cập nhật thông tin mới nhất về chương
          trình giảm giá và sản phẩm!
        </p>
        <form class="news-register">
          <input type="text" name="dangKy" id="dangKy" placeholder="Nhập Email của bạn" class="text-reg" />
          <button class="btn register">Đăng ký</button>
        </form>
      </div>
    </div>
  </section>
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
            <p class="download-title">Tải ngay Luxe app</p>
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
              <a href="#!" class="footer__link"> Trang chủ </a>
            </li>
            <li class="footer__item">
              <a href="#!" class="footer__link"> Sản phẩm </a>
            </li>
            <li class="footer__item">
              <a href="#!" class="footer__link"> Về chúng tôi </a>
            </li>
            <li class="footer__item">
              <a href="#!" class="footer__link"> Hỗ trợ </a>
            </li>
            <li class="footer__item">
              <a href="#!" class="footer__link"> Liên hệ </a>
            </li>
          </ul>
        </div>
        <div class="footer-column">
          <h3 class="footer__heading">Thông tin liên hệ</h3>
          <ul class="footer__list">
            <li class="footer__item">
              279 Nguyễn Tri Phương, Phường 5, Quận 10, TP.HCM
            </li>
            <li class="footer__item">(+84) 046 990 809</li>
            <li class="footer__item">info@example.com</li>
          </ul>
        </div>
        <div class="footer-column">
          <h3 class="footer__heading">Theo dõi</h3>
          <div class="footer__social">
            <a href="#!" class="footer__social-btn">
              <img src="./icon/facebook.svg" alt="" />
            </a>
            <a href="#!" class="footer__social-btn">
              <img src="./icon/insta.svg" alt="" />
            </a>
            <a href="#!" class="footer__social-btn">
              <img src="./icon/twitter.svg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-copyright">
      <div class="container">
        <div class="payment-method">
          <img src="./icon/paypal.svg" alt="" />
          <img src="./icon/visa.svg" alt="" />
          <img src="./icon/master-card.svg" alt="" />
        </div>
        <p class="footer__copyright-text">
          Copyright © 2023 UIHUT All Rights Reserved
        </p>
      </div>
    </div>
  </footer>
</body>

</html>