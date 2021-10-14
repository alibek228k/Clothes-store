<?php

//start session
session_start();


require_once('CreateDb.php');
require_once('component.php');

$database = new CreateDb("productdb", "procuttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'Kids.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

}else{
    $item_array = array(
            'product_id' => $_POST['product_id']
    );
    //Crate new session variable
    $_SESSION['cart'][0] = $item_array;
    print_r($_SESSION['cart']);
}
}
?>

<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--  <meta name="generator" content="Mobirise v5.3.5, ">-->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5.jpg" type="image/x-icon">
  <meta name="description" content="">

  <title>Kids</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

<!--    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Kids.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.9.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script type="application/ld+json">{
        "@context": "#",
        "@type": "Organization",
        "name": "Devs store",
        "url": "index.html",
        "logo": "images/Devsshoplogowhitebcg-2.jpg"
    }</script>
    <meta property="og:title" content="Kids">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.php">
    <meta property="og:url" content="index.html">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!--    -->
</head>
<body class="u-body"><header class="u-clearfix u-header u-header" id="sec-237c"><div class="u-clearfix u-sheet u-sheet-1">




<!--  start  -->
<!--    -->

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
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Delivery.php" target="_blank" style="padding: 10px 22px;">Location</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About-us.php" style="padding: 10px 22px;">About us</a><?php if ($_COOKIE['user'] == ''): ?>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="SignIn.php" style="padding: 10px 22px;">Sign in</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="SignUp.php">Register</a>
                                <?php else:?>
                            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="SignIn.php" style="padding: 10px 22px;"><?=$_COOKIE['user']?></a>
                                <?php endif;?>
                            </li></ul>

                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Cart.php" style="padding: 10px 22px;">Cart
                        <?php
                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id= \"cart_count\" style=\"text-align: center; padding: 0 0.9rem 0.1rem 0.9rem; border-radius: 3rem;\" class=\"text-warning bg-light\"> $count</span>";
                        }else{
                            echo "<span id= \"cart_count\" style=\"text-align: center; padding: 0 0.9rem 0.1rem 0.9rem; border-radius: 3rem;\" class=\"text-warning bg-light\"> 0</span>";
                        }
                        ?>
                    </a>
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
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#" style="padding: 10px 20px;">Sign in</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Register</a>
                                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Delivery.php" style="padding: 10px 20px;">Location</a>
                    </li></ul>
                    </div>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">Cart</a>
                    </li></ul>
                </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
    </nav>
</div></header>


<!--    -->
<!--    -->


<section class="countdown4 cid-sw2TopHQ1i mbr-fullscreen mbr-parallax-background" id="countdown4-a">

    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(68, 121, 217);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="mbr-section-title mb-5 align-center mbr-fonts-style display-2">
                    <strong>Coming Soon</strong><br><em>Summer sale<br></em><br></h3>

                <div class="countdown-cont align-center mb-5">
                    <div class="daysCountdown col-xs-3 col-sm-3 col-md-3" title="Days"></div>
                    <div class="hoursCountdown col-xs-3 col-sm-3 col-md-3" title="Hours"></div>
                    <div class="minutesCountdown col-xs-3 col-sm-3 col-md-3" title="Minutes"></div>
                    <div class="secondsCountdown col-xs-3 col-sm-3 col-md-3" title="Seconds"></div>
                    <div class="countdown" data-due-date="2021/06/1"></div>
                </div>
                <p class="mbr-text mb-5 align-center mbr-fonts-style display-7">
                    Follow us online to find out when we launch.<br><br>
                </p>


            </div>
        </div>
    </div>
</section>

<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;"><a href="https://mobirise.site/c" style="color:#aaa;"></a> </p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/countdown/jquery.countdown.min.js"></script>  <script src="assets/parallax/jarallax.min.js"></script>  <script src="assets/theme/js/script.js"></script>


<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="#" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;"> <a href="#" style="color:#aaa;"></a> </p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/countdown/jquery.countdown.min.js"></script>  <script src="assets/parallax/jarallax.min.js"></script>  <script src="assets/theme/js/script.js"></script>

</div>
</header>
<div class="container">
    <div class="row text-center py-5">
        <?php
        $result = $database->getData();
        while ($row = mysqli_fetch_assoc($result)){
            component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_discription'], $row['id']);
        }
        ?>
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

<script src="cart.js"></script>
</body>
</html>