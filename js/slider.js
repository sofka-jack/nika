document.getElementsByClassName('slide')[0].className = 'slide active';

var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,10000);
 
function nextSlide() {
    goToSlide(currentSlide+1);
}
 
function previousSlide() {
    goToSlide(currentSlide-1);
}
 
function goToSlide(n) {
    slides[currentSlide].className = 'slide';
    currentSlide = (n+slides.length)%slides.length;
    slides[currentSlide].className = 'slide active';
}

var next = document.getElementsByClassName('slider-next')[0];
var previous = document.getElementsByClassName('slider-prev')[0];

next.onclick = function() {
 nextSlide();
};
previous.onclick = function() {
 previousSlide();
};