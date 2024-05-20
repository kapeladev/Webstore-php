num = document.getElementById('num')
quant = parseInt(num.innerHTML)
priceht = document.getElementById('price')


add00 = false
if(priceht.innerHTML.includes(".") == false){
    add00 = true
}

price = priceht.innerHTML.replace("$","")
price = parseFloat(price)


 
function minus(){
    if(quant > 1){
        quant -= 1
        num.innerHTML = quant
        price.innerHTML *= quant
        priceht.innerHTML = "$" + price * quant
        if(add00 = true){
            priceht.innerHTML += ".00"
        }
    }
    return quant


}
function plus(){

        quant += 1
        num.innerHTML = quant
        price.innerHTML *= quant
        priceht.innerHTML = "$" + price * quant 
        if(add00 = true){
            priceht.innerHTML += ".00"
        }
        return quant
        
}
function addtocart() {
}
function car(){
    
    console.log(quant)
}
function change(id){
    
}