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
            <a href="menu.php">
            <button class="button_cart">
                <span class="button_text" id="sumPrice">0.00kr</span>
                <span class="button_icon"><ion-icon name="bag-handle-outline"></ion-icon></span>
            </button>
        </a>
        </div>
    </header>