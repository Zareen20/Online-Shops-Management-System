<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>E-Commerce Website Project</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- helper class css -->
    <link href="assets/css/helper.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/skin-default.css" rel="stylesheet" id="galio-skin">
</head>

<body>

    <!-- color switcher start -->
    <div class="color-switcher">
        <div class="color-switcher-inner">
            <div class="switcher-icon">
                <i class="fa fa-cog fa-spin"></i>
            </div>

            <div class="switcher-panel-item">
                <h3>Color Schemes</h3>
                <ul class="nav flex-wrap colors">
                    <li class="default active" data-color="default" data-toggle="tooltip" data-placement="top" title="Red"></li>
                    <li class="green" data-color="green" data-toggle="tooltip" data-placement="top" title="Green"></li>
                    <li class="soft-green" data-color="soft-green" data-toggle="tooltip" data-placement="top" title="Soft-Green"></li>
                    <li class="sky-blue" data-color="sky-blue" data-toggle="tooltip" data-placement="top" title="Sky-Blue"></li>
                    <li class="orange" data-color="orange" data-toggle="tooltip" data-placement="top" title="Orange"></li>
                    <li class="violet" data-color="violet" data-toggle="tooltip" data-placement="top" title="Violet"></li>
                </ul>
            </div>

            <div class="switcher-panel-item">
                <h3>Layout Style</h3>
                <ul class="nav layout-changer">
                    <li><button class="btn-layout-changer active" data-layout="wide">Wide</button></li>
                    <li><button class="btn-layout-changer" data-layout="boxed">Boxed</button></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Pattern</h3>
                <ul class="nav flex-wrap bgbody-style bg-pattern">
                    <li><img src="assets/img/bg-panel/bg-pettern/1.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/2.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/3.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/4.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/5.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/6.png" alt="Pettern"></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Image</h3>
                <ul class="nav flex-wrap bgbody-style bg-img">
                    <li><img src="assets/img/bg-panel/bg-img/01.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/02.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/03.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/04.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/05.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/06.jpg" alt="Images"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- color switcher end -->

    <div class="wrapper">

        <!-- header area start -->
        <header>

            <!-- header top start -->
            <div class="header-top-area bg-gray text-center text-md-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="header-call-action">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    info@galio.com
                                </a>
                                <a href="#">
                                    <i class="fa fa-phone"></i>
                                    +8801711 223344
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="header-top-right float-md-right float-none">
                                <nav>
                                    <ul>                                        
                                        <li>
                                       <strong> <?php echo $username;?> </strong>| <a href="admin/logout.php">Log Out</a>
                                        </li>
                                        <li>
                                            <a href="#">my wishlist</a>
                                        </li>
                                        <li>
                                            <a href="#">my cart</a>
                                        </li>
                                        <li>
                                            <a href="#">checkout</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle start -->
            <div class="header-middle-area pt-20 pb-20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand-logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo.png" alt="brand logo">
                                </a>
                            </div>
                        </div> <!-- end logo area -->
                        <div class="col-lg-9">
                            <div class="header-middle-right">
                                <div class="header-middle-shipping mb-20">
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Working time</h5>
                                            <span>Sat-Thus: 8.00 - 18.00</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>free shipping</h5>
                                            <span>On order over BDT. 2000</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>money back 100%</h5>
                                            <span>Within 30 Days after delivery</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                </div>
                                <div class="header-middle-block">
                                    <div class="header-middle-searchbox">
                                        <input type="text" placeholder="Search...">
                                        <button class="search-btn"><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="header-mini-cart">
                                        <div class="mini-cart-btn">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="cart-notification">0</span>
                                        </div>
                                        <div class="cart-total-price">
                                            <span>total</span>
                                            BDT. 00.00
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header middle end -->

            <!-- main menu area start -->
            <div class="main-header-wrapper bdr-bottom1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header-inner">
                                <div class="category-toggle-wrap">
                                    <div class="category-toggle">
                                        category
                                        <div class="cat-icon">
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <nav class="category-menu hm-1">
                                        <ul>
                                            
                                            <li class="menu-item-has-children"><a href="#"><i
                                                class="fa fa-desktop"></i>Computer</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu">
                                            <li class="menu-item-has-children">
                                                <a href="#">Desktop</a>
                                                <ul>
                                                    <li><a href="desktop_hp.php">HP</a></li>
                                                    <li><a href="desktop_dell.php">Dell</a></li>
                                                    <li><a href="desktop_asus.php">ASUS</a></li>                                                   
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Laptop</a>
                                                <ul>
                                                    <li><a href="laptop_hp.php">HP</a></li>
                                                    <li><a href="laptop_dell.php">Dell</a></li>
                                                    <li><a href="laptop_lenovo.php">Lenovo</a></li>                                                  
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Gaming PC</a>
                                                <ul>
                                                    <li><a href="ryzen.php">Ryzen PC</a></li>
                                                    <li><a href="intel.php">Intel PC</a></li>
                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>

                                            <li class="menu-item-has-children"><a href="#"><i
                                                class="fa fa-tablet"></i> Mobile</a>
                                        <!-- Mega Category Menu Start -->
                                        <ul class="category-mega-menu">
                                            <li class="menu-item-has-children">
                                                <a href="#">Smartphone</a>
                                                <ul>
                                                    <li><a href="smartphone_samsung.php">Samsung</a></li>
                                                    <li><a href="smartphone_xiaomi.php">Xiaomi</a></li>
                                                    <li><a href="smartphone_vivo.php">Vivo</a></li>                                                   
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Feature Phone</a>
                                                <ul>
                                                <li><a href="feature_samsung.php">Samsung</a></li>
                                                <li><a href="feature_symphony.php">Symphony</a></li>
                                                <li><a href="feature_nokia.php">Nokia</a></li>                                             
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Tabs</a>
                                                <ul>
                                                <li><a href="tab_samsung.php">Samsung</a></li>
                                                </ul>
                                            </li>
                                        </ul><!-- Mega Category Menu End -->
                                    </li>
                                            
                                           
                                    <li class="menu-item-has-children"><a href="#"><i
                                        class="fa fa-camera"></i>Camera</a>
                                <!-- Mega Category Menu Start -->
                                <ul class="category-mega-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">DSLR Camera</a>
                                        <ul>
                                            <li><a href="dslr_canon.php">Canon</a></li>
                                            <li><a href="dslr_nikon.php">Nikon</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Digital Camera</a>
                                        <ul>
                                            <li><a href="digital_canon.php">Canon</a></li>
                                            <li><a href="digital_sony.php">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Action Camera</a>
                                        <ul>
                                        <li><a href="action_gopro.php">GOPRO</a></li>
                                            <li><a href="action_eken.php">EKEN</a></li>                                         
                                        </ul>
                                    </li>
                                </ul><!-- Mega Category Menu End -->
                            </li>

                                            
                            <li class="menu-item-has-children"><a href="#"><i
                                class="fa fa-clock-o"></i>Watch</a>
                        <!-- Mega Category Menu Start -->
                        <ul class="category-mega-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Smart Watch</a>
                                <ul>
                                    <li><a href="smart_apple.php">Apple</a></li>
                                    <li><a href="smart_xiaomi.php">Xiaomi</a></li>
                                    <li><a href="smart_huawei.php">Huawei</a></li>                                    
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Digital Watch</a>
                                <ul>
                                    <li><a href="digital_naviforce.php">Naviforce</a></li>
                                    <li><a href="digital_curren.php">CurrenBD</a></li>
                                    <li><a href="digital_louisewill.php">LouiseWill</a></li>                                   
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Quartz Watch</a>
                                <ul>
                                    <li><a href="quartz_titan.php">Titan</a></li>
                                    <li><a href="quartz_naviforce.php">Naviforce</a></li>
                                    <li><a href="quartz_curren.php">CurrenBD</a></li>                                    
                                </ul>
                            </li>
                        </ul><!-- Mega Category Menu End -->
                    </li>

											
                    <li class="menu-item-has-children"><a href="#"><i
                        class=""></i>Accessories</a>
                <!-- Mega Category Menu Start -->
                <ul class="category-mega-menu">
                    <li class="menu-item-has-children">
                        <a href="#">Computer</a>
                        <ul>
                            <li><a href="computer_heaphone.php">Headphone</a></li>
                            <li><a href="computer_keyboard.php">Keyboard</a></li>
                            <li><a href="computer_mouse.php">Mouse</a></li>                           
                        </ul>
                    </li>
                    
                </ul><!-- Mega Category Menu End -->
            </li>

                                            <li><a href="gadget.php">Gadget</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="index.php">Home</a></li>
                                            <li><a href="#">Customer Care</a></li>
                                            <li><a href="#">Digital Service</a></li>
                                            <li><a href="#">Best Mall</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main menu area end -->

        </header>
        <!-- header area end -->

        <!-- hero slider start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-wrapper-area">
                        <div class="hero-slider-active hero__1 slick-dot-style hero-dot">
                            <div class="single-slider" style="background-image: url(assets/img/slider/slider11_bg.jpg);">
                                <div class="container p-0">
                                    <div class="slider-main-content">
                                        <div class="slider-content-img">
                                            <img src="assets/img/slider/slider11_lable1.png" alt="">
                                            <img src="assets/img/slider/slider11_lable2.png" alt="">
                                            <img src="assets/img/slider/slider11_lable3.png" alt="">
                                        </div>
                                        <div class="slider-text">
                                            <div class="slider-label">
                                                <img src="assets/img/slider/slider11_lable4.png" alt="">
                                            </div>
                                            <h1>headphones az12</h1>
                                            <p>Order Now</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slider" style="background-image: url(assets/img/slider/slider12_bg.jpg);">
                                <div class="container p-0">
                                    <div class="slider-main-content">
                                        <div class="slider-content-img">
                                            <img src="assets/img/slider/slider11_lable1.png" alt="">
                                            <img src="assets/img/slider/slider11_lable2.png" alt="">
                                            <img src="assets/img/slider/slider11_lable3.png" alt="">
                                        </div>
                                        <div class="slider-text">
                                            <div class="slider-label">
                                                <img src="assets/img/slider/slider11_lable4.png" alt="">
                                            </div>
                                            <h1>Samsung s90</h1>
                                            <p>Order Now</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero slider end -->

        <!-- home banner area start -->
        <div class="banner-area mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 order-1">
                        <div class="img-container img-full fix imgs-res mb-sm-30">
                            <a href="#">
                                <img src="assets/img/banner/banner_left.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 order-sm-3">
                        <div class="img-container img-full fix mb-30">
                            <a href="#">
                                <img src="assets/img/banner/banner_static_top1.jpg" alt="">
                            </a>
                        </div>
                        <div class="img-container img-full fix mb-30">
                            <a href="#">
                                <img src="assets/img/banner/banner_static_top2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 order-2 order-md-3">
                        <div class="img-container img-full fix">
                            <a href="#">
                                <img src="assets/img/banner/banner_static_top3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home banner area end -->

        <!-- page wrapper start -->
        <div class="page-wrapper pt-6 pb-28 pb-md-6 pb-sm-6 pt-xs-36">
            <div class="container">
                <div class="row">
                    <!-- start home sidebar -->
                    <div class="col-lg-3">
                        <div class="home-sidebar">
                            <!-- hot deals area start -->
                            <div class="main-sidebar hot-deals-wrap mb-30">
                                <div class="section-title-2 d-flex justify-content-between mb-28">
                                    <h3>hot deals</h3>
                                    <div class="slick-append"></div>
                                </div> <!-- section title end -->
                                <div class="deals-carousel-active slick-padding slick-arrow-style">
                                    <!-- product single item start -->
                                    <div class="product-item fix">
                                        <div class="product-thumb">
                                            <a href="#">
                                                <img src="assets/img/product/product-img7.jpg" class="img-pri" alt="">
                                            </a>
                                            <div class="product-label">
                                                <span>hot</span>
                                            </div>
                                            <div class="product-action-link">                                                
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                        class="fa fa-refresh"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="#">Digital Watch</a></h4>
                                            <div class="pricebox">
                                                <span class="regular-price">BDT. 30000</span>
                                                <div class="ratings">
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <div class="pro-review">
                                                        <span>1 review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product single item end -->
                                
                                </div>
                            </div>
                            <!-- hot deals area end -->

                            <!-- best seller area start -->
                            <div class="main-sidebar category-wrapper mb-24">
                                <div class="section-title-2 d-flex justify-content-between mb-28">
                                    <h3>best seller</h3>
                                    <div class="category-append"></div>
                                </div> <!-- section title end -->
                                <div class="category-carousel-active row" data-row="4">
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="#">
                                                    <img src="assets/img/product/product-img1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="#">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <div class="pro-review">
                                                        <span>1 review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="#">
                                                    <img src="assets/img/product/product-img2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="#">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <div class="pro-review">
                                                        <span>1 review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="#">
                                                    <img src="assets/img/product/product-img3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="#">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <div class="pro-review">
                                                        <span>1 review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="#">
                                                    <img src="assets/img/product/product-img4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="#">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <div class="pro-review">
                                                        <span>1 review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="#">
                                                    <img src="assets/img/product/product-img5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="#">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <div class="pro-review">
                                                        <span>1 review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="#">
                                                    <img src="assets/img/product/product-img6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="#">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <div class="pro-review">
                                                        <span>1 review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="#">
                                                    <img src="assets/img/product/product-img10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="#">simple Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <div class="pro-review">
                                                        <span>1 review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="#">
                                                    <img src="assets/img/product/product-img12.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="#">external Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $140.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$160.00</del>
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <div class="pro-review">
                                                        <span>1 review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                </div>
                            </div>
                            <!-- best seller area end -->

                            <!-- blog area start -->
                            <div class="main-sidebar blog-area mb-24">
                                <div class="section-title-2 d-flex justify-content-between mb-28">
                                    <h3>Latest News</h3>
                                    <div class="category-append"></div>
                                </div> <!-- section title end -->
                                <!-- blog wrapper start -->
                                <div class="blog-carousel-active">
                                    <div class="blog-item">
                                        <div class="blog-thumb img-full fix">
                                            <a href="#">
                                                <img src="assets/img/blog/img_blog1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <h3><a href="#">post format audio</a></h3>
                                            <div class="blog-meta">
                                                <span class="posted-author">by: admin</span>
                                                <span class="post-date">25 Nov, 2018</span>
                                            </div>
                                            <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa
                                                posuere ac. Quisque dapibus, est ac...</p>
                                        </div>
                                        <a href="#">read more <i class="fa fa-long-arrow-right"></i></a>
                                    </div> <!-- end single blog item -->
                                    <div class="blog-item">
                                        <div class="blog-thumb img-full fix">
                                            <a href="#">
                                                <img src="assets/img/blog/img_blog2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <h3><a href="#">post format image</a></h3>
                                            <div class="blog-meta">
                                                <span class="posted-author">by: admin</span>
                                                <span class="post-date">25 Nov, 2018</span>
                                            </div>
                                            <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa
                                                posuere ac. Quisque dapibus, est ac...</p>
                                        </div>
                                        <a href="#">read more <i class="fa fa-long-arrow-right"></i></a>
                                    </div> <!-- end single blog item -->
                                </div>
                                <!-- blog wrapper end -->
                            </div>
                            <!-- blog area end -->

                            <!-- testimonial area start -->
                            <div class="main-sidebar testimonial-area pb-sm-70">
                                <div class="section-title-2 mb-28">
                                    <h3>Customer Reviews</h3>
                                </div> <!-- section title end -->
                                <div class="testimonial-carousel-active slick-dot-style">
                                    <div class="testimonial-item text-center">
                                        <div class="testimonial-thumb">
                                            <img src="assets/img/testimonial/team_member1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-content">
                                            <h3><a href="#">Elizabeth Taylor</a></h3>
                                            <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu
                                                aliquam eu, luctus vehicula velit. Nam eget tortor ut felis fermentum
                                                sodales ac eu lacus</p>
                                        </div>
                                    </div> <!-- end single testimonial item -->
                                    <div class="testimonial-item text-center">
                                        <div class="testimonial-thumb">
                                            <img src="assets/img/testimonial/team_member2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-content">
                                            <h3><a href="#">Elizabeth Taylor</a></h3>
                                            <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu
                                                aliquam eu, luctus vehicula velit. Nam eget tortor ut felis fermentum
                                                sodales ac eu lacus</p>
                                        </div>
                                    </div> <!-- end single testimonial item -->
                                    <div class="testimonial-item text-center">
                                        <div class="testimonial-thumb">
                                            <img src="assets/img/testimonial/team_member3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-content">
                                            <h3><a href="#">Elizabeth Taylor</a></h3>
                                            <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu
                                                aliquam eu, luctus vehicula velit. Nam eget tortor ut felis fermentum
                                                sodales ac eu lacus</p>
                                        </div>
                                    </div> <!-- end single testimonial item -->
                                </div>
                            </div>
                            <!-- testimonial area end -->

                        </div>
                    </div>
                    <!-- end home sidebar -->

                    <div class="col-lg-9">
                        <!-- featured category area start -->
                        <div class="feature-category-area mt-md-70">
                            <div class="section-title mb-30">
                                <div class="title-icon">
                                    <i class="fa fa-bookmark"></i>
                                </div>
                                <h3>featured</h3>
                            </div> <!-- section title end -->
                            <!-- featured category start -->
                            <div class="featured-carousel-active slick-padding slick-arrow-style">
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/img/product/product-img1.jpg" class="img-pri" alt="">
                                            <img src="assets/img/product/product-img2.jpg" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>hot</span>
                                        </div>
                                        <div class="product-action-link">                                            
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">affiliate product</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$90.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/img/product/product-img3.jpg" class="img-pri" alt="">
                                            <img src="assets/img/product/product-img4.jpg" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>hot</span>
                                        </div>
                                        <div class="product-action-link">                                            
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">simple product 01</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$120.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/img/product/product-img5.jpg" class="img-pri" alt="">
                                            <img src="assets/img/product/product-img6.jpg" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>hot</span>
                                        </div>
                                        <div class="product-action-link">                                            
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">vertual product 05</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$60.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/img/product/product-img7.jpg" class="img-pri" alt="">
                                            <img src="assets/img/product/product-img8.jpg" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>hot</span>
                                        </div>
                                        <div class="product-action-link">                                            
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">grouped product</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$10.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/img/product/product-img9.jpg" class="img-pri" alt="">
                                            <img src="assets/img/product/product-img10.jpg" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>hot</span>
                                        </div>
                                        <div class="product-action-link">                                            
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">simple product 10</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">BDT. 20000</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/img/product/product-img11.jpg" class="img-pri" alt="">
                                            <img src="assets/img/product/product-img12.jpg" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>hot</span>
                                        </div>
                                        <div class="product-action-link">                                            
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">affiliate product</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$70.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                            </div>
                            <!-- featured category end -->
                        </div>
                        <!-- featured category area end -->

                        <!-- banner statistic start -->
                        <div class="banner-statistic pt-28 pb-36">
                            <div class="img-container fix img-full">
                                <a href="#">
                                    <img src="assets/img/banner/banner_static1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- banner statistic end -->

                        <!-- featured category area start -->
                        <div class="feature-category-area">
                            <div class="section-title mb-30">
                                <div class="title-icon">
                                    <i class="fa fa-flask"></i>
                                </div>
                                <h3>New Arrivals</h3>
                            </div> <!-- section title end -->
                            <!-- featured category start -->
                            <div class="featured-carousel-active slick-padding slick-arrow-style">
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/img/product/product-img1.jpg" class="img-pri" alt="">
                                            <img src="assets/img/product/product-img2.jpg" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                        <div class="product-action-link">                                            
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">vertual product 01</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$70.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/img/product/product-img3.jpg" class="img-pri" alt="">
                                            <img src="assets/img/product/product-img4.jpg" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                        <div class="product-action-link">                                            
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">simple product 02</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$100.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/img/product/product-img5.jpg" class="img-pri" alt="">
                                            <img src="assets/img/product/product-img6.jpg" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                        <div class="product-action-link">                                            
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">affiliate product</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$60.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/img/product/product-img7.jpg" class="img-pri" alt="">
                                            <img src="assets/img/product/product-img8.jpg" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                        <div class="product-action-link">                                            
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">trendy product 03</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$50.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/img/product/product-img9.jpg" class="img-pri" alt="">
                                            <img src="assets/img/product/product-img10.jpg" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                        <div class="product-action-link">                                            
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">simple product 20</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$80.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                                <!-- product single item start -->
                                <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/img/product/product-img11.jpg" class="img-pri" alt="">
                                            <img src="assets/img/product/product-img12.jpg" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                        <div class="product-action-link">                                            
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">grouped product</a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price">$70.00</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product single item end -->
                            </div>
                            <!-- featured category end -->
                        </div>
                        <!-- featured category area end -->

                        <!-- banner statistic start -->
                        <div class="banner-statistic pt-28 pb-30 pb-sm-0">
                            <div class="row">
                                <div class="col-lg-7 col-md-7">
                                    <div class="img-container fix img-full mb-sm-30">
                                        <a href="#">
                                            <img src="assets/img/banner/banner_static2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="img-container fix img-full mb-sm-30">
                                        <a href="#">
                                            <img src="assets/img/banner/banner_static3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- banner statistic end -->

                        <!-- category features area start -->
                        <div class="category-feature-area">
                            <div class="row">
                                <!-- New Products area start -->
                                <div class="col-lg-4">
                                    <div class="category-wrapper mb-md-24 mb-sm-24">
                                        <div class="section-title-2 d-flex justify-content-between mb-28">
                                            <h3>New Products</h3>
                                            <div class="category-append"></div>
                                        </div> <!-- section title end -->
                                        <div class="category-carousel-active row" data-row="4">
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">Virtual Product 01</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $150.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del></del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">grouped Product</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $100.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del></del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">simple Product 05</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $155.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$160.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">demandable Product</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $210.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$240.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img5.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">Virtual Product 01</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $150.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$180.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">simple Product 12</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $150.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$180.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img7.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">Virtual Product 01</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $150.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$180.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img8.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">grouped Product</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $90.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$115.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                        </div>
                                    </div>
                                </div>
                                <!-- New Products area end -->
                                <!-- Most viewed area start -->
                                <div class="col-lg-4">
                                    <div class="category-wrapper mb-md-24 mb-sm-24">
                                        <div class="section-title-2 d-flex justify-content-between mb-28">
                                            <h3>Most viewed</h3>
                                            <div class="category-append"></div>
                                        </div> <!-- section title end -->
                                        <div class="category-carousel-active row" data-row="4">
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img14.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">simple Product 06</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $190.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$210.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img13.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">affiliate Product</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $45.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$650.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img12.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">grouped Product</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $120.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$170.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img10.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">Virtual Product 01</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $180.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del></del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img9.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">external Product</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $150.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$180.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img8.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">Virtual Product 01</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $150.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$180.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">download Product</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $150.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$180.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img5.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">Virtual Product 01</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $150.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$180.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Most viewed area end -->
                                <!-- Most viewed area start -->
                                <div class="col-lg-4">
                                    <div class="category-wrapper mb-md-24 mb-sm-24">
                                        <div class="section-title-2 d-flex justify-content-between mb-28">
                                            <h3>hot sale</h3>
                                            <div class="category-append"></div>
                                        </div> <!-- section title end -->
                                        <div class="category-carousel-active row" data-row="4">
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">Virtual Product 01</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $120.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$150.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img15.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">grouped Product</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $160.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del></del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img11.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">download Product</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $140.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$160.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img16.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">simple Product 01</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $80.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$100.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img15.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">affiliate Product</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $120.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del></del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">external Product</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $130.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$140.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img13.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">Virtual Product 01</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $150.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$180.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="#">
                                                            <img src="assets/img/product/product-img3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="#">variable Product 01</a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                                $70.00
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$90.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Most viewed area end -->
                            </div>
                        </div>
                        <!-- category features area end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- page wrapper end -->


        <!-- footer area start -->
        <footer>
            <!-- footer top start -->
            <div class="footer-top bg-black pt-14 pb-14">
                <div class="container">
                    <div class="footer-top-wrapper">
                        <div class="newsletter__wrap">
                            <div class="newsletter__title">
                                <div class="newsletter__icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="newsletter__content">
                                    <h3>sign up for newsletter</h3>
                                    <p>Duis autem vel eum iriureDuis autem vel eum</p>
                                </div>
                            </div>
                            <div class="newsletter__box">
                                <form id="mc-form">
                                    <input type="email" id="mc-email" autocomplete="off" placeholder="Email">
                                    <button id="mc-submit">subscribe!</button>
                                </form>
                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                        <div class="social-icons">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer top end -->

            <!-- footer main start -->
            <div class="footer-widget-area pt-40 pb-38 pb-sm-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>contact us</h4>
                                </div>
                                <div class="widget-body">
                                    <ul class="location">
                                        <li><i class="fa fa-envelope"></i>support@galio.com</li>
                                        <li><i class="fa fa-phone"></i>+8801711 223344</li>
                                        <li><i class="fa fa-map-marker"></i>Address: Tejgaon, Dhaka-1208</li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>my account</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">my account</a></li>
                                        <li><a href="#">my cart</a></li>
                                        <li><a href="#">checkout</a></li>
                                        <li><a href="#">my wishlist</a></li>
                                        <li><a href="#">login</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>short code</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">gallery</a></li>
                                        <li><a href="#">accordion</a></li>
                                        <li><a href="#">carousel</a></li>
                                        <li><a href="#">map</a></li>
                                        <li><a href="#">tab</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>product tags</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">computer</a></li>
                                        <li><a href="#">camera</a></li>
                                        <li><a href="#">smart phone</a></li>
                                        <li><a href="#">watch</a></li>
                                        <li><a href="#">tablet</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                    </div>
                </div>
            </div>
            <!-- footer main end -->

            <!-- footer bootom start -->
            <div class="footer-bottom-area bg-gray pt-20 pb-20">
                <div class="container">
                    <div class="footer-bottom-wrap">
                        <div class="copyright-text">
                            <p><a href="#">&copy; Brac university</a> | <a href="admin/admin/index.php">Admin</a></p>
                        </div>
                        <div class="payment-method-img">
                            <img src="assets/img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bootom end -->

        </footer>
        <!-- footer area end -->

    </div>


    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider slick-arrow-style_2 mb-20">
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img1.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img2.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img3.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img4.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img5.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-padding2 slick-arrow-style_2">
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img1.jpg"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img2.jpg"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img3.jpg"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img4.jpg"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img5.jpg"
                                            alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des mt-md-34 mt-sm-34">
                                    <h3><a href="#">external product 12</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>                                                                                                 
                                    <div class="quantity-cart-box d-flex align-items-center mt-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <div class="action_link">
                                            <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->



    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- Jquery Min Js -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper Min Js -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap Min Js -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins Js-->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Active Js -->
    <script src="assets/js/main.js"></script>
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    <script src="assets/js/switcher.js"></script>
</body>



</html>