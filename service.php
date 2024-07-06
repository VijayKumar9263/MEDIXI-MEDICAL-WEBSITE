<?php
session_start();
$is_logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Medixi - Medical and Health Care</title>
    <meta name="author" content="Vecuro">
    <meta name="description" content="Medixi - Medical and Health Care HTML Template">
    <meta name="keywords" content="Medixi - Medical and Health Care HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--==============================
	   Google Web Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Quicksand:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Layerslider -->
    <link rel="stylesheet" href="assets/css/layerslider.min.css">
    <!-- jQuery DatePicker -->
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="">


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->




    <!--==============================
     Preloader
  ==============================-->
  <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <svg width="88px" height="108px" viewBox="0 0 54 64">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path class="beat-loader" d="M0.5,38.5 L16,38.5 L19,25.5 L24.5,57.5 L31.5,7.5 L37.5,46.5 L43,38.5 L53.5,38.5" id="Path-2" stroke-width="2"></path>
                </g>
            </svg>
        </div>
    </div>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.php"><img src="assets/img/logo-mobile.svg" alt="Medixi"></a>
            </div>
            <form action="#" class="mobile-menu-form">
                <input type="text" class="form-control" placeholder="Search...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
            <div class="vs-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="service.html">Services</a>
                        <ul class="sub-menu">
                            <li><a href="service.php">Services</a></li>
                            <li><a href="service-details.php">Services Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="appointment.php">Appointment</a>
                    </li>
                        </ul>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper d-none d-lg-block  ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget  ">
                <div class="vs-widget-about">
                    <div class="footer-logo">
                        <img src="assets/img/logo.svg" alt="logo">
                    </div>
                    <p class="footer-text1">At Medixi, we prioritize your health with expert care and compassion. Our commitment is to provide comprehensive, personalized medical services using advanced technology, ensuring your well-being is our top priority. Trust us to deliver excellence in healthcare, tailored to your needs, every step of the way.</p>
                    <div class="footer-social3">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.google.com/"><i class="fab fa-google"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget footer-widget   ">
                <h3 class="widget_title">Visiting Hours</h3>
                <div class="footer-table">
                    <table>
                        <tr>
                            <td>Mon - Fri:</td>
                            <td>8:00 am - 8:00 pm</td>
                        </tr>
                        <tr>
                            <td>Saturday:</td>
                            <td>9:00 am - 6:00 pm</td>
                        </tr>
                        <tr>
                            <td>Sunday:</td>
                            <td>9:00 am - 6:00 pm</td>
                        </tr>
                    </table>
                </div>
                <div class="address-line">
                    <i class="far fa-map-marker-alt text-theme fs-md"></i>
                    <a href="#" class="text-reset fs-md">374 William S Canning Blvd, Fall River MA 2721</a>
                </div>
            </div>
            <div class="widget footer-widget  ">
                <h4 class="widget_title">Gallery Posts</h4>
                <div class="footer-gallery">
                    <div class="gal-item">
                        <a href="#"><img src="assets/img/widget/gal-1-1.jpg" alt="Gallery Image" class="w-100"></a>
                    </div>
                    <div class="gal-item">
                        <a href="#"><img src="assets/img/widget/gal-1-2.jpg" alt="Gallery Image" class="w-100"></a>
                    </div>
                    <div class="gal-item">
                        <a href="#"><img src="assets/img/widget/gal-1-3.jpg" alt="Gallery Image" class="w-100"></a>
                    </div>
                    <div class="gal-item">
                        <a href="#"><img src="assets/img/widget/gal-1-4.jpg" alt="Gallery Image" class="w-100"></a>
                    </div>
                    <div class="gal-item">
                        <a href="#"><img src="assets/img/widget/gal-1-5.jpg" alt="Gallery Image" class="w-100"></a>
                    </div>
                    <div class="gal-item">
                        <a href="#"><img src="assets/img/widget/gal-1-6.jpg" alt="Gallery Image" class="w-100"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Popup Search Box
    ============================== -->
    <div class="popup-search-box d-none d-lg-block  ">
        <button class="searchClose border-theme text-theme"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
        Header Area
    ==============================-->
    <header class="header-wrapper header-layout1">
        <!-- Header Top -->
        <div class="header-top bg-title py-2 d-none d-md-block">
            <div class="container container-style1 py-1">
                <div class="row justify-content-center justify-content-xl-between">
                    <div class="col-auto">
                        <ul class="header-top-info list-unstyled m-0">
                            <li><i class="far fa-envelope"></i><a href="mailto:support@hospital.com" class="text-reset">support@hospital.com</a></li>
                            <li><i class="far fa-map-marker-alt"></i>Gautam Navlakha Apartment</li>
                            <li><i class="far fa-clock"></i>Mon - Fri: 8:00 am - 7:00 pm</li>
                        </ul>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <ul class="head-top-links text-end">
                            <li>
                                <ul class="header-social">
                                    <li>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <!-- Dropdown -->
                                <a class="dropdown" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-globe"></i> English
                                </a>
                                <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Italian</a></li>
                                    <li><a href="#">Latvian</a></li>
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">Greek</a></li>
                                </ul> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sticky Active -->
        <div class="sticky-wrap">
            <div class="sticky-active">
                <!-- Header Main -->
                <div class="header-main">
                    <div class="container container-style1 position-relative">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header1-logo py-2">
                                    <a href="index.php"><img src="assets/img/logo.svg" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="col text-end text-lg-center">
                                <nav class="main-menu menu-style1 d-none d-lg-block">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="index.php"><span class="has-new-label">Home</span></a>
                                        </li>
                                        <li>
                                            <a href="about.php">About</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Services</a></li>
                                                <li><a href="service-details.php">Services Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="appointment.php">Appointment</a>
                                        </li>
                                        <?php if ($is_logged_in): ?>
                                        <li>
                                            <a href="dashboard.php">Dashboard</a>
                                        </li>
                                        <?php else: ?>
                                            <!-- <li><a href="#"></a></li> -->
                                            <?php endif; ?>

                                            <?php if ($is_logged_in): ?>
                                        <li>
                                            <a href="logout.php">Logout</a>
                                        </li>
                                        <?php else: ?>
                                            <li><a href="login.php">Login</a></li>
                                            <?php endif; ?>
                                    </ul>
                                </nav>
                                <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fas fa-bars"></i></button>
                            </div>
                            <div class="col-auto gap-3 d-none d-lg-flex">
                                <a href="#" class="icon-btn style3 searchBoxTggler"><i class="far fa-search"></i></a>
                                <a href="#" class="icon-btn style3 sideMenuToggler"><i class="far fa-bars"></i></a>
                            </div>
                            <div class="col-auto d-none-xxxl">
                                <div class="header-call phone-box d-flex align-items-center style2">
                                    <a href="tel:66925682596" class="box-icon"><i class="fas fa-phone-alt"></i></a>
                                    <div class="media-body">
                                        <span class="fs-xs text-title">Call Anytime</span>
                                        <p class="h4 fw-bold lh-1 mb-0"><a href="tel:66925682596">669 2568 2596</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper ">
        <div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Services</h1>
                <div class="breadcumb-menu-wrap">
                    <i class="far fa-home-lg"></i>
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class="vs-service-wrapper space-top space-md-bottom">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-xl-4">
                    <div class="service-thumb">
                        <div class="sr-img">
                            <img class="w-100" src="assets/img/service/sr-3-1.jpg" alt="Serivce Image">
                        </div>
                        <div class="sr-body">
                            <span class="sr-icon"><i class="flaticon-discuss fa-3x"></i></span>
                            <h3 class="h4 sr-title "><a class="text-reset" href="service1.php">Haematology</a></h3>
                            <div class="sr-content">
                                <p class="sr-text">At Medixi, our Haematology services are dedicated to the diagnosis and. </p>
                                <a href="service1.php" class="link-btn">Read More<i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-thumb">
                        <div class="sr-img">
                            <img class="w-100" src="assets/img/service/sr-3-2.jpg" alt="Serivce Image">
                        </div>
                        <div class="sr-body">
                            <span class="sr-icon"><i class="flaticon-group fa-3x"></i></span>
                            <h3 class="h4 sr-title "><a class="text-reset" href="service2.php">Family Physician</a></h3>
                            <div class="sr-content">
                                <p class="sr-text">At Medixi, our Family Physician services are dedicated to providing. </p>
                                <a href="service2.php" class="link-btn">Read More<i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-thumb">
                        <div class="sr-img">
                            <img class="w-100" src="assets/img/service/sr-3-3.jpg" alt="Serivce Image">
                        </div>
                        <div class="sr-body">
                            <span class="sr-icon"><i class="flaticon-quality-of-life fa-3x"></i></span>
                            <h3 class="h4 sr-title "><a class="text-reset" href="service3.php">Pediatrician</a></h3>
                            <div class="sr-content">
                                <p class="sr-text">At Medixi, our Pediatrician services are focused on providing specialized. </p>
                                <a href="service3.php" class="link-btn">Read More<i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-thumb">
                        <div class="sr-img">
                            <img class="w-100" src="assets/img/service/sr-3-4.jpg" alt="Serivce Image">
                        </div>
                        <div class="sr-body">
                            <span class="sr-icon"><i class="flaticon-healthcare fa-3x"></i></span>
                            <h3 class="h4 sr-title "><a class="text-reset" href="service4.php">Gynecologist</a></h3>
                            <div class="sr-content">
                                <p class="sr-text">At Medixi, our Gynecologist services are dedicated to women's health, providing. </p>
                                <a href="service4.php" class="link-btn">Read More<i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-thumb">
                        <div class="sr-img">
                            <img class="w-100" src="assets/img/service/sr-3-5.jpg" alt="Serivce Image">
                        </div>
                        <div class="sr-body">
                            <span class="sr-icon"><i class="flaticon-medical-symbol fa-3x"></i></span>
                            <h3 class="h4 sr-title "><a class="text-reset" href="service5.php">Expert Surgeon</a></h3>
                            <div class="sr-content">
                                <p class="sr-text">At Medixi, our Expert Surgeon services offer advanced surgical care with a focus. </p>
                                <a href="service5.php" class="link-btn">Read More<i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-thumb">
                        <div class="sr-img">
                            <img class="w-100" src="assets/img/service/sr-3-6.jpg" alt="Serivce Image">
                        </div>
                        <div class="sr-body">
                            <span class="sr-icon"><i class="flaticon-stethoscope fa-3x"></i></span>
                            <h3 class="h4 sr-title "><a class="text-reset" href="service6.php">Nephrologist</a></h3>
                            <div class="sr-content">
                                <p class="sr-text">At Medixi, our Nephrologist services focus on the diagnosis and treatment of. </p>
                                <a href="service6.php" class="link-btn">Read More<i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Features Area
    ==============================-->
    <section class="features-wrapper  " data-bg-src="assets/img/bg/bg-shape-10.jpg">
        <div class="container vs-container p-0">
            <div class="row gx-0">
                <div class=" col-xl col-xxl">
                    <div class="features-video-box position-relative vs-surface wow" data-wow-delay="0.3s" data-bg-src="assets/img/about/video-img.jpg">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video style2 position-center"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class=" col-xl-7 col-xxl-6">
                    <div class="features-inner">
                        <div class="row justify-content-center justify-content-xl-start">
                            <div class="col-md-10 col-lg-7 col-xl-9 mb-4">
                                <div class="features-about text-center text-xl-start">
                                    <h2 class="h1 title-divider">Why Choose Us?</h2>
                                    <p>At Medixi, we offer expert, compassionate care tailored to your needs, using innovative treatments and advanced technology to prioritize your health.</p>
                                </div>
                            </div>
                            <div class="col-lg-10 col-xl-11 col-xxl-12">
                                <div class="row justify-content-center justify-content-xl-start">
                                    <div class="col-sm-6 col-xxl-auto mb-30">
                                        <div class="feaures-mark text-center text-md-start">
                                            <span class="mark-icon"><i class="far fa-check"></i></span>
                                            <h3 class="mark-title h5 mb-1 ">Medicine service</h3>
                                            <p class="mark-text fs-xs mb-0">In Medixi we provide medicine service also.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xxl-auto mb-30">
                                        <div class="feaures-mark text-center text-md-start">
                                            <span class="mark-icon"><i class="far fa-check"></i></span>
                                            <h3 class="mark-title h5 mb-1 ">Specialist Surgery</h3>
                                            <p class="mark-text fs-xs mb-0">Medixi provide best surgery by the best Doctors.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xxl-auto mb-30">
                                        <div class="feaures-mark text-center text-md-start">
                                            <span class="mark-icon"><i class="far fa-check"></i></span>
                                            <h3 class="mark-title h5 mb-1 ">100% Safe & Trused</h3>
                                            <p class="mark-text fs-xs mb-0">Medixi is 100% Safe & Trusted for your Health & well being.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xxl-auto mb-30">
                                        <div class="feaures-mark text-center text-md-start">
                                            <span class="mark-icon"><i class="far fa-check"></i></span>
                                            <h3 class="mark-title h5 mb-1 ">24/7 take care staff</h3>
                                            <p class="mark-text fs-xs mb-0">Medixi offers the 24/7 take care from dedicated staff.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Team Area
    ==============================-->
    <section class="vs-team-wrapper space-top space-md-bottom">
        <div class="container">
            <div class="row  text-center justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <div class="sec-icon">
                            <i class="flaticon-ecg"></i>
                        </div>
                        <h2 class="h1 ">Our Patient Says</h2>
                        <p>Genuine testimonials from those who have experienced exceptional care and outstanding service at Medixi, showcasing real results and satisfaction.</p>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel wow fadeIn" data-wow-delay="0.3s" data-arrows="true" data-slide-show="3" data-lg-slide-show="2">
                <div class="col-xl-4 mb-30">
                    <div class="team-card">
                        <div class="team-head">
                            <img src="assets/img/team/t-1-1.png" alt="Team Area" class="w-100">
                            <div class="team-card-links">
                                <a class="team-links-toggler" href="#"><i class="fas fa-share-alt"></i></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-basketball-ball"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-body">
                            <h3 class="h4 mb-0"><a href="team-details.html" class="text-reset">David Smith</a></h3>
                            <p class="fs-xs degi text-theme mb-2">Specialist</p>
                            <p class="fs-xs">Medixi transformed my healthcare experience. Their seamless online booking and compassionate staff made all the difference. </p>
                            <div class="">
                                <p class="fs-xs team-info"><i class="fas fa-phone text-theme"></i><a class="text-reset" href="tel:+592201520156">+592 2015 20156</a></p>
                                <p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="mailto:info.example@mail.com">info.example@mail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-30">
                    <div class="team-card">
                        <div class="team-head">
                            <img src="assets/img/team/t-1-2.png" alt="Team Area" class="w-100">
                            <div class="team-card-links">
                                <a class="team-links-toggler" href="#"><i class="fas fa-share-alt"></i></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-basketball-ball"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-body">
                            <h3 class="h4 mb-0"><a href="team-details.html" class="text-reset">Vivi Marian</a></h3>
                            <p class="fs-xs degi text-theme mb-2">Osteopathic</p>
                            <p class="fs-xs">After visiting Medixi, I feel more in control of my health. Their patient-centric approach is truly exceptional</p>
                            <div class="">
                                <p class="fs-xs team-info"><i class="fas fa-phone text-theme"></i><a class="text-reset" href="tel:+592201520156">+592 2015 20156</a></p>
                                <p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="mailto:info.example@mail.com">info.example@mail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-30">
                    <div class="team-card">
                        <div class="team-head">
                            <img src="assets/img/team/t-1-3.png" alt="Team Area" class="w-100">
                            <div class="team-card-links">
                                <a class="team-links-toggler" href="#"><i class="fas fa-share-alt"></i></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-basketball-ball"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-body">
                            <h3 class="h4 mb-0"><a href="team-details.html" class="text-reset">Farhan Moris</a></h3>
                            <p class="fs-xs degi text-theme mb-2">Pediatrician</p>
                            <p class="fs-xs">The quality of care at Medixi is unmatched. Their innovative use of technology ensures I get the best treatment possible</p>
                            <div class="">
                                <p class="fs-xs team-info"><i class="fas fa-phone text-theme"></i><a class="text-reset" href="tel:+592201520156">+592 2015 20156</a></p>
                                <p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="mailto:info.example@mail.com">info.example@mail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-30">
                    <div class="team-card">
                        <div class="team-head">
                            <img src="assets/img/team/t-1-4.png" alt="Team Area" class="w-100">
                            <div class="team-card-links">
                                <a class="team-links-toggler" href="#"><i class="fas fa-share-alt"></i></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-basketball-ball"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-body">
                            <h3 class="h4 mb-0"><a href="team-details.html" class="text-reset">Jerzzy Lamot</a></h3>
                            <p class="fs-xs degi text-theme mb-2">Surgeon</p>
                            <p class="fs-xs">Medixi's dedication to comprehensive healthcare is evident in every visit. I trust them completely with my family's health.</p>
                            <div class="">
                                <p class="fs-xs team-info"><i class="fas fa-phone text-theme"></i><a class="text-reset" href="tel:+592201520156">+592 2015 20156</a></p>
                                <p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="mailto:info.example@mail.com">info.example@mail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
			Footer Area
	==============================-->
    <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/bg-shape-4.png">
        <div class="container">
            <div class="footer-top">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-6 col-md-auto text-center text-sm-start">
                        <div class="footer1-logo bg-white">
                            <a href="index.php"><img src="assets/img/logo.svg" alt="Logo"></a>
                        </div>
                    </div>
                    <div class=" col-sm-6 col-md-auto pt-20 pt-sm-0 pb-20 pb-sm-0 text-center text-sm-end">
                        <div class="footer-social">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.google.com/"><i class="far fa-basketball-ball"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="widget footer-widget  ">
                            <h3 class="widget_title">About Us</h3>
                            <div class="vs-widget-about">
                                <p>Medixi: Your trusted partner in comprehensive medical care.</p>
                                <h4><a class="text-theme hover-white" href="tel:693232512456"><i class="fas fa-phone-volume me-2 pe-1"></i> 693 2325 12456</a></h4>
                                <div class="d-flex mt-3 pt-1">
                                    <div class="avater-small mr-20">
                                        <img src="assets/img/author/author-2-3.jpg" alt="Avater Image">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="mb-0 font-body lh-1 text-white">Dr. David Smith</h5>
                                        <span class="text-theme fs-xs lh-1">Senior Consultant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-auto col-xl-auto">
                        <div class="widget footer-widget widget_nav_menu   ">
                            <h3 class="widget_title">Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="service1.php">Haematology</a></li>
                                    <li><a href="service2.php">Family Physician</a></li>
                                    <li><a href="service3.php">Pediatrician</a></li>
                                    <li><a href="service4.php">Gynecologist</a></li>
                                    <li><a href="service5.php">Expert Surgeon</a></li>
                                    <li><a href="service6.php">Nephrologist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-auto">
                        <div class="widget footer-widget  ">
                            <h4 class="widget_title">Gallery Posts</h4>
                            <div class="footer-gallery">
                                <div class="gal-item">
                                    <a href="#"><img src="assets/img/widget/gal-1-1.jpg" alt="Gallery Image" class="w-100"></a>
                                </div>
                                <div class="gal-item">
                                    <a href="#"><img src="assets/img/widget/gal-1-2.jpg" alt="Gallery Image" class="w-100"></a>
                                </div>
                                <div class="gal-item">
                                    <a href="#"><img src="assets/img/widget/gal-1-3.jpg" alt="Gallery Image" class="w-100"></a>
                                </div>
                                <div class="gal-item">
                                    <a href="#"><img src="assets/img/widget/gal-1-4.jpg" alt="Gallery Image" class="w-100"></a>
                                </div>
                                <div class="gal-item">
                                    <a href="#"><img src="assets/img/widget/gal-1-5.jpg" alt="Gallery Image" class="w-100"></a>
                                </div>
                                <div class="gal-item">
                                    <a href="#"><img src="assets/img/widget/gal-1-6.jpg" alt="Gallery Image" class="w-100"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="widget footer-widget   ">
                            <h3 class="widget_title">Visiting Hours</h3>
                            <div class="footer-table">
                                <table>
                                    <tr>
                                        <td>Mon - Fri:</td>
                                        <td>8:00 am - 8:00 pm</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday:</td>
                                        <td>9:00 am - 6:00 pm</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday:</td>
                                        <td>9:00 am - 6:00 pm</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="address-line">
                                <i class="far fa-map-marker-alt text-theme fs-md"></i>
                                <a href="map.php" class="text-reset fs-md">Gautam Navlakha Apartment (Road No 7)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright bg-theme">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto text-center text-md-end">
                        <p class="mb-0 text-white">Copyright <i class="fal fa-copyright"></i> 2024 <a class="text-white" href="index.php">Medixi</a>. All rights reserved by <a class="text-white" href="#">Medixi</a>.</p>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <ul class="footer-bottom-menu">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!--********************************
			Code End  Here 
	******************************** -->


    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-bottom  style2"><i class="fas fa-arrow-alt-up"></i></a>



    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- <script src="assets/js/app.min.js"></script> -->
    <!-- Layerslider -->
    <script src="assets/js/layerslider.utils.js"></script>
    <script src="assets/js/layerslider.transitions.js"></script>
    <script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- jQuery Datepicker -->
    <script src="assets/js/jquery.datetimepicker.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Parallax Scroll -->
    <script src="assets/js/universal-parallax.min.js"></script>
    <!-- WOW Animation -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom Carousel -->
    <script src="assets/js/vscustom-carousel.min.js"></script>
    <!-- Form Js -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>

</body>

</html>