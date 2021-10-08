<?php
//Create our database connection
require_once "config.php";

//global varable that is updatet when the function is called getTotalSum
$total_sum =0;

function getTotalSum($link) {
    // Attempt select query execution
    $sql = "SELECT * FROM menu";
    if($result1 = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result1) > 0) {
            //for each row in our result we will go through the associative array
            while ($row = mysqli_fetch_array($result1)) {
                $m_id = $row['id'];
                $m_price = $row['price'];

                //Find how often item is added to cart.
                $m_cart = "";
                // Attempt select query execution to see if menu item is in the cart table
                $sql = "SELECT cartnumber FROM cart WHERE m_id=" . $m_id;
                $in_cart = false;
                if ($result2 = mysqli_query($link, $sql)) {
                    while ($row = mysqli_fetch_array($result2)) {
                        $m_cart = $row['cartnumber'];
                        $in_cart = true;
                    }
                }
                if (!$result2) {

                }
                //if menu item not in cart then m_cart = 0;
                if (!$in_cart) {
                    $m_cart = 0;
                }
                if ($in_cart) {
                    $GLOBALS['total_sum'] += ($m_price * $m_cart);
                    //https://www.php.net/manual/en/language.variables.scope.php <-- access a global varable inside a function
                }
            }
        }
    }
    return $GLOBALS['total_sum'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--This gives the browser instructions on how to control the page's dimensions and scaling.-->
    <!--following is for the icone in our cart button at our navigation bar -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!--This inserts the jquery script only if the PAGE == Draw page-->
    <?php if($page=='draw'){echo '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>';}?>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/hamburger.js" defer></script>
    <script src="js/javascript.js"></script>
    <script src="js/main-draw.js" ></script>
    <title>Burgarastova</title>
</head>

<body>
<header class="header">

    <nav class="navbar">

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

        <div>
            <ul class="nav-menu">
                <!--here php will check what page we are currently on and add class active to the menu item-->
                <li class="nav-item <?php if($page=='home'){echo' active';}?>"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item <?php if($page=='menu'){echo' active';}?>"><a href="menu.php" class="nav-link">Menu</a></li>
                <li class="nav-item <?php if($page=='contact'){echo' active';}?>"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item <?php if($page=='draw'){echo' active';}?>"><a href="draw.php" class="nav-link">Draw</a></li>
            </ul>
        </div>
    </nav>

    <div class="logo_container">
        <a class="image" href="index.php">
            <img src="img/logo.png" alt="logo Burgarastova" class="logo">
        </a>
    </div>


    <div class='buttons_nav_top'>

        <?php
        //We check if cart is empty if so we want to direct customer to menu.php else to registration.php
        $total_sum = getTotalSum($link);
        if($total_sum==0){

            echo "<a href='menu.php'>";
        }

        if($total_sum!=0){
            echo "<a href='registration.php'>";
        }
        ?>
            <button class="button_cart">
                <!--php call function to get the total sum to our cart button on top navigation-->
                <span class="button_text" id="sumPrice"><?php echo getTotalSum($link);?>kr</span>
                <span class="button_icon"><ion-icon name="bag-handle-outline"></ion-icon></span>
            </button>
        </a>
    </div>
</header>