<?php
$page = "registration";
include('view/header.php');
?>

<section class="bg-dark prime--container last--container">
    <div class="container from_top">
        <div><p id="insert_submittet"><h1>Checkout form</h1></p></div>
            <form action="registration.php"  method="post">
                <p><label for="fnavn">Name: </label>
                    <input type="text" name="fname" id="name" placeholder="" required/></p>

                <p><label for="femail">Email: </label>
                    <input type="text" name="femail" id="email" placeholder="you@example.com" required/></p>

                <p><label for="fphone">Phone: </label>
                    <input type="tel" name="fphone" id="phone" placeholder= "505050" pattern = "\d{6}" required/></p>

                <p><label for="fcity">City: </label>
                    <input type="text" name="fcity" id="city" placeholder="Tórshavn" required/></p>

                <p><label for="fstreet">Street: </label>
                    <input type="text" name="fstreet" id="street" placeholder="Tórsgøta 100" required/></p>

                <p><label for="fcomments">Comment:</label>
                    <textarea name="fcomments" id="comments" placeholder="Write a comment" rows="3" cols="25"></textarea></p>


                <p class="submit">
                    <input type="reset" type='submit' name="reset" class='action_btn remove_button' value="reset"/>
                    <input type="button" type='submit'name="confirm" class='action_btn add_button'  value="confirm"/>
                    </p>
            </form>
    </div>
</section>



<?php include('view/footer-no-order.php');?>
