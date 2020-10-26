<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

$connection = sqlConnection();
$gallery = queryAll($connection);
mysqli_close($connection);
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
			<div class="gallery">
				<h2 class="gallery-h2">Our Gallery</h2>
				<?php include VIEWS_DIR . "gallery.php"; ?>
			</div>
	</div>
		<div class="footer">
			<p class="footer-p">&copy;&nbsp;2017 Историческе Игры. Все права защищены</p>
		</div>
</body>
</html>