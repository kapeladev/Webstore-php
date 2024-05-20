<?php 
require("userval.php");
// valuser($_SESSION['name']);
$pages = [
    "/index" => "main.php",
    "/cart" => "cart.php",
    "/userpage" => "userpage.php",
    "/register" => "register.php",
    "/login" => "login.php",
];
$route = $_SERVER['REQUEST_URI'];
if (isset($pages[$route])) {
    // $pages[$route] = $pages[$route]; 
    require_once $pages[$route];
}else{
    header('Location: '. key($pages));
}

?>
