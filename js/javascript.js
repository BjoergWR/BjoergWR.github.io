
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

function validateForm(a, b, c, d, f) {
    if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "", f == null || f == "") {
        alert("Please Fill All Required Field");
        return false;
    }
    else
        return true;
}



function confirmFrom() {
    let person = {name: "", email: "", phone: "", city: "", street: "", comments: ""};
    person.name = document.getElementById('navn').value;
    person.email = document.getElementById('email').value;
    person.phone = document.getElementById('phone').value;
    person.city = document.getElementById('city').value;
    person.street = document.getElementById('street').value;
    person.comments = document.getElementById('comments').value;
    var valdiInput = validateForm(person.name, person.email, person.phone, person.city, person.street);
    if (valdiInput) {
        var txt;
        var confirmText = "Hi " + person.name + ". \nPlease confirm your buy.";
        var replay = confirm(confirmText);
        if (replay) {
            txt = "Order confirmation.<br> Order number: 48557. <br>" + "Name: " + person.name + "<br>Address: "
                + person.street + ", " + person.city + "<br>The order is ready in 40 min.";
        } else {
            txt = "Hi " + person.name + "you hav cancel your order";
        }
        let elem = document.getElementById('form_registration');
        elem.parentNode.removeChild(elem);
        document.getElementById('insert_submittet').innerHTML = txt;
        let nodeChangeStyle = document.getElementById('main_content');
        nodeChangeStyle.firstElementChild.style.visibility = "visible";
    }
}


function start() {
}


window.addEventListener("load", start);
