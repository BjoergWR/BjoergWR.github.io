
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
        txt = "Order confirmation. Order number: 48557." + "Name: " + person.name + "Address: "
            + person.street + ", " + person.city + "The order is ready in 40 min.";
    alert(txt);

    } else {
        txt = "Hi " + person.name + "you hav cancel your order";
    }

    }



function start() {


}


window.addEventListener("load", start);
