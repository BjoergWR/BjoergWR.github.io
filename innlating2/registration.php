<?php
$page = "registration";
include('view/header.php');
?>

<section class="bg-dark prime--container last--container">
    <div class="container from_top border">
        <div><h1>Checkout form</h1></div>
            <form action="registration.php"  method="post">
                <label class="lable" for="fnavn">Name: </label>
                <input class="input" type="text" name="fname" id="name" placeholder="" required/>

                <label class="lable" for="femail">Email: </label>
                <input class="input" type="text" name="femail" id="email" placeholder="you@example.com" required/>

                <label class="lable" for="fphone">Phone: </label>
                <input class="input" type="tel" name="fphone" id="phone" placeholder= "505050" pattern = "\d{6}" required/>

                <label class="lable" for="fcity">City: </label>
                <input class="inpute" type="text" name="fcity" id="city" placeholder="Tórshavn" required/>

                <label class="lable" for="fstreet">Street: </label>
                <input class="input" type="text" name="fstreet" id="street" placeholder="Tórsgøta 100" required/>

                <label class="lable" for="fcomments">Comment:</label>
                <textarea class="input" name="fcomments" id="comments" placeholder="Write a comment" rows="3" cols="25"></textarea>


                <div class="submit">
                    <input type="reset" type='submit' name="reset" class='action_btn remove_button' value="reset"/>
                    <input type="button" type='submit'name="confirm" class='action_btn add_button'  value="confirm"/>
                    </div>
            </form>
    </div>
</section>



<?php include('view/footer-no-order.php');?>
