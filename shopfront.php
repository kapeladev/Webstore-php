<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php file_get_contents('style2.css') ?></style>
</head>
<body>
    <div class="front-text-container">
    <div class="front-head">
     <h1>#1 Pick in Watches Category</h1>
     <a>#1 Pick in Watches Category</a>   
    </div> 
</div>
    </div>
    <div class="front-productpage"> 
    <div class="abc">
        <div class="front-title">
            <div class="front-productcategory">
            <span><?php echo $product1mark ?></span>
        </div>
        <div class="front-productname">
            <h1><?php
            echo $product1name; ?></h1>
        </div>
        <div class="front-productcolor">
            <h4>Colors:</h4>
        </div>
        <div class="front-coloroptions">
            <input type="radio" name="color" id="color1" class="color c1">
            <input type="radio" name="color" id="color2" class="color c2">
            <input type="radio" name="color" id="color3" class="color c3">
        </div>
        <div class="front-buy-container">
            <div class="front-price">
                <a id="price"><?php echo "$".$product1price ?></a></div>
                <div class="front-quantity">
                    <table>
                        <td><img class="minus"  src="assets/minus.svg" onclick="minus()"></td>
                        <td><a class="num" id="num">1</a></td>
                        <td><img class="plus" src="assets/plus.svg" onclick="plus()"></td>
                    </table>
                </div>
                <a class="dont"style="text-decoration: none;" onclick="" href="cart.php">
                <div class="front-buy">
                    <table>
        <td><img src="assets/cart.svg"></td>
        <td><a>Buy</a></td>
    </table>
    </div>
    </a>
</div>
      
      
    
    </div>
    <div class="front-product">
        <div class="product-img-container">
            <img class="product-img" src="data:image/jpg;charset=utf8;base64,<?php echo $product1photo; ?>" /> 
            <div class="forimg">
            <div class="product-img-side"><img class="product-img2" src="data:image/jpg;charset=utf8;base64,<?php echo $product1photo; ?>" /></div>
            <div class="product-img-side"><img class="product-img2" src="data:image/jpg;charset=utf8;base64,<?php echo $product1photo; ?>" /></div>
            <div class="product-img-side"><img class="product-img2" src="data:image/jpg;charset=utf8;base64,<?php echo $product1photo; ?>" /></div>
            </div>
            </div>

        
     </div>
    </div>
    <div class="front-other-container">
        <table class="other">
            <tr>
        <td onclick="change(2)"><div class="other-container"><img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $product2photo; ?>" /><div class="other-text-container"><?php echo $product2name."<br>".'$'.$product2price?></div></div></td>
        <td><div class="other-container"><img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $product3photo; ?>" /><div class="other-text-container"><?php echo $product3name."<br>".'$'.$product3price?></div></div></td>
        <td><div class="other-container"><img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /><div class="other-text-container"><?php echo $name."<br>".$price?></div></div></td>
        <td><div class="other-container"><img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /><div class="other-text-container"><?php echo $name."<br>".$price?></div></div></td>

    </tr>
    <tr>
        <td><div class="other-container"><img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /><div class="other-text-container"><?php echo $name."<br>".$price?></div></div></td>
        <td><div class="other-container"><img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /><div class="other-text-container"><?php echo $name."<br>".$price?></div></div></td>
        <td><div class="other-container"><img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /><div class="other-text-container"><?php echo $name."<br>".$price?></div></div></td>
        <td><div class="other-container"><img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /><div class="other-text-container"><?php echo $name."<br>".$price?></div></div></td>

    </tr>
</table>
<div>
    <section>contact</section>
</div>
        
</div>
</div>
</body>
<script src="./dynmic.js"></script>
</html>