var slides = document.querySelectorAll('.slide');
var currentSlide = 0;

function showSlide(n) {
  slides[currentSlide].classList.remove('active');
  currentSlide = (n + slides.length) % slides.length;
  slides[currentSlide].classList.add('active');
}

function nextSlide() {
  showSlide(currentSlide + 1);
}

function previousSlide() {
  showSlide(currentSlide - 1);
}

// Tự động chuyển slide sau một khoảng thời gian
setInterval(nextSlide, 5000);

// Đăng ký sự kiện cho các nút next và previous
var next = document.getElementsByClassName('nextBtn');
var prve = document.getElementsByClassName('prevBtn');
console.log(next)
// next.forEach( function(nexts, index){

//   nexts.onclick = function() {
//     console.log(nexts);
//     nextSlide();
//   }
// });
// prve.forEach( function(prves) {
//   prves.onclick = function() {
//     console.log(prves);
//     previousSlide();
//   }
// });
// Hiển thị slide đầu tiên khi trang được tải
showSlide(currentSlide);