<?php 
	require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
	require_once ENGINE_DIR . "db.php";

	$id = $_GET['id'];
	$connection = sqlConnection();
	$dbItem = queryOne($connection, $id);
	$itemViews = $dbItem['views'] + 1;
	execute($connection, 'UPDATE gallery SET views = ' . $itemViews . ' WHERE id = ' . $id);
	mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Historical Games: Product</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
			<?php include VIEWS_DIR . "photo.php"; ?>
	</div>
		<div class="footer">
			<p class="footer-p">&copy;&nbsp;2017 Историческе Игры. Все права защищены</p>
		</div>
</body>
</html>