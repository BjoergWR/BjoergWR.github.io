<?php
$page = "draw";
include('view/header.php');
?>


<body>
<div class="container">
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
</body>





<?php include('view/footer.php');?>

