num = document.getElementById('num')
quant = parseInt(num.innerHTML)
priceh = document.getElementById('price')

console.log(price)
function minus(){
    if(quant > 1){
        quant -= 1
        num.innerHTML = quant
    }


}
function plus(){

        quant += 1
        num.innerHTML = quant
        
}