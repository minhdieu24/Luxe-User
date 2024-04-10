// //pagination sản phẩm
// // Lựa chọn các phần tử DOM
// const pagination_startBtn = document.querySelector("#pagination_startBtn"), // nút "Bắt đầu"
//   pagination_endBtn = document.querySelector("#pagination_endBtn"), // nút "Kết thúc"
//   prevNext = document.querySelectorAll(".prevNext"), // mảng chứa nút "Previous" và "Next"
//   numbers = document.querySelectorAll(".link"); // mảng chứa các liên kết số trang

// // Thiết lập bước khởi đầu
// let currentStep = 0; //Biến currentStep được sử dụng để lưu trạng thái hiện tại của bước.

// //Hàm cập nhật trạng thái nút
// const updateBtn = () => {
//   // Nếu ở bước cuối tức là trang cuối
//   if (currentStep === 3) {
//     pagination_endBtn.disabled = true; //nút "End" sẽ bị vô hiệu hóa
//     prevNext[1].disabled = true; //nút "Next" bị vô hiệu hóa
//   }
//   //Nếu currentStep bằng 0, hoặc đang ở trang đầu tiên
//   else if (currentStep === 0) {
//     // Nếu ở trang đầu tiên
//     pagination_startBtn.disabled = true; //nút "Start" sẽ bị vô hiệu hóa
//     prevNext[0].disabled = true; // nút "Previous" bị vô hiệu hóa
//   }
//   //Nếu currentStep không phải là 0 hoặc 3
//   /*tất cả các nút "Start", "End", "Previous" và "Next" đều được kích hoạt để cho phép người dùng di chuyển qua các trang khác nhau. */
//   else {
//     // Tất cả các nút "Bắt đầu", "Kết thúc", "Previous" và "Next" đều được kích hoạt để cho phép người dùng di chuyển qua các trang khác nhau.
//     pagination_endBtn.disabled = false;
//     prevNext[1].disabled = false;
//     pagination_startBtn.disabled = false;
//     prevNext[0].disabled = false;
//   }
// };

// // Thêm event listeners cho các liên kết số trang
// numbers.forEach((number, numIndex) => {
//   number.addEventListener("click", (e) => {
//     e.preventDefault();
//     //Đặt bước hiện tại thành số trang được nhấp vào
//     currentStep = numIndex;
//     // Xóa lớp "active" từ liên kết số trang trước đó
//     document.querySelector(".active").classList.remove("active");
//     // Thêm lớp "active" vào liên kết số trang được nhấp vào
//     number.classList.add("active");
//     updateBtn(); // Cập nhật trạng thái các nút
//   });
// });

// // Thêm các trình nghe sự kiện cho các nút "Previous" và "Next"
// prevNext.forEach((button) => {
//   button.addEventListener("click", (e) => {
//     // Tăng hoặc giảm bước hiện tại dựa trên nút được nhấp vào
//     currentStep += e.target.id === "pagination_next" ? 1 : -1;
//     numbers.forEach((number, numIndex) => {
//       /// Chuyển đổi lớp "active" trên các liên kết số trang dựa trên bước hiện tại
//       number.classList.toggle("active", numIndex === currentStep);
//       updateBtn(); // Cập nhật trạng thái các nút
//     });
//   });
// });

// // Thêm trình nghe sự kiện cho nút "Start"
// pagination_startBtn.addEventListener("click", () => {
//   // Xóa lớp "active" từ liên kết số trang trước đó
//   document.querySelector(".active").classList.remove("active");
//   // Thêm lớp "active" vào liên kết số trang đầu tiên  numbers[0].classList.add("active");
//   currentStep = 0;
//   updateBtn(); // Cập nhật trạng thái các nút
//   pagination_endBtn.disabled = false;
//   prevNext[1].disabled = false;
// });

// // Thêm trình nghe sự kiện cho nút "Kết thúc"
// pagination_endBtn.addEventListener("click", () => {
//   // Xóa lớp "active" từ liên kết số trang trước đó
//   document.querySelector(".active").classList.remove("active");
//   // Thêm lớp "active" vào liên kết số trang cuối cùng
//   numbers[3].classList.add("active");
//   currentStep = 4;
//   updateBtn(); // Cập nhật trạng thái các nút
//   pagination_startBtn.disabled = false;
//   prevNext[0].disabled = false;
// });
