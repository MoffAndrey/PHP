<?php 
	session_start();
	$welcome_1 = 'Приветствуем Вас ' . $_SESSION['user_name'] . '!';
	$welcome_2 = 'Ваш логин: ' . $_SESSION['user_login'];
?>
<h1><?=$welcome_1?></h1>
<h2><?=$welcome_2?></h2>
<h2>Добро пожаловать в Нарнию!</h2>