<?php 
	require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
	require ENGINE_DIR . "base.php";
	require ENGINE_DIR . "db.php";
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		if(isset($_GET['basket_id'])) {
			removeFromBasket($_GET['basket_id']);
		}
	}

	$basket = $_SESSION['basket_items'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="gallery">
			<h2 class="gallery-h2">Корзина</h2>
			<br>
			<?php include VIEWS_DIR . "basket.php"; ?>
		</div>
	</div>
</body>
</html>