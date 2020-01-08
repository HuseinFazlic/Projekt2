<!-- 
Name: Husein Fazlic 170302013
Course: Web Application Development
Professor: Ali Almisreb
Notes:
	I put in comments websites from where I took pictures;
	
	The logic for slider part of website was took from JavaScript&Jquery book(Chapter 11) and w3schools;
	
	The logic for menu part of website was took from w3schools.com on Fullscreen Navigation;
-->

<html>
	<head>
		<link rel="icon" href="restaurant_image.png" type="image/x-icon"> 
		<!-- 123rf.com -->
		<link href="projekt2_css.css" type="text/css" rel="stylesheet">
		<title>Restaurant website</title>
	</head>
	
	<body>
		<div id="navigation-container" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNavigation()">&times;</a>
			<div class="overlay-content">
				<a href="aboutUs.php">About us</a>
				<a href="dishes.php">Dishes</a>
			</div>
		</div>
		
		<div id="intro">
			<img src="restaurant_image.png" onclick="openNavigation()">
			<h1 id="greeting">Dear guest. Welcome to the restaurant</h1>
		</div>
		
		<div class="slideshow-container">
			<div class="mySlides fade">
				<img class="image_slide" src="restaurant_slide_1.jpg">
				<!-- unsplash.com -->
			</div>
			
			<div class="mySlides fade">
				<img class="image_slide" src="restaurant_slide_2.jpg">
				<!-- blog.radissonblu.com -->
			</div>
		
			<div class="mySlides fade">
				<img class="image_slide" src="restaurant_slide_3.jpg">
				<!-- thestylejunkies.com -->
			</div>	
		</div>
			
		<script type="text/javascript" src="slideShow.js"></script>
		<script type="text/javascript" src="menuShow.js"></script>
	</body>
</html>