<?php
$page = "registration";
include('view/header.php');
?>
<section class="bg-dark prime--container last--container">
    <div class="container from_top">
        <div><p id="insert_submittet"></p></div>
        <div class="kontakt" id="form_registration">
            <form id="registrationForm">
                <p><label for="navn">Navn: </label>
                    <input type="text" name="name" id="navn" placeholder="Liam Terjson" required/></p>

                <p><label for="email">Email: </label>
                    <input type="text" name="email" id="email" placeholder="burgar@stova.com" required/></p>

                <p><label for="phone">Nummar: </label>
                    <input type="tel" name="telefon" id="phone" placeholder= "505050" pattern = "\d{6}" required/></p>

                <p><label for="city">Býur: </label>
                    <input type="text" name="býur" id="city" placeholder="Tórshavn" required/></p>

                <p><label for="street">Gøta: </label>
                    <input type="text" name="gøta" id="street" placeholder="Tórsgøta 100" required/></p>

                <p><label for="comments">Viðmerk:</label>
                    <textarea name="comments" id="comments" placeholder=" Viðmeringar" rows="3" cols="25"></textarea></p>


                <p class="submit">
                    <input type="button" value="send" name="submit" class="button1" onclick="confirmFrom();" />
                    <input type="reset" name="reset" class="button2" value="Strika"/></p>
            </form>
        </div>
    </div>
</section>









<?php include('view/footer-no-order.php');?>
