
var cartSum;

function addCart(menuItem){
    var price = document.getElementById(menuItem);
    price = parseInt(price.textContent);
    addAndDisplaySum(price);
}

function addAndDisplaySum(price){
    cartSum += price;
    const sumPrice = document.getElementById("sumPrice");
    sumPrice.innerHTML="" + cartSum + ".00kr";

}

function start(){
    cartSum = 0;
}

window.addEventListener("load", start);
