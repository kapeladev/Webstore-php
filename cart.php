<?php  
session_start();
include('navbar.php');
$productMark = $_POST['product-mark'];
$productName = $_POST['product-name'];
$productPrice = $_POST['product-price'];
$productImg = $_POST['product-img'];
$productQuantity = $_POST['product-quantity'];
$total = $productPrice * $productQuantity;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style><?php file_get_contents('style2.css') ?></style>
    <meta charset="UTF-8">
</head>
<body>
    <div class="cart-ico">
        <img onclick="car()" src="assets/shopcart.svg">
    </div>
    <div class="cart-all">
        <div class="cart-product-container">
        <div class="cart-product">
            <div class="cart-product-img-container">
                <?php echo "<img class='cart-product-img' src='$productImg' alt='$productName' />"; ?>

            </div>
            <div class="cart-product-name">
                <?php echo "<p>Product: $productName</p>"; ?> 
            </div>
            <div class="cart-mark">
                <?php echo "<p>Mark: $productMark</p>";?>
            </div>
            <div class="cart-product-price">
                <?php echo "<p>Price: $$productPrice</p>";?>

            </div>
            <div class="cart-quant">
            <?php echo "<p>Quantity: $productQuantity</p>"; ?>
            </div>
            <div class="total">
                <?php echo "<p>Total: $$total </p>"; ?>
            </div>
            
        </div>
        </div>
    </div>
    </div>
</body>
</html>

