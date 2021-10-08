


    <?php
    if($page=='menu' && $total_sum==0){
        echo " <footer class='footer'>";
    }else{
        echo "<div id='mobile_footer_nav'>";
        if($total_sum==0){

            echo " <div class='nav_button'><a href='menu.php' class='order_link'>Order Now</a></div>";
        }

        if($total_sum!=0){
            echo " <div class='nav_button'><a href='registration.php' class='order_link'>Buy Now</a></div>";
        }
        echo "</div><footer class='footer' style='padding: 1em 1em 5em 1em;'>";
    }
    ?>

    <div>
        <p class="footer-nav">
            Burgara Stovan |
            Address: Heimagøta 82, 100 Tórshavn |
            Phone number: +298 50 60 40 | e-mail:
            <a href="mailto:webmaster@example.com" class="mail" target="_blank">burgarastova@mail.fo</a>
        </p>
    </div>
    <div class="footer-social">
        <a class="social-link" href="https://facebook.com" target="_blank">
            <img class="social-icon" src="img/pngwing.com.png" alt="" aria-label="facebook" />
        </a>
        <a class="social-link" href="https://instagram.com" target="_blank">
            <img class="social-icon" src="img/insta.png" alt="" aria-label="instagram" />
        </a>
    </div>

</footer>
</body>
<script>
    //This it so prevent the "Confirm Form Resubmission" when in menu.php
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>
