/*SlideShow Starts*/
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
let i;
let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}    
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
}
for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " active";
}
/*SlideShow Ends*/

/* Testimonials */
var btn = document.getElementsByClassName("indicator-btn");
var slide = document.getElementById("slide");

btn[0].onclick = function() {
	slide.style.transform = "translateX(0px)";
	for(i=0;i<4;i++){
		btn[i].classList.remove("ind-active");
	}
	this.classList.add("ind-active");
}


btn[1].onclick = function() {
	slide.style.transform = "translateX(-800px)";
	for(i=0;i<4;i++){
		btn[i].classList.remove("ind-active");
	}
	this.classList.add("ind-active");
}

btn[2].onclick = function() {
	slide.style.transform = "translateX(-1600px)";
	for(i=0;i<4;i++){
		btn[i].classList.remove("ind-active");
	}
	this.classList.add("ind-active");
}

btn[3].onclick = function() {
	slide.style.transform = "translateX(-2400px)";
	for(i=0;i<4;i++){
		btn[i].classList.remove("ind-active");
	}
	this.classList.add("ind-active");
}