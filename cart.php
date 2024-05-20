<?php   
require('producthandler.php');
session_destroy();
session_start();
$name1 = $_SESSION['name'];
require("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style><?php file_get_contents('style2.css') ?></style>
    <meta charset="UTF-8">
</head>
<body>
    <div class="cart-ico">
    <img  onclick="car()" src="assets/shopcart.svg">
    </div>

    <div class="cart-all">
       
    </div>
    <script src="dynmic.js"></script>
</body>
</html>