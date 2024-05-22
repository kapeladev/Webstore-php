
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
    return quant;
    }
    function changeProduct(mark, name, price, imgSrc) {
        document.getElementById('product-mark').innerText = mark;
        document.getElementById('product-name').innerText = name;
        document.getElementById('product-price').innerText = "$" + price;
        document.getElementById('product-img').src = imgSrc;
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
