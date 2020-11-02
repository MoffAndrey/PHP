<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "db.php";
$connection = sqlConnection();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = post('login');
    $password = getHash(post('password'));

    if($user = getUser($connection, $login, $password)) {
        session_start();
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_login'] = $user['login'];
        $_SESSION['user_id'] = $user['id'];
        redirect('/welcome.php');
    } else {
        echo "Не авторизованы!";
    }
}

mysqli_close($connection);
?>

<form action="" method="post">
    <input type="text" name="login"><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Войти">
</form>