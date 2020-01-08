<!-- 
Name: Husein Fazlic 170302013
Course: Web Application Development
Professor: Ali Almisreb
Notes:
	I put in comments websites from where I took pictures;
	
	The logic for slider part of website was took from JavaScript&Jquery book(Chapter 11) and w3schools;
	
	The logic for menu part of website was took from w3schools.com on Fullscreen Navigation;
-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dishes ORDER BY dishPrice ASC";
$result = $conn->query($sql);

?>
<html>
	<head>
		<link rel="icon" href="restaurant_image.png" type="image/x-icon"> 
		<!-- 123rf.com -->
		<link href="projekt2_css.css" type="text/css" rel="stylesheet">
		<title>Restaurant website</title>
	</head>
	
	<body>
	
		<div class="dish-content">
			<?php
			while ($row = $result->fetch_assoc()) {
			?>
			<div class="dish">
				<h2><?= $row["dishName"];?></h2>
				<h3><?= $row["dishPrice"];?> KM</h3>
				<img class="photo-dish" src="<?= $row["dishImage"];?>">
			</div>
			<?php 
			} 
			?>	
		</div>
		<?php
		$conn->close();
		?>
	</body>
</html>