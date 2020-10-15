<?php //Task 1
	$a = -7;
	$b = 3;
	$task1 = 0;

	if ($a >= 0 && $b >= 0) {
		$task1 = $a - $b;
	} elseif ($a < 0 && $b < 0) {
		$task1 = $a * $b;
	} else {
		$task1 = $a + $b;
	}
?>

<?php //Task 3 & Task 4, почему-то второго задания нет
	$a = 12;
	$b = 7;

	function sum (float $arg1, float $arg2): float {
		return $arg1 + $arg2;
	}
	function subtraction (float $arg1, float $arg2): float {
		return $arg1 - $arg2;
	}
	function multiplication (float $arg1, float $arg2): float {
		return $arg1 * $arg2;
	}
	function division (float $arg1, float $arg2): float {
		return $arg1 / $arg2;
	}

	function mathOperation(float $arg1, float $arg2, string $operation) {
		switch ($operation) {
			case 'sum':
				return sum($arg1, $arg2);
				break;
			case 'subtraction':
				return subtraction($arg1, $arg2);
				break;
			case 'multiplication':
				return multiplication($arg1, $arg2);
				break;
			case 'division':
				return division($arg1, $arg2);
				break;
			default:
				echo "Не верная операция";
				break;
		}
	}

?>

<!-- Task 5 в футере HTML - шаблона -->

<?php //Task 6
	$n = 5;
	$k = 3;

	function power(float $val, float $pow): float {
		if ($pow > 0) {
			return $val * power($val, $pow - 1);
		} else {
			return 1;
		}
	} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Задание 1:</h2>
	<p><?= $task1 ?></p>
	<br>
	<h2>Задание 3:</h2>
	<p>Переменная 1 = <?= $a ?>, Переменная 2 = <?= $b ?></p>
	<p>Сумма: <?= sum($a, $b); ?></p>
	<p>Разность: <?= subtraction($a, $b); ?></p>
	<p>Умножение: <?= multiplication($a, $b); ?></p>
	<p>Деление: <?= division($a, $b); ?></p>
	<br>
	<h2>Задание 4:</h2>
	<p>Сумма: <?= mathOperation($a, $b, 'sum'); ?></p>
	<p>Разность: <?= mathOperation($a, $b, 'subtraction'); ?></p>
	<p>Умножение: <?= mathOperation($a, $b, 'multiplication'); ?></p>
	<p>Деление: <?= mathOperation($a, $b, 'division'); ?></p>
	<br>
	<h2>Задание 6:</h2>
	<p>Число = <?= $n ?>, Степень = <?= $k ?></p>
	<p>Возведение в степень: <?= power($n, $k); ?></p>
</body>
<footer>
	<br><br>
	<p>Copyright &copy; 2014-<?php echo date("Y"); ?>. Все права защищены. </p>
</footer>
</html>