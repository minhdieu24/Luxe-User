// <!-- bao gồm thư viện jQuery -->
src =
  "https://code.jquery.com/jquery-3.6.0.min.js" >
  $(document).ready(function () {
    $(".custom-filter-input input").click(function () {
      // lấy giá trị của thuộc tính data-value của ô lựa chọn đã được nhấp vào và lưu trữ vào biến value
      var value = $(this).attr("data-value");
      console.log(value);
      $(
        //hiển thị giá trị đã chọn trong bộ lọc
        ".header_filter_chosen .filter_chosen[data-value=" + value + "]"
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

    $(".header_filter_chosen .filter_chosen > a").click(function () {
      var $parent = $(this).parent();
      //      $(this).parent('.filter_chosen').removeClass('show_tag');

      var val = $parent.attr("data-value");
      $(".custom-filter-input[data-filter1=" + val + "]")
        .find("input")
        .trigger("click");
    });
    $(".header_filter_chosen .filter_chosen.price > a").click(function () {
      var $parent = $(this).parent();
      var val = $parent.attr("data-value");
      $(".custom-filter-input[data-filter1=0-max]")
        .find("input")
        .trigger("click");
    });
  });

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
