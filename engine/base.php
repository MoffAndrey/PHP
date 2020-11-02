<?php
 function get(string $name) {
     if(isset($_GET[$name])) {
         return $_GET[$name];
     }
     return null;
 }

function post(string $name) {
    if(isset($_POST[$name])) {
        return $_POST[$name];
    }
    return null;
}

function redirect(string $url) {
    header("Location: {$url}");
}

function getHash(string $string) {
    return md5($string . 'moff');
}

function addToBasket(int $id, string $name, int $price) {
    if (isset($_SESSION['basket_items'][$id])) {
        $quantity = $_SESSION['basket_items'][$id]['quantity'] + 1;
    } else { $quantity = 1; }
    $_SESSION['basket_items'][$id]['id'] = $id;
    $_SESSION['basket_items'][$id]['name'] = $name;
    $_SESSION['basket_items'][$id]['price'] = $price;
    $_SESSION['basket_items'][$id]['quantity'] = $quantity;
}

function removeFromBasket(int $id) {
    if ($_SESSION['basket_items'][$id]['quantity'] > 1) {
            $_SESSION['basket_items'][$id]['quantity'] -= 1;
    } else { 
        unset($_SESSION['basket_items'][$id]);
    }
    
}