<?php
$page = "menu";

//include our header php
//include('view/header.php');

//variables
$update_m_chart="";
$menu_id="";

//boolean variables
$create_row = false;
$update_row = false;
$delete_row = false;


// if the webpage is requested with post
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "config.php";
    //fetch hidden variables from super global variable $_POST
    foreach ($_POST as $key => $entry) {
        if ($key == "current_m_chart") {
            $update_m_chart = trim($entry);
        }
        if ($key == "id") {
            $menu_id = trim($entry);
        }

    }

    //If Button Add Item was pressed
    if(isset($_POST['add'])) {
        //If zero item in cart Create row else Update row
        if($update_m_chart == 0){
            $create_row = true;
        }else{
            $update_row = true;
        }
        $update_m_chart++;
    }

    //If Button Remove Item was pressed
    if(isset($_POST['remove'])) {
        //If only one item in cart Delete row else Update row
        if($update_m_chart == 1){
            $delete_row = true;
        }else{
            $update_row = true;
        }
        $update_m_chart-=1;
    }

    $sql ="";
    //prepare a select statement depending on boolean values
    if($update_row){
        //we only want to opdate cart table in our DB
        $sql = "UPDATE cart SET cartnumber='".$update_m_chart ."' WHERE  m_id=" . $menu_id;
    }
    if($delete_row){
        //we want to delete row in cart table in our DB
        $sql = "DELETE FROM cart WHERE m_id=" . $menu_id;
    }
    if($create_row){
        //we want to insert new row in cart table in our DB
        $sql = "INSERT INTO cart(id, cartnumber, m_id) VALUES ('null','" .$update_m_chart. "','". $menu_id. "')";
    }

    if($stmt = mysqli_prepare($link, $sql)){
        if(!mysqli_stmt_execute($stmt)){
            echo "Oops! something went wrong. Please try again later.";
            exit();
        }
    }
}
//include our header php it is placed here because we need to update the cart table in the BD before to make the cart accurate
include('view/header.php');
?>

<section class="middel">
    <div class="menu_container">

        <?php // Generate the HTML for the page

        // Attempt select query execution
        $sql = "SELECT * FROM menu";
        if($result1 = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result1) > 0){
                //for each row in our result we will go through the associative array
                while($row = mysqli_fetch_array($result1)) {
                    $m_id = $row['id'];
                    $m_name = $row['name'];
                    $m_img = $row['img'];
                    $m_price = $row['price'];

                    //Find how often item is added to cart.
                    $m_cart = "";
                    // Attempt select query execution to see if menu item is in the cart table
                    $sql = "SELECT cartnumber FROM cart WHERE m_id=".$m_id;
                    $in_cart= false;
                    if($result2 = mysqli_query($link, $sql)){
                        while($row = mysqli_fetch_array($result2)) {
                            $m_cart = $row['cartnumber'];
                            $in_cart= true;
                        }
                    }
                    //if menu item not in cart then m_cart = 0;
                    if(!$in_cart){
                        $m_cart=0;
                    }
                    //Here we generate the content to our HTML all the Menu Items. One by one through the iterations.
                    echo "<div class='menuItem'><h4>".$m_name ."</h4><img src=" ."\"". $m_img ."\"". "alt='image of menu item' class='menuImg' onclick='addCart('menuItem1');'/>
                            <p class='p_menu'><h2> kr</h2><h2 id='menuItem1'>" . $m_price . "</h2><p class='p_item_cart'>Item in cart: " . $m_cart . "</p></p>
                         <div class='buttons'><form method='post' action='menu.php'>
                         <input type='hidden' name='id' value='".$m_id."'/>
                         <input type='hidden' name='current_m_chart' value='".$m_cart."' />";

                    //If the item is not already added to the cart we do not want the remove button to be visible
                    if($m_cart==0){
                        echo "<button name='remove' style='visibility: hidden' class='action_btn remove_button' type='submit' value='Cancel'>Remove item</button>";
                    }else {
                        echo "<button name='remove' class='action_btn remove_button' type='submit' value='Cancel'>Remove item</button>";
                    }
                    //add the add item button.
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

//include our footer
<?php include('view/footer.php');?>


