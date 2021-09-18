
var cartSum =0;

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





function confirmFrom() {
    let person = {name:"", email:"", phone:"", city:"", street:"", comments:""};
    person.name = document.querySelector('#navn').value;
    person.email = document.querySelector('#email').value;
    person.phone = document.querySelector('#phone').value;
    person.city = document.querySelector('#city').value;
    person.street = document.querySelector('#street').value;
    person.comments = document.querySelector('#comments').value;
    console.log(Object.values(person));
    var txt;
    var confirmText = "Hi " + person.name + ". Please confirm your buy"
    var replay = confirm(confirmText);
    if (r) {
        txt = "Order confirmation." + "<br/>" +"Order number: 48557. " + "<br/>" + "Name: " + person.name + "<br/>"
        + "Address: " + person.street + ", " + person.city"<br/>" + "The order is ready in 40 min.";

    } else {
        txt = "Hi " + person.name + "you hav cancel your order";
    }
    let parentNode = document.getElementById("main_content");
    console.log(parentNode);
    let oldNode = document.getElementsByClassName("kontakt");
    console.log(oldNode);
    let newNode = document.createTextNode(txt);
    console.log(newNode);
    //parentNode.replaceChild(newNode, oldNode);
    }



function start() {


}


window.addEventListener("load", start);
