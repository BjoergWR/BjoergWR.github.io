<?php
$page = "registration";
include('view/header.php');
?>

<section class="bg-dark prime--container last--container">
    <div class="container from_top form_reg">
        <div><h1>Checkout form</h1><br></div>
            <form action="registration.php"  method="post">
                <label class="lable" for="fnavn">Name: </label><br>
                <input class="input" type="text" name="fname" id="name" placeholder="" required/><br>

                <label class="lable" for="femail">Email: </label><br>
                <input class="input" type="text" name="femail" id="email" placeholder="you@example.com" required/><br>

                <label class="lable" for="fphone">Phone: </label><br>
                <input class="input" type="tel" name="fphone" id="phone" placeholder= "505050" pattern = "\d{6}" required/><br>

                <label class="lable" for="fcity">City: </label><br>
                <input class="inpute" type="text" name="fcity" id="city" placeholder="Tórshavn" required/><br>

                <label class="lable" for="fstreet">Street: </label><br>
                <input class="input" type="text" name="fstreet" id="street" placeholder="Tórsgøta 100" required/><br>

                <label class="lable" for="fcomments">Comment:</label><br>
                <textarea class="input" name="fcomments" id="comments" placeholder="Write a comment" rows="3" cols="25"></textarea><br>


                <div class="submit">
                    <input type="reset" type='submit' name="reset" class='action_btn remove_button' value="reset"/>
                    <input type="button" type='submit'name="confirm" class='action_btn add_button'  value="confirm"/>
                    </div>
            </form>
    </div>
</section>



<?php include('view/footer-no-order.php');?>
