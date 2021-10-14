<?php
session_start();
require_once ("component.php");
require_once ("CreateDb.php");
$db = new CreateDb("productdb", "procuttb");
if (isset($_POST['remove'])){
    if ($_GET['action'] == 'remove'){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <link rel="stylesheet" href="cart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Welcome to clothes store, Sample Headline">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cart</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.9.3, nicepage.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">





    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">





    <script type="application/ld+json">{
            "@context": "#",
            "@type": "Organization",
            "name": "Devs store",
            "url": "index.html",
            "logo": "images/Devsshoplogowhitebcg-2.jpg"
        }</script>
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.php">
    <meta property="og:url" content="index.html">
</head>
<body class="u-body"><header class="u-clearfix u-header u-header" id="sec-237c"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
            <img src="images/Devsshoplogowhitebcg-2.jpg" class="u-logo-image u-logo-image-1" data-image-width="139.7057">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
                            </symbol>
                        </defs></svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" style="padding: 10px 22px;">Home</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Men.php" target="_blank" style="padding: 10px 22px;">Men</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Women.php" target="_blank" style="padding: 10px 22px;">Women</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Kids.php" target="_blank" style="padding: 10px 22px;">Kids</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About-us.php" style="padding: 10px 22px;">About us</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Payment.php" target="_blank" style="padding: 10px 22px;">Payment</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Delivery.php" style="padding: 10px 22px;">Location</a>
                        <?php if ($_COOKIE['user'] == ''): ?>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="SignIn.php" style="padding: 10px 22px;">Sign in</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="SignUp.php">Register</a>
                                    <?php else:?>
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="SignIn.php" style="padding: 10px 22px;"><?=$_COOKIE['user']?></a>
                                    <?php endif;?>
                                </li></ul>

                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 22px;">Cart</a>
                    </li></ul>
            </div>
    </div>
    <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 20px;">Home</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Men.php" target="_blank" style="padding: 10px 20px;">Men</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Women.php" target="_blank" style="padding: 10px 20px;">Women</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Kids.php" target="_blank" style="padding: 10px 20px;">Kids</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About-us.php" style="padding: 10px 20px;">About us</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Payment.php" target="_blank" style="padding: 10px 22px;">Payment</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="SignIn.php" style="padding: 10px 20px;">Sign in</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Register</a>
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Delivery.php" style="padding: 10px 20px;">Location</a>
                                </li></ul>
                        </div>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#" style="padding: 10px 20px;">Cart <?php
                            if (isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<span id= \"cart_count\" style=\"text-align: center; padding: 0 0.9rem 0.1rem 0.9rem; border-radius: 3rem;\" class=\"text-warning bg-light\"> $count</span>";
                            }else{
                                echo "<span id= \"cart_count\" style=\"text-align: center; padding: 0 0.9rem 0.1rem 0.9rem; border-radius: 3rem;\" class=\"text-warning bg-light\"> 0</span>";
                            }
                            ?></a>
                    </li></ul>
            </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
    </div>
    </nav>
    </div></header>

    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h6>My Cart</h6>
                    <hr>

                    <?php

                    $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_name'], $row['product_image'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                    ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>$<?php echo $total; ?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6>$<?php
                                echo $total;
                                ?></h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-85c8"><div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-1">PARTNERS</h1>
        <div class="u-expanded-width u-list u-repeater u-list-1">
            <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-1">
                    <img alt="" class="u-expanded-width-xs u-image u-image-contain u-image-default u-image-1" data-image-width="1280" data-image-height="616" src="images/1280px-Lacoste_logo.svg.png">
                </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-2">
                    <img alt="" class="u-expanded-width-xs u-image u-image-contain u-image-default u-image-2" data-image-width="1280" data-image-height="153" src="images/1280px-Inditex.svg1.png">
                </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-3">
                    <img alt="" class="u-expanded-width-xs u-image u-image-contain u-image-default u-image-3" data-image-width="256" data-image-height="256" src="images/b35add678eef9e43b25e9589d9c6fbd1.png">
                </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-4">
                    <img alt="" class="u-expanded-width-xs u-image u-image-contain u-image-default u-image-4" data-image-width="1280" data-image-height="457" src="images/Logo_NIKE.svg.png">
                </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-5">
                    <img alt="" class="u-expanded-width-xs u-image u-image-contain u-image-default u-image-5" data-image-width="1280" data-image-height="820" src="images/Chanel_logo_cs.svg1.png">
                </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-6">
                    <img alt="" class="u-expanded-width-xs u-image u-image-contain u-image-default u-image-6" data-image-width="1024" data-image-height="247" src="images/logo-lamoda.png">
                </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-7">
                    <img alt="" class="u-expanded-width-xs u-image u-image-contain u-image-default u-image-7" data-image-width="246" data-image-height="300" src="images/Louis_Vuitton_logo.svg">
                </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-8">
                    <img alt="" class="u-expanded-width-xs u-image u-image-contain u-image-default u-image-8" data-image-width="1920" data-image-height="447" src="images/New_Yorker.svg.png">
                </div>
            </div>
        </div>
    </div></footer>
<section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="#" target="_blank">
        <!--<span>Devs Store</span>-->
    </a>
    <p class="u-text">
        <!--<span>created with</span>-->
    </p>
    <a class="u-link" href="#" target="_blank">
        <!--<span>Softers:))</span>-->
    </a>
</section><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px" class="u-back-to-top u-black u-icon u-icon-circle u-opacity u-opacity-85 u-spacing-15 u-text-palette-2-base" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
</body>
</html>