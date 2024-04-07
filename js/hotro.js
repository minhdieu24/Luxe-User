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
  
  //Ẩn hiện nội dung câu hỏi FAQ
  document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
    const answer = question.nextElementSibling;
  
    if (answer.style.display === 'none' || !answer.style.display) {
    answer.style.display = 'block';
         } else {
         answer.style.display = 'none';
         }
        });
      });
    });
  //Chuyển đổi icon + sang - khi click vào câu hỏi
  document.addEventListener("DOMContentLoaded", function() {
    const faqQuestions = document.querySelectorAll('.faq-question');
  
    faqQuestions.forEach(question => {
        const faqIcon = question.querySelector('.faq-icon');
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            if (answer.style.display === 'none' || !answer.style.display) {
                faqIcon.src = "./icon/hotro-add.svg";
            } else {
                faqIcon.src = "./icon/hotro-minus.svg";
            }
        });
    });
});

  
  
  
  
  
  
  