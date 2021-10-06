<?php
$page = "menu";
include('view/header.php');
require_once "config.php";
$update_m_chart="";
$menu_id="";
$create_row = false;
$update_row = false;
$delete_row = false;


if($_SERVER["REQUEST_METHOD"] == "POST") {
         foreach ($_POST as $key => $entry) {
             if ($key == "current_m_chart") {
                 $update_m_chart = trim($entry);
                 echo "..........update m cart = " . $update_m_chart;
             }
             if ($key == "id") {
                 $menu_id = trim($entry);
                 echo "..........menu id = " . $menu_id;
             }

         }
        if(isset($_POST['add'])) {
            echo "add is true";
            if($update_m_chart == 0){
                $create_row = true;
            }else{
                $update_row = true;
            }
            $update_m_chart++;

        }
        if(isset($_POST['remove'])) {
            if($update_m_chart == 1){
                $delete_row = true;
            }else{
                $update_row = true;
            }
            $update_m_chart-=1;
        }
        $sql ="";
        //prepare a select statment
        if($update_row){
            $sql = "UPDATE cart SET cartnumber='".$update_m_chart ."' WHERE  m_id=" . $menu_id;
            // UPDATE `cart` SET `id`='[value-1]',`cartnumber`='[value-2]',`m_id`='[value-3]' WHERE 1
        }
        if($delete_row){
            $sql = "DELETE FROM cart WHERE m_id=" . $menu_id;
            //DELETE FROM `cart` WHERE 0
        }
        if($create_row){
            $sql = "INSERT INTO cart(id, cartnumber, m_id) VALUES ('null','" .$update_m_chart. "','". $menu_id. "')";
            //INSERT INTO `cart`(`id`, `cartnumber`, `m_id`) VALUES ('[value-1]','[value-2]','[value-3]')
        }

        if($stmt = mysqli_prepare($link, $sql)){
            if(!mysqli_stmt_execute($stmt)){
                echo "Oops! something went wrong. Please try again later.";
                exit();
            }
        }
}


?>

<section class="middel">
    <div class="menu_container">
        <?php
        // Attempt select query execution
        $sql = "SELECT * FROM menu";
        if($result1 = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result1) > 0){
                while($row = mysqli_fetch_array($result1)) {
                    $m_id = $row['id'];
                    $m_name = $row['name'];
                    $m_img = $row['img'];
                    $m_price = $row['price'];


                    $m_cart = "";

                    $sql = "SELECT cartnumber FROM cart WHERE m_id=".$m_id;
                    $in_cart= false;
                    if($result2 = mysqli_query($link, $sql)){
                        while($row = mysqli_fetch_array($result2)) {
                            $m_cart = $row['cartnumber'];
                            $in_cart= true;
                        }
                    }
                    if(!$in_cart){
                        $m_cart=0;
                    }

                    echo "<div class='menuItem'><h4>".$m_name ."</h4><img src=" ."\"". $m_img ."\"". "alt='image of menu item' class='menuImg' onclick='addCart('menuItem1');'/>
                            <p class='p_menu'><h2> kr</h2><h2 id='menuItem1'>" . $m_price . "</h2><p class='p_item_cart'>Item in cart: " . $m_cart . "</p></p>
                         <div class='buttons'><form method='post' action='menu.php'>
                         <input type='hidden' name='id' value='".$m_id."'/>
                         <input type='hidden' name='current_m_chart' value='".$m_cart."' />";
                    if($m_cart==0){
                        echo "<button name='remove' style='visibility: hidden' class='action_btn remove_button' type='submit' value='Cancel'>Remove item</button>";
                    }else {
                        echo "<button name='remove' class='action_btn remove_button' type='submit' value='Cancel'>Remove item</button>";
                    }
                    echo "<button name='add' class='action_btn add_button' type='submit' value='Save'>Add to cart</button></form></div></div> ";
                }
            }
            else{
                echo "<p class='lead'><em>No records were found.</em></p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        ?>

        </div>
    </div>
</section>



<?php include('view/footer.php');?>


