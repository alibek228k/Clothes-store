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
<html style="font-size: 16px;" lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Welcome to clothes store, Sample Headline">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.9.3, nicepage.com">





      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Delivery.php" target="_blank" style="padding: 10px 22px;">Location</a>

                    <?php if ($_COOKIE['user'] == ''): ?>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="SignIn.php" style="padding: 10px 22px;">Sign in</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="SignUp.php">Register</a>
                                <?php else:?>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="SignIn.php" style="padding: 10px 22px;"><?=$_COOKIE['user']?></a>
                                <?php endif;?>
</li></ul>

                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Cart.php" style="padding: 10px 22px;">Cart</a>
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
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Payment.php" target="_blank" style="padding: 10px 22px;">Payment</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#" style="padding: 10px 20px;">Sign in</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Register</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Delivery.php" target="_blank" style="padding: 10px 20px;">Location</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Cart.php" style="padding: 10px 20px;">Cart</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-grey-5 u-section-1" id="carousel_a83d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">
          <span style="font-size: 60px;"><b>Welcome to clothes store</b>
          </span>
        </h2>
        <p class="u-text u-text-2">Find what you were looking for</p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-2" src="" id="sec-da05" data-image-width="800" data-image-height="533">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">“One should either be a work of art, or wear a work of art.”<br>Oscar Wilde<br>
        </h2>
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
          <div class="u-gallery-inner u-gallery-inner-1">
            <div class="u-effect-fade u-gallery-item" data-href="Men.html" data-page-id="2029730582">
              <div class="u-back-slide" data-image-width="1050" data-image-height="1100">
                <img class="u-back-image u-expanded" src="images/mainpage-men.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-1">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item" data-href="Kids.html" data-page-id="109075111" data-target="_blank">
              <div class="u-back-slide" data-image-width="1200" data-image-height="1350">
                <img class="u-back-image u-expanded" src="images/mainpage-kids.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-2">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item" data-href="Women.html" data-page-id="53825207">
              <div class="u-back-slide" data-image-width="1000" data-image-height="686">
                <img class="u-back-image u-expanded" src="images/mainpage-women.jpg">
              </div>
              <div class="u-over-slide u-shading u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
          </div>
        </div>
        <a href="" class="u-btn u-button-style u-hover-palette-1-light-2 u-palette-3-light-3 u-btn-1">Men</a>
        <a href="" class="u-btn u-button-style u-hover-palette-1-light-1 u-palette-3-light-3 u-btn-2">Kids</a>
        <a href="" class="u-btn u-button-style u-hover-palette-1-light-2 u-palette-3-light-3 u-btn-3">Women<br>
        </a>
      </div>
    </section>
    <section id="carousel_71c5" class="u-carousel u-slide u-block-fd2e-1" data-u-ride="carousel" data-interval="5000">
      <ol class="u-absolute-hcenter u-carousel-indicators u-block-fd2e-2">
        <li data-u-target="#carousel_71c5" data-u-slide-to="0" class="u-active u-grey-30"></li>
        <li data-u-target="#carousel_71c5" data-u-slide-to="1" class="u-grey-30"></li>
        <li data-u-target="#carousel_71c5" class="u-grey-30" data-u-slide-to="2"></li>
        <li data-u-target="#carousel_71c5" class="u-grey-30" data-u-slide-to="3"></li>
        <li data-u-target="#carousel_71c5" class="u-grey-30" data-u-slide-to="4"></li>
        <li data-u-target="#carousel_71c5" class="u-grey-30" data-u-slide-to="5"></li>
        <li data-u-target="#carousel_71c5" class="u-grey-30" data-u-slide-to="6"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-align-center u-carousel-item u-clearfix u-image u-shading u-section-3-1" src="" data-image-width="960" data-image-height="532">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-title u-text-1">Classic outfits&nbsp;</h1>
            <p class="u-large-text u-text u-text-variant u-text-2">men</p>
          </div>
        </div>
        <div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-3-2" src="" data-image-width="512" data-image-height="301">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-title u-text-1">Office clothes</h1>
            <p class="u-large-text u-text u-text-variant u-text-2">women</p>
          </div>
        </div>
        <div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-3-3" src="" data-image-width="512" data-image-height="398">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-title u-text-1">Spring jackets</h1>
            <p class="u-large-text u-text u-text-variant u-text-2">kids / juniors</p>
          </div>
        </div>
        <div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-3-4" src="" data-image-width="620" data-image-height="413">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-title u-text-1">&nbsp;Summer wear</h1>
            <p class="u-large-text u-text u-text-variant u-text-2">men</p>
          </div>
        </div>
        <div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-3-5" src="" data-image-width="640" data-image-height="583">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-title u-text-1">&nbsp;summer casual </h1>
            <p class="u-large-text u-text u-text-variant u-text-2">kids / juniors</p>
          </div>
        </div>
        <div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-3-6" src="" data-image-width="1200" data-image-height="600">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-title u-text-1">Winter wear</h1>
            <p class="u-large-text u-text u-text-variant u-text-2">women</p>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-fd2e-5" href="#carousel_71c5" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-fd2e-4" href="#carousel_71c5" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-4" id="sec-8b89">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h2 class="u-text u-text-1">Follow us</h2>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-valign-bottom u-container-layout-2">
                  <img src="images/Devsshoplogo-fullscreen.jpg" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" data-image-width="500" data-image-height="500">
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8324"></use></svg><svg class="u-svg-content" viewBox="0 0 24 24" id="svg-8324"><circle cx="12" cy="12" fill="currentColor" r="12"></circle><path d="m5.491 11.74 11.57-4.461c.537-.194 1.006.131.832.943l.001-.001-1.97 9.281c-.146.658-.537.818-1.084.508l-3-2.211-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953z" fill="#fff"></path></svg></span><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-43ce"></use></svg><svg class="u-svg-content" viewBox="0 0 24 24" id="svg-43ce"><path d="m12 .5c-6.63 0-12 5.28-12 11.792 0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56 4.801-1.548 8.236-5.97 8.236-11.173 0-6.512-5.373-11.792-12-11.792z" fill="currentColor"></path></svg></span><span class="u-icon u-icon-circle u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8ed3"></use></svg><svg class="u-svg-content" viewBox="0 0 24 24" id="svg-8ed3"><linearGradient id="SVGID_1_" gradientTransform="matrix(0 -1.982 -1.844 0 -132.522 -51.077)" gradientUnits="userSpaceOnUse" x1="-37.106" x2="-26.555" y1="-72.705" y2="-84.047"><stop offset="0" stop-color="#fd5"></stop><stop offset=".5" stop-color="#ff543e"></stop><stop offset="1" stop-color="#c837ab"></stop>
</linearGradient><path d="m1.5 1.633c-1.886 1.959-1.5 4.04-1.5 10.362 0 5.25-.916 10.513 3.878 11.752 1.497.385 14.761.385 16.256-.002 1.996-.515 3.62-2.134 3.842-4.957.031-.394.031-13.185-.001-13.587-.236-3.007-2.087-4.74-4.526-5.091-.559-.081-.671-.105-3.539-.11-10.173.005-12.403-.448-14.41 1.633z" fill="url(#SVGID_1_)"></path><path d="m11.998 3.139c-3.631 0-7.079-.323-8.396 3.057-.544 1.396-.465 3.209-.465 5.805 0 2.278-.073 4.419.465 5.804 1.314 3.382 4.79 3.058 8.394 3.058 3.477 0 7.062.362 8.395-3.058.545-1.41.465-3.196.465-5.804 0-3.462.191-5.697-1.488-7.375-1.7-1.7-3.999-1.487-7.374-1.487zm-.794 1.597c7.574-.012 8.538-.854 8.006 10.843-.189 4.137-3.339 3.683-7.211 3.683-7.06 0-7.263-.202-7.263-7.265 0-7.145.56-7.257 6.468-7.263zm5.524 1.471c-.587 0-1.063.476-1.063 1.063s.476 1.063 1.063 1.063 1.063-.476 1.063-1.063-.476-1.063-1.063-1.063zm-4.73 1.243c-2.513 0-4.55 2.038-4.55 4.551s2.037 4.55 4.55 4.55 4.549-2.037 4.549-4.55-2.036-4.551-4.549-4.551zm0 1.597c3.905 0 3.91 5.908 0 5.908-3.904 0-3.91-5.908 0-5.908z" fill="#fff"></path></svg></span><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.196 112.196" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-15d3"></use></svg><svg class="u-svg-content" viewBox="0 0 112.196 112.196" x="0px" y="0px" id="svg-15d3" style="enable-background:new 0 0 112.196 112.196;"><g><circle style="fill:currentColor;" cx="56.098" cy="56.098" r="56.098"></circle><path style="fill:#FFFFFF;" d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34   c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"></path>
</g></svg></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


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