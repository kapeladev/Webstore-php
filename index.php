<?php 
require("userval.php");
// valuser($_SESSION['name']);
$pages = [
    "/userpage" => "userpage.php",
    "/index" => "register.php",
    "/log" => "login.php",
    "/register" => "login.php",
];
$route = $_SERVER['REQUEST_URI'];
if (isset($pages[$route])) {
    // $pages[$route] = $pages[$route];
    require_once $pages[$route];
}else{
    header('Location: '. key($pages));
}
?>
