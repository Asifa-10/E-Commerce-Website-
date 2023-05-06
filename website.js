const close = document.querySelector(".close");
const open = document.querySelector(".ham");
const menu = document.querySelector(".menu");
close.addEventListener("click", () => {
  menu.style.visibility = "hidden";
});
open.addEventListener("click", () => {
  menu.style.visibility = "visible";
});
function myfun(){
  location.href= "Top Offers/top.html";
}
var slideIndex = 0;showSlides();function showSlides(){var i;var slides = document.getElementsByClassName("mySlides");var dots = document.getElementsByClassName("dot");for (i = 0;i < slides.length;i++){slides[i].style.display = "none";}slideIndex++;if (slideIndex > slides.length){slideIndex = 1;}for (i = 0;i < dots.length;i++){dots[i].className = dots[i].className.replace(" active","");}slides[slideIndex-1].style.display = "block";dots[slideIndex-1].className += " active";setTimeout(showSlides,800)};

// Make_Img_Slider([
//   'https://images.pexels.com/photos/3962294/pexels-photo-3962294.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
//   'https://images.pexels.com/photos/6347888/pexels-photo-6347888.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
//   'https://images.pexels.com/photos/2292953/pexels-photo-2292953.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500',
//   'https://images.pexels.com/photos/1229861/pexels-photo-1229861.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
//   'https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'
// ])