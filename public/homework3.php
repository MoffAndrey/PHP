<?php //Task 1
	$x1 = 0;
	echo "Задание 1 <br>";
	while (++$x1 <= 100) {
		if ($x1 % 3 == 0) {
			echo $x1, " ";
		}
	}
?>
<br><br>
<?php //Task 2
	$x2 = 0;
	echo "Задание 2 <br>";

	function evenOrNot(int $x): string {
		if ($x == 0) {
			return "{$x} – ноль.<br>";
		} elseif ($x % 2 == 0) {
			return "{$x} - четное число.<br>";
		} else 
			return "{$x} - нечетное число.<br>";
	}

	do {
		echo evenOrNot($x2);
	} while (++$x2 <= 10)
?>
<br><br>

<?php //Task 3
	echo "Задание 3 <br>";

	$cities = [
		'Московская область' => [
			'Москва',
			'Зеленоград',
			'Клин',
			'Королёв',
			'Химки'
		],
		'Дальний восток' => [
			'Владивосток',
			'Находка',
			'Артём',
			'Кневичи'
		],
		'Камчатский край' => [
			'Петропавловск-Камчатский',
			'Елизово',
			'Вилючинск',
			'Ключи',
			'Термальный',
			'Сокочи'
		],
	];

	foreach ($cities as $key => $region) {
		echo "{$key}:<br>&nbsp;";
			foreach ($region as $valueCity) {
				echo ($valueCity == end($region)) ? "{$valueCity}." : "{$valueCity}, ";
			}
		echo "<br>";
	}
?>

<br><br>
<?php //Task 4 //массив нашёл в иинтернете конечно же, а не набирал вручную =)
	echo "Задание 4 <br>";

	function transliterate(string $word):string {
		$alphabet = [
	        'а' => 'a',   'б' => 'b',   'в' => 'v',
	        'г' => 'g',   'д' => 'd',   'е' => 'e',
	        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
	        'и' => 'i',   'й' => 'y',   'к' => 'k',
	        'л' => 'l',   'м' => 'm',   'н' => 'n',
	        'о' => 'o',   'п' => 'p',   'р' => 'r',
	        'с' => 's',   'т' => 't',   'у' => 'u',
	        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
	        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
	        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
	        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
	        ' ' => ' ',
	        'А' => 'A',   'Б' => 'B',   'В' => 'V',
	        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
	        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
	        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
	        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
	        'О' => 'O',   'П' => 'P',   'Р' => 'R',
	        'С' => 'S',   'Т' => 'T',   'У' => 'U',
	        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
	        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
	        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
	        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
		];
		//PHP.ru по запросу "работа со строками" - выдал просто восхитительную функцию
		//return strtr ($word, $alphabet); 

		//update: посмотрел 4й урок, вы сказали, что это Чит. переписал своей функцией ниже, уже поняв про мультибайтовость
		//		  но выполняя 8-е задание я ещё про мультибайтовость не знал.
		$transString = '';
		$arr1 = mb_str_split($word);

		foreach ($arr1 as $symbol) {
    		$transString .= $alphabet[$symbol];
		}
		return $transString;

	}

	echo transliterate('Привет Андрей');
?>
<br><br>

<?php //Task 5
	echo "Задание 5 <br>";

	$someString = 'Тили-тили, трали-вали, это мы не проходили, это нам не задавали!';

	echo str_replace (' ', '_', $someString);
?>
<br>
<?php //Task 6
	$mainMenu = ['Main','Catalog','Sales','Brands','Contacts','Support'];

	function mainMenuRender ($mainMenu) {
		$str = '';
		foreach ($mainMenu as $item) {
				$str .= '<li><a href="">' . $item . "</a></li>";
			}
		return $str;
	}

?>
<br><br>

<?php //Task 7
	echo "Задание 7 <br>";
	for ($i = 0; $i < 10; print $i++) { }
?>
<br><br>

<?php //Task 8
	echo "Задание 8 <br>";
	foreach ($cities as $key => $region) {
		echo "{$key}:<br>&nbsp;";
			foreach ($region as $valueCity) {
				if (substr($valueCity, 0, 2) == 'К') { //Я час убил, чтобы понять почему не растет кокос,
			//после кучи вардампов понял, что нужно вытягивать два символа (уже после 4ой лекции понял, что это два байта)
					echo ($valueCity == end($region)) ? "{$valueCity}." : "{$valueCity}, ";
				}
			}
		echo "<br>";
	}

?>
<br><br>

<?php //Task 8
	echo "Задание 9 <br>";
	//Так как у меня сделано уже своей функцией и встроенной PHP гораздо будет разумно просто объединить их в одну строку
	$someOneMoreString = 'Как собрать автомобиль из изоленты и палок';
	echo str_replace (' ', '_', transliterate($someOneMoreString));
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Задание 6</h1>
	<ul>
		<?php 
			echo mainMenuRender($mainMenu);
		?>
	</ul>
</body>
<footer>
	<br><br><br>
	<p>Copyright &copy; 2014-<?php echo date("Y"); ?>. Все права защищены. </p>
</footer>
</html>