
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


let person = {name:"", email:"", phone:"", city:"", street:"", comments:""};

person.name = document.querySelector('#navn').value;
person.email = document.querySelector('#email').value;
person.phone = document.querySelector('#phone').value;
person.city = document.querySelector('#city').value;
person.street = document.querySelector('#street').value;
person.comments = document.querySelector('#comments').value;


function confirmFrom() {
    console.log(Object.values(person));
    var txt;
    var confirmText = "Hi" + person.name + ". Do you want to continue"
    var replay = confirm(confirmText);
    if (r) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("insert_submittet").innerHTML = txt;
    }



function start() {


}


window.addEventListener("load", start);
