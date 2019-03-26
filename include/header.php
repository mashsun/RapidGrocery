<?php
session_start();
// logout
if(isset($_POST['cus_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/logo_icon.ico">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Rapid Grocery</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                    <div class="menu-social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                    <a class="btns" href="mailto:support@rapidgrocery.com">support@rapidgrocery.com</a>

                    <a class="icons" href="mailto:support@rapidgrocery.com">
                        <span class="lnr lnr-envelope"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="menu-has-children"><a href="shop.php">Shop</a>
                        <ul>
                            <li><a href="shop.php#Bakery">Bakery</a></li>
                            <li><a href="shop.php#Dairy">Dairy</a></li>
                            <li><a href="shop.php#Drinks">Drinks</a></li>
                            <li><a href="shop.php#Fresh">Fresh Products</a></li>
                            <li><a href="shop.php#Frozen">Frozen Products</a></li>
                            <li><a href="shop.php#Meat">Meat</a></li>
                            <li><a href="shop.php#Seafood">Seafood</a></li>
                            <li><a href="shop.php#Snacks">Snacks</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><?php if(isset($_SESSION["cus_email"])){ ?>
                       <form method="post" action=""><input type="submit" value="Logout" name="cus_logout"></form>
                        <?php } else { ?>
                        <a href="login.php">Login</a>
                        <?php } ?>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
