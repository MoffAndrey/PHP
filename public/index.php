<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/components/php/variables.php";
require_once ROOT_DIR . "/src/components/php/render.php";
require_once ROOT_DIR . "/src/components/php/search.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Historical Games: Gallery</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
			<div class="header">
				<div class="header-top">
					<div class="header-logo">
						<h3 class="logo-h3">Historical</h3>
						<p class="logo-p">GAMES</p>
					</div>
					<div class="header-contact clearfix">
						<img src="img/tel.png" alt="Phone" class="pic-contact"><p class="text-contact">+123 456 7890</p><img src="img/email.png" alt="email" class="pic-contact email-contact"><p class="text-contact">info@example.com</p>
					</div>
					<div class="header-search">
						<input type="search" placeholder="Search" class="search"><img src="img/search.png" alt="Найти" class="search-pic">
					</div>
				</div>
				<ul class="menu menu-all">
					<li class="menu-list"><a href="index.html" class="menu-link menu-link-all">Home</a></li>
					<li class="menu-list"><a href="#" class="menu-link menu-link-all">About</a></li>
					<li class="menu-list"><a href="#anchor-services" class="menu-link menu-link-all">Services</a></li>
					<li class="menu-list"><a href="#" class="menu-link menu-link-all menu-link-active-all">Gallery</a></li>
					<li class="menu-list"><a href="#" class="menu-link menu-link-all">News</a></li>
					<li class="menu-list"><a href="#" class="menu-link menu-link-all">Team</a></li>
					<li class="menu-list"><a href="#" class="menu-link menu-link-all">Contact Us</a></li>
				</ul>
			</div>
			<div class="gallery">
				<h2 class="gallery-h2">Our Gallery</h2>
				<?php renderGallery($gallery); ?>
			</div>
			<div class="discount">
				<div class="discount-block" style="background-image: url(img/Discount_1.jpg);">
					<div class="discount-content">
						<h6 class="discount-h6">discount</h6>
						<h2 class="discount-h2">CALL OF DUTY:<br>Modern Warfare 3</h2>
						<h1 class="discount-price">$14.44 / <span class="old-price">$28.90</span></h1>
						<a href="#" class="gallery-button discount-button">Buy</a>
					</div>
				</div>
				<div class="discount-block" style="background-image: url(img/Discount_2.jpg);">
					<div class="discount-content">
						<h6 class="discount-h6">discount</h6>
						<h2 class="discount-h2">MEDAL OF HONOR</h2>
						<h1 class="discount-price">$15.96 / <span class="old-price">$29.99</span></h1>
						<a href="#" class="gallery-button discount-button">Buy</a>
					</div>
				</div>
			</div>
			<div class="contact">
				<h2 class="gallery-h2">Contact Us</h2>
				<div class="contact-text">
					<h4 class="contact-h4">Get in touch with us</h4>
					<p class="contact-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum passages sed do, At vero eos et accusamus et iusto odio digs qui blanditiis<br><br>Leningradsky AVE 39, BLDG 79 <br>MOSCOW 125167, Russia <br><br>Telephone : +00 111 222 3333 <br><br>FAX : +1 888 888 4444 <br><br>Email : <span style="color: #f44336;">mail@example.com</span></p>
				</div>
				<div class="contact-input-block">
					<input type="text" class="contact-input" placeholder="Name">
					<input type="text" class="contact-input" placeholder="Email">
					<textarea class="contact-area" placeholder="Massege"></textarea>
					<input type="button" class="contact-button" value="Submit">
				</div>
			</div>
			<div class="map">
				<h2 class="gallery-h2">Route Map</h2>
				<img src="img/Map.jpg" alt="Route Map<">
			</div>
	</div>
		<div class="footer">
			<p class="footer-p">&copy;&nbsp;2017 Историческе Игры. Все права защищены</p>
		</div>
</body>
</html>