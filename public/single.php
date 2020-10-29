<?php 
	require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
	require_once ENGINE_DIR . "db.php";

	$connection = sqlConnection();
	$id = $_GET['id'];

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		addReview($connection, $id, $_POST['review']);
	}

	$dbItem = queryOne($connection, $id);
	$reviews = queryReview($connection, $id);
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
			<?php include VIEWS_DIR . "single.php"; ?>
		<form action="/single.php?id=<?=$item['id']?>" method="post">
    		<p><b>Введите ваш отзыв:</b></p>
   			<p><textarea rows="10" cols="45" name="review"></textarea></p>
    		<p><input type="submit" value="Отправить"></p>
  		</form>
	</div>	
	<div class="footer">
			<p class="footer-p">&copy;&nbsp;2017 Историческе Игры. Все права защищены</p>
	</div>
</body>
</html>