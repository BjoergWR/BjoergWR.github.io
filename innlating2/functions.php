<?php
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
    echo $GLOBALS['total_sum'];
}





?>