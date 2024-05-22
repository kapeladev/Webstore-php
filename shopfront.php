<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php echo file_get_contents('style2.css'); ?></style>
</head>
<body>
    <div class="front-text-container">
        <div class="front-head">
            <h1>#1 Pick in Watches Category</h1>
            <a>#1 Pick in Watches Category</a>
        </div>
    </div>

    <div class="front-productpage">
        <div class="abc">
            <div class="front-title">
                <div class="front-productcategory">
                    <span id="product-mark"><?php echo $product1mark ?></span>
                </div>
                <div class="front-productname">
                    <h1 id="product-name"><?php echo $product1name; ?></h1>
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
                        <a id="product-price"><?php echo "$".$product1price ?></a>
                    </div>
                    <div class="front-quantity">
                        <table>
                            <td><img class="minus" src="assets/minus.svg" onclick="minus()"></td>
                            <td><a class="num" id="num">1</a></td>
                            <td><img class="plus" src="assets/plus.svg" onclick="plus()"></td>
                        </table>
                    </div>
                    <form id="buy-form" action="cart.php" method="post">
                        <input type="hidden" name="product-mark" id="form-product-mark" value="<?php echo $product1mark; ?>">
                        <input type="hidden" name="product-name" id="form-product-name" value="<?php echo $product1name; ?>">
                        <input type="hidden" name="product-price" id="form-product-price" value="<?php echo $product1price; ?>">
                        <input type="hidden" name="product-img" id="form-product-img" value="data:image/jpg;charset=utf8;base64,<?php echo $product1photo; ?>">
                        <input type="hidden" name="product-quantity" id="form-product-quantity" value="1">
                        <button type="submit" style="display: none;">Submit</button>
                    </form>
                    <a class="dont" style="text-decoration: none;" onclick="document.getElementById('buy-form').submit();">
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
                    <img id="product-img" class="product-img"  src="data:image/jpg;charset=utf8;base64,<?php echo $product1photo; ?>" />
                    <div class="forimg">
                    </div>
                </div>
            </div>
        </div>

        <div class="front-other-container">
            <table class="other">
                <tr>
                    <td onclick="changeProduct('<?php echo $product1mark ?>', '<?php echo $product1name ?>', '<?php echo $product1price ?>', 'data:image/jpg;charset=utf8;base64,<?php echo $product1photo; ?>')">
                        <div class="other-container">
                            <img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $product1photo; ?>" />
                            <div class="other-text-container"><?php echo $product1name."<br>".'$'.$product1price ?></div>
                        </div>
                    </td>
                    <td onclick="changeProduct('<?php echo $product2mark ?>', '<?php echo $product2name ?>', '<?php echo $product2price ?>', 'data:image/jpg;charset=utf8;base64,<?php echo $product2photo; ?>')">
                        <div class="other-container">
                            <img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $product2photo; ?>" />
                            <div class="other-text-container"><?php echo $product2name."<br>".'$'.$product2price ?></div>
                        </div>
                    </td>
                    <td onclick="changeProduct('<?php echo $product3mark ?>', '<?php echo $product3name ?>', '<?php echo $product3price ?>', 'data:image/jpg;charset=utf8;base64,<?php echo $product3photo; ?>')">
                        <div class="other-container">
                            <img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $product3photo; ?>" />
                            <div class="other-text-container"><?php echo $product3name."<br>".'$'.$product3price ?></div>
                        </div>
                    </td>
                    <td onclick="changeProduct('<?php echo $product4mark ?>', '<?php echo $product4name ?>', '<?php echo $product4price ?>', 'data:image/jpg;charset=utf8;base64,<?php echo $product4photo; ?>')">
                        <div class="other-container">
                            <img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $product4photo; ?>" />
                            <div class="other-text-container"><?php echo $product4name."<br>".'$'.$product4price ?></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td onclick="changeProduct('<?php echo $product5mark ?>', '<?php echo $product5name ?>', '<?php echo $product5price ?>', 'data:image/jpg;charset=utf8;base64,<?php echo $product5photo; ?>')">
                        <div class="other-container">
                            <img class="other-img-container" src="data:image/jpg;charset=utf8;base64,<?php echo $product5photo; ?>" />
                            <div class="other-text-container"><?php echo $product5name."<br>".'$'.$product5price ?></div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <script>
        function changeProduct(mark, name, price, imgSrc) {
            document.getElementById('product-mark').innerText = mark;
            document.getElementById('product-name').innerText = name;
            document.getElementById('product-price').innerText = "$" + price;
            document.getElementById('product-img').src = imgSrc;
            document.getElementById('form-product-mark').value = mark;
            document.getElementById('form-product-name').value = name;
            document.getElementById('form-product-price').value = price;
            document.getElementById('form-product-img').value = imgSrc;
        }
       
priceht = document.getElementById('product-price')


add00 = false
if(priceht.innerHTML.includes(".") == false){
    add00 = true
}

price = priceht.innerHTML.replace("$","")
price = parseFloat(price)


 
function minus(){
    num = document.getElementById('num')
    quant = parseInt(num.innerHTML)
    quant1 = document.getElementById("form-product-quantity")
    if(quant > 1){
        quant -= 1
        num.innerHTML = quant
        price.innerHTML *= quant
        priceht.innerHTML = "$" + price * quant
        quant1.value = quant
        if(add00 = true){
            priceht.innerHTML += ".00"
        }

    }
    return quant;
    
}
function plus(){
    num = document.getElementById('num')
    quant1 = document.getElementById("form-product-quantity")
    quant = parseInt(num.innerHTML)
    quant += 1
    num.innerHTML = quant
    price.innerHTML *= quant
    priceht.innerHTML = "$" + price * quant 
    quant1.value = quant
    if(add00 = true){
        priceht.innerHTML += ".00"
    }

    }
    function elo() {
        num = document.getElementById('num')
        quant = parseInt(num.innerHTML)
        let q ={
            "quantity": quant
        }
        fetch('getcartvalue.php',{
            "method":"POST",
            "headers":{
                "Content-Type": "application/json; charset=utf-8"
            },
            "body":JSON.stringify(q)
        }).then(function(response){
            return response.text();
        }).then(function(data){
        console.log(data);})

    }
    function change(id){
        
}

    </script>
</body>
</html>
