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
            <span>watches</span>
        </div>
        <div class="front-productname">
            <h1><?php
            echo $name; ?></h1>
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
            <a>250.00$</a></div>
            <div class="front-quantity">
            <table>
                <td><img class="minus" src="assets/minus.svg"></td>
                <td><a class="num">2</a></td>
                <td><img class="plus" src="assets/plus.svg"></td>
            </table>
        </div>
            <div class="front-buy">
        <table>
        <td><img src="assets/shopcart.svg"></td>
        <td>Buy</td>
        </table>
    </div>
</div>
      
      
    
    </div>
    <div class="front-product">
            <div class="product-img-container">
            <img class="product-img" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /> 
            <div class="forimg">
            <div class="product-img-side"><img class="product-img2" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /></div>
            <div class="product-img-side"><img class="product-img2" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /></div>
            <div class="product-img-side"><img class="product-img2" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /></div>
            </div>
            </div>

     
     </div>
     </div>
     <div class="front-other-container">
     <!-- <div class=""> -->
        <div class="front-other-products"><img class="product-img3" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /></div>
        <div class="front-other-products"><img class="product-img3" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /></div>
        <div class="front-other-products"><img class="product-img3" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /></div>
        <div class="front-other-products"><img class="product-img3" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /></div>
    <!-- </div> -->
    <!-- <div class=""> -->
        <div class="front-other-products"><img class="product-img3" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /></div>
        <div class="front-other-products"><img class="product-img3" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /></div>
        <div class="front-other-products"><img class="product-img3" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /></div>
        <div class="front-other-products"><img class="product-img3" src="data:image/jpg;charset=utf8;base64,<?php echo $photo; ?>" /></div>
    <!-- </div> -->
    </div>
     </div>
</div>
</body>
</html>