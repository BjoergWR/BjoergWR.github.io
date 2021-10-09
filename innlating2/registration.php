<?php
$page = "registration";
include('view/header.php');


// if the webpage is requested with post
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "config.php";
    //we want to delete all row in cart table in our DB
    $sql = "DELETE FROM `cart`";
    if($stmt = mysqli_prepare($link, $sql)) {
        //if Successfully deleted we redirect client to index.php
        if(mysqli_stmt_execute($stmt)){
            header("location: index.php");
            exit();
        } else{
            echo "Oops! something went wrong. Please try again later.";
            exit();
        }
    }
}
?>

<section class="bg-dark prime--container last--container">
    <div class="container from_top order_form_content">
        <div>
            <p id="insert_submittet">
            </p></div>

            <form id="orderForm" action="registration.php"  method="post">
                <div><h1>Checkout form</h1><br></div>
                <label class="lable" for="name">Name: </label><br>
                <input class="input" type="text" name="name" id="name" placeholder="" required/><br>

                <label class="lable" for="email">Email: </label><br>
                <input class="input" type="text" name="email" id="email" placeholder="you@example.com" required/><br>

                <label class="lable" for="phone">Phone: </label><br>
                <input class="input" type="tel" name="phone" id="phone" placeholder= "505050" pattern = "\d{6}" required/><br>

                <label class="lable" for="city">City: </label><br>
                <input class="inpute" type="text" name="city" id="city" placeholder="Tórshavn" required/><br>

                <label class="lable" for="street">Street: </label><br>
                <input class="input" type="text" name="street" id="street" placeholder="Tórsgøta 100" required/><br>

                <label class="lable" for="comments">Comment:</label><br>
                <textarea class="input" name="comments" id="comments" placeholder="Write a comment" rows="3" cols="25"></textarea><br>

                <div class="submit">

                    <input type="submit"  name="reset" class='action_btn remove_button' value="reset" "/>
                    <input type="submit" name="confirm" class='action_btn add_button'  value="confirm" onclick="confirmFrom();"/>
                    </div>
            </form>
    </div>
</section>

<?php include('view/footer-no-order.php');?>
