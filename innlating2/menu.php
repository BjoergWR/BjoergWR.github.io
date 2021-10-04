<?php
$page = "menu";
include('view/header.php');
?>

<section class="middel">
    <div class="menu_container">
        <div class="menuItem">
            <h4>Homestyle</h4>
            <img src="img/burger_1.jpg" alt="" class="menuImg" onclick="addCart('menuItem1');"/>
            <p><h2> kr</h2><h2 id="menuItem1">60</h2</p>
        </div>
        <div class="menuItem">
            <h4>Luger Burger</h4>
            <img src="img/burger_3.jpg" alt="" class="menuImg" onclick="addCart('menuItem2');"/>
            <p><h2> kr</h2><h2 id="menuItem2">75</h2></p>
        </div>
        <div class="menuItem">
            <h4>Le Burger</h4>
            <img src="img/burger.jpg" alt="" class="menuImg" onclick="addCart('menuItem3');"/>
            <p><h2> kr</h2><h2 id="menuItem3">80</h2></p>
        </div>
        <div class="menuItem">
            <h4>Chips</h4>
            <a href="#">
                <img src="img/french_fries.png" alt="" class="menuImg" onclick="addCart('menuItem4');" />
            </a>
            <p><h2> kr</h2><h2 id="menuItem4">25</h2></p>
        </div>
        <div class="menuItem">
            <h4>Double Style</h4>
            <a href="#">
                <img src="img/burger.jpg" alt="" class="menuImg" onclick="addCart('menuItem5');"/>
            </a>
            <p><h2> kr</h2><h2 id="menuItem5">85</h2></p>
        </div>
        <div class="menuItem">
            <h4>Hungry Beast</h4>
            <a href="#">
                <img src="img/tree_burger.png" alt="" class="menuImg" onclick="addCart('menuItem6');"/>
            </a>
            <p><h2> kr</h2><h2 id="menuItem6">150</h2></p>
        </div>
        <div class="menuItem">
            <h4>Curly Chips</h4>
            <a href="#">
                <img src="img/frensh_fries_2.jpg" alt="" class="menuImg" onclick="addCart('menuItem7');"/>
            </a>
            <p><h2> kr</h2><h2 id="menuItem7">30</h2></p>
        </div>
        <div class="menuItem">
            <h4>Large Soda</h4>
            <a href="#">
                <img src="img/soda_big.jpg" alt="" class="menuImg" onclick="addCart('menuItem8');"/>
            </a>
            <p><h2> kr</h2><h2 id="menuItem8">35</h2></p>
        </div>
        <div class="menuItem">
            <h4>Small Soda</h4>
            <a href="#">
                <img src="img/coca_cola_animation_2.png" alt="" class="menuImg" onclick="addCart('menuItem9');" />
            </a>
            <p><h2> kr</h2><h2 id="menuItem9">25</h2></p>
        </div>
    </div>
</section>



<?php include('view/footer.php');?>


