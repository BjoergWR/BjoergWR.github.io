<?php
$page = "menu";
include('view/header.php');
?>

<main class="middel">
    <div class="container">
        <div class="img1 menuItem">
            <h3>Homestyle</h3>
            <a href="#">
                <img src="img/burger_1.jpg" alt="" onclick="addCart('menuItem1');"/>
            </a>
            <p><h2> kr</h2><h2 id="menuItem1">60</h2</p>
        </div>
        <div class="img2 menuItem">
            <h3>Luger Burger</h3>
            <a href="#">
                <img src="img/burger_3.jpg" alt="" onclick="addCart('menuItem2');"/>
            </a>
            <p><h2> kr</h2><h2 id="menuItem2">75</h2></p>
        </div>
        <div class="img3 menuItem">
            <h3>Le Burger</h3>
            <a href="#">
                <img src="img/burger.jpg" alt="" onclick="addCart('menuItem3');"/>
            </a>
            <p><h2> kr</h2><h2 id="menuItem3">80</h2></p>
        </div>
        <div class="img4 menuItem">
            <h3>Chips</h3>
            <a href="#">
                <img src="img/french_fries.png" alt="" onclick="addCart('menuItem4');" />
            </a>
            <p><h2> kr</h2><h2 id="menuItem4">25</h2></p>
        </div>
        <div class="img5 menuItem">
            <h3>Double Style</h3>
            <a href="#">
                <img src="img/burger.jpg" alt="" onclick="addCart('menuItem5');"/>
            </a>
            <p><h2> kr</h2><h2 id="menuItem5">85</h2></p>
        </div>
        <div class="img6 menuItem">
            <h3>Hungry Beast</h3>
            <a href="#">
                <img src="img/tree_burger.png" alt="" onclick="addCart('menuItem6');"/>
            </a>
            <p><h2> kr</h2><h2 id="menuItem6">150</h2></p>
        </div>
        <div class="img7 menuItem">
            <h3>Curly Chips</h3>
            <a href="#">
                <img src="img/frensh_fries_2.jpg" alt="" onclick="addCart('menuItem7');"/>
            </a>
            <p><h2> kr</h2><h2 id="menuItem7">30</h2></p>
        </div>
        <div class="img8 menuItem">
            <h3>Large Soda</h3>
            <a href="#">
                <img src="img/soda_big.jpg" alt="" onclick="addCart('menuItem8');"/>
            </a>
            <p><h2> kr</h2><h2 id="menuItem8">35</h2></p>
        </div>
        <div class="img9 menuItem">
            <h3>Small Soda</h3>
            <a href="#">
                <img src="img/coca_cola_animation_2.png" alt="" onclick="addCart('menuItem9');" />
            </a>
            <p><h2> kr</h2><h2 id="menuItem9">25</h2></p>
        </div>
    </div>
</main>



<?php include('view/footer.php');?>


