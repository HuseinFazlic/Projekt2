/*
Name: Husein Fazlic 170302013
Course: Web Application Development
Professor: Ali Almisreb
*/

var slideNumber = 0;
slideShow();

function slideShow() {
	var iterator;
	var slides = document.getElementsByClassName("mySlides");
	
	for (iterator = 0; iterator < slides.length; iterator++) {
		slides[iterator].style.display = "none";
	}
		
	slideNumber++;
	
	if (slideNumber > slides.length) {
		slideNumber = 1
	}
	
	slides[slideNumber-1].style.display = "inline";
	setTimeout(slideShow, 5000);
}
