<?php
$page = "registration";
include('view/header.php');
?>
<section class="bg-dark prime--container last--container">
    <div class="container from_top">
        <div><p id="insert_submittet"><h1>Checkout form</h1></p></div>
            <form id="registrationForm">
                <p><label for="navn">Name: </label>
                    <input type="text" name="name" id="navn" placeholder="" required/></p>

                <p><label for="email">Email: </label>
                    <input type="text" name="email" id="email" placeholder="you@example.com" required/></p>

                <p><label for="phone">Phone: </label>
                    <input type="tel" name="telefon" id="phone" placeholder= "505050" pattern = "\d{6}" required/></p>

                <p><label for="city">City: </label>
                    <input type="text" name="city" id="city" placeholder="Tórshavn" required/></p>

                <p><label for="street">Street: </label>
                    <input type="text" name="street" id="street" placeholder="Tórsgøta 100" required/></p>

                <p><label for="comments">Comment:</label>
                    <textarea name="comments" id="comments" placeholder="Write a comment" rows="3" cols="25"></textarea></p>


                <p class="submit">
                    <input type="reset" type='submit' name="reset" class='action_btn remove_button' value="reset"/>
                    <input type="button" type='submit'name="confirm" class='action_btn add_button'  value="confirm"/>
                    </p>
            </form>
    </div>
</section>





<?php include('view/footer-no-order.php');?>
