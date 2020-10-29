<?php 
//Конечно правильно все функции выносить в отдельный файл, чтобы соблюдать карсивую логику, но так как калькулятор отдельное задание не связанное с остальными основными заданиями про магазин, решил в данном задании не усложнять.

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (!is_numeric($_POST['arg1']) or !is_numeric($_POST['arg2'])) {
		$result = 'Один из аргументов не число.';
	} else {
		$result = calculate ($_POST['arg1'], $_POST['arg2'], $_POST['operation']);
	}
}


function calculate (float $arg1, float $arg2, string $operation) {
	switch ($operation) {
			case '+':
				return $arg1 + $arg2;
				break;
			case '-':
				return $arg1 - $arg2;
				break;
			case 'x':
				return $arg1 * $arg2;
				break;
			case '/':

				if ($arg2 != 0) {
					return $arg1 / $arg2;
					break;
				} else {
					return 'На ноль делить нельзя!';
					break;
				}
			default:
				return 'Не верно указана операция';
				break;
		}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
</head>
<body>
	<h2>Калькулятор</h2>
	<form action="Calc.php" method="post">
		<input type="text" name="arg1"><br><br>
		<input type="text" name="arg2"><br><br>
		<input type="submit" name="operation" value="+">
		<input type="submit" name="operation" value="-">
		<input type="submit" name="operation" value="x">
		<input type="submit" name="operation" value="/">
	</form>
	<p>Результат: <?=$result?></p>
</body>
</html>