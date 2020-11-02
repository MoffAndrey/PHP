<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "db.php";
require_once ENGINE_DIR . "base.php";


session_start();
//unset($_SESSION['basket_items']);
$connection = sqlConnection();
$catalog = queryAll($connection);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_POST['basket_name'])) {
			echo "<br>В корзину добавлено: " . $_POST['basket_name'];
			addToBasket($_POST['basket_id'], $_POST['basket_name'], $_POST['basket_price']);
			//redirect($_SERVER['REQUEST_URI']);
		}
	}

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
		<form action="admin/login.php">
    		<input type="submit" value="Авторизоваться">
		</form>
		<form action="basket.php">
    		<input type="submit" value="Посмотреть корзину">
		</form>
			<div class="gallery">
				<h2 class="gallery-h2">Our Gallery</h2>
				<?php include VIEWS_DIR . "catalog.php"; ?>
			</div>
	</div>
		<div class="footer">
			<p class="footer-p">&copy;&nbsp;2017 Историческе Игры. Все права защищены</p>
		</div>
</body>
</html>