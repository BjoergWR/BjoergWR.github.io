<?php
$page = "draw";
include('view/header.php');
?>



<main>
    <div class="canvas-container">
        <canvas id="canvas"></canvas>
        <div class="tools">
            <button id="clear" class="btn-clear" type="button">clear</button>
            <input id="color-picker"
                   name="color-picker"
                   type="color"
                   class="color-picker">
            <input id="draw-width"
                   type="range"
                   value="1"
                   min="1"
                   max="100"
                   class="pen-range">
        </div>
    </div>
</main>


<?php include('view/footer-no-order.php');?>

