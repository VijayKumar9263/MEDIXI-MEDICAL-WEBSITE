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
                        <!-- <ul class="sub-menu">
                            <li><a href="index.html">Home One</a></li>
                            <li><a href="index-2.html">Home Two</a></li>
                            <li><a href="index-3.html">Home Three</a></li>
                            <li><a href="index-4.html">Home Four </a></li>
                            <li><a href="index-5.html">Home Five</a></li>
                            <li><a href="index-6.html">Home Six <span class="new-label">New</span></a></li>
                            <li><a href="index-7.html">Home Seven <span class="new-label">New</span></a></li>
                            <li><a href="index-8.html">Home Eight <span class="new-label">New</span></a></li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="#">About Us</a>
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
                        <!-- <ul class="sub-menu">
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="blog-details.php">Blog Details</a></li>
                        </ul> -->
                    </li>
                    <!-- <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="shop.html">Our Shop <span class="new-label">New</span></a></li>
                            <li><a href="shop-details.html">Shop Details <span class="new-label">New</span></a></li>
                            <li><a href="cart.html">Shopping Cart <span class="new-label">New</span></a></li>
                            <li><a href="checkout.html">Checkout <span class="new-label">New</span></a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="project.html">Projects</a></li>
                            <li><a href="appointment.html">Appointment</a></li>
                            <li><a href="error.html">Error Page</a></li> -->
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
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
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
    <header class="header-wrapper header-layout2">
        <!-- Header Top -->
        <div class="header-top bg-title py-2 d-none d-md-block">
            <div class="container py-1">
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
                <div class="header-main py-3 py-lg-0">
                    <div class="container position-relative">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto d-flex">
                                <div class="header2-logo">
                                    <a href="index.php"><img src="assets/img/logo.svg" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu menu-style2 d-none d-lg-block">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="index.php"><span class="has-new-label">Home</span></a>
                                        </li>
                                        <li>
                                            <a href="#">About</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="service.php">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="service.php">Services</a></li>
                                                <li><a href="service-details.php">Services Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="appointment.php">Appointment</a>
                                            <!-- <ul class="sub-menu">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="blog-details.php">Blog Details</a></li>
                                            </ul> -->
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
                            <div class="col-auto d-none d-xl-block">
                                <div class="header2-btn">
                                    <a href="#" class="icon-btn style3 searchBoxTggler"><i class="far fa-search"></i></a>
                                    <a href="#" class="icon-btn style3 sideMenuToggler"><i class="far fa-bars"></i></a>
                                    <a href="appointment.php#make-appointment" class="vs-btn style2">Appointment<i class="fal fa-calendar-alt"></i></a>
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
                <h1 class="breadcumb-title">About Us</h1>
                <div class="breadcumb-menu-wrap">
                    <i class="far fa-home-lg"></i>
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    About Area
    ==============================-->
    <section class="vs-about-wrapper space">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 mb-40 mb-lg-0">
                    <div class="vs-surface wow" data-wow-delay="0.3s">
                        <div class="about-img3 position-relative">
                            <img src="assets/img/about/about-4-1.jpg" alt="About Image" class="w-100">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="popup-video play-btn style2 position-center"><i class="fas fa-play"></i></a>
                            <div class="exp-box-bottom bg-white">
                                <div class="exp-year text-theme">
                                    <span class="counter">50</span>+
                                </div>
                                <p class="exp-text text-title mb-0">Years of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-content mb-2 ">
                        <span class="sec-subtitle text-theme h3 mb-2 mb-md-0">Medical & General Care!</span>
                        <div class="row">
                            <div class="col-xl-10">
                                <h2 class="h1 mb-3">Surprise your body with <span class="text-theme">extra care.</span></h2>
                            </div>
                            <div class="col-xl-10">
                                <p class="mb-4">Rapidly enhance patient-centric functionalities for highly efficient healthcare interfaces. Competently leverage innovative technology to deliver superior medical services and holistic care.</p>
                            </div>
                        </div>
                        <div class="media-style1">
                            <div class="media-icon"><i class="fas fa-phone"></i></div>
                            <div class="media-body">
                                <h3 class="media-title">CALL ANYTIME 24/7</h3>
                                <p class="media-text"><a href="tel:+4412345996">+44-1234-5996</a></p>
                            </div>
                        </div>
                        <a href="about.php#why-choose-us" class="vs-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pb-30 pb-lg-0">
        <div class="parallax" data-parallax-image="assets/img/bg/bg-8.jpg"></div>
        <!--==============================
    Skill Area
    ==============================-->
    <section class="vs-skill-wrapper  ">
        <div class="container">
            <div class="skill-wrap1 bg-white">
                <div class="row justify-content-center justify-content-lg-between">
                    <div class="col-md-6 col-lg-auto  mb-30">
                        <div class="d-xl-flex text-center text-xl-start skill-box">
                            <span class="ripple-icon hover-style2  align-self-start mb-20 mb-xl-0 mr-20"><i class="flaticon-discuss"></i></span>
                            <div class="media-body">
                                <h2 class="mt-n2 mb-0 text-theme">50+</h2>
                                <p class="text-title fs-md fw-medium mt-1 mt-xl-0 mb-2 mb-xl-2">Years Of Experience</p>
                                <p class="fs-xs mb-0">Medixi brings over 50 years of dedicated healthcare experience, ensuring top-quality service and patient trust.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-auto  mb-30">
                        <div class="d-xl-flex text-center text-xl-start skill-box">
                            <span class="ripple-icon  hover-style2 align-self-start mb-20 mb-xl-0 mr-20"><i class="flaticon-medical-equipment"></i></span>
                            <div class="media-body">
                                <h2 class="mt-n2 mb-0 text-theme">100+</h2>
                                <p class="text-title fs-md fw-medium mt-1 mt-xl-0 mb-2 mb-xl-2">Experienced Doctor's</p>
                                <p class="fs-xs mb-0">Our team features over 100 skilled specialists, providing compassionate and innovative medical care.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-auto  mb-30">
                        <div class="d-xl-flex text-center text-xl-start skill-box">
                            <span class="ripple-icon  hover-style2 align-self-start mb-20 mb-xl-0 mr-20"><i class="flaticon-healthcare"></i></span>
                            <div class="media-body">
                                <h2 class="mt-n2 mb-0 text-theme">200+</h2>
                                <p class="text-title fs-md fw-medium mt-1 mt-xl-0 mb-2 mb-xl-2">Happy Patients</p>
                                <p class="fs-xs mb-0">Join over 200 satisfied patients benefiting from our commitment to exceptional healthcare solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!--==============================
    Accordion Area
    ==============================-->
        <section class="vs-accordion-wrapper space-top space-md-bottom" id="why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mb-30 mb-xl-0">
                        <div class="about-content">
                            <span class="h3 text-theme sec-subtitle mb-2 mb-md-0">7 Star Care & Protection</span>
                            <h2 class="h1">Why Choose Us?</h2>
                            <p class="pe-xl-2 text-title">
                            At Medixi, we offer expert, compassionate care tailored to your needs, using innovative treatments, advanced technology, and personalized attention to prioritize your health. </p>
                            <div class="row pt-3">
                                <div class="col-sm-6 col-lg-5 col-xl-6">
                                    <div class="d-flex mb-25">
                                        <span class="text-theme mr-20"><i class="flaticon-security fa-3x lh-1"></i></span>
                                        <div class="media-body">
                                            <h3 class="h5 mb-2 pb-1">100% Safe & Trusted</h3>
                                            <p class="mb-0 fs-xs">Medixi is 100% Safe & Trusted for your Health & well being.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-5 col-xl-6">
                                    <div class="d-flex mb-25">
                                        <span class="text-theme mr-20"><i class="flaticon-computer-mouse fa-3x lh-1"></i></span>
                                        <div class="media-body">
                                            <h3 class="h5 mb-2 pb-1">Specialist Surgery </h3>
                                            <p class="mb-0 fs-xs">Medixi provide best surgery by the best Doctors.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-5 col-xl-6">
                                    <div class="d-flex mb-25">
                                        <span class="text-theme mr-20"><i class="flaticon-healthcare fa-3x lh-1"></i></span>
                                        <div class="media-body">
                                            <h3 class="h5 mb-2 pb-1">24/7 take care staff</h3>
                                            <p class="mb-0 fs-xs">Medixi offers the 24/7 take care from dedicated staff.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-5 col-xl-6">
                                    <div class="d-flex mb-25">
                                        <span class="text-theme mr-20"><i class="flaticon-laboratory-equipment fa-3x lh-1"></i></span>
                                        <div class="media-body">
                                            <h3 class="h5 mb-2 pb-1">Medicine service</h3>
                                            <p class="mb-0 fs-xs">In Medixi we provide medicine service also.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="vs-accordion accordion accordion-style2" id="vsaccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Comprehensive Healthcare Services
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#vsaccordion">
                                    <div class="accordion-body">
                                        <p>At Medixi, we offer a wide range of medical services to meet all your healthcare needs. From routine check-ups and diagnostics to specialized treatments and emergency care, our team of experienced professionals is dedicated to providing top-notch care. We use state-of-the-art technology and the latest medical advancements to ensure you receive the best possible treatment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Patient-Centric Approach
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
                                    <div class="accordion-body">
                                        <p>Your health and well-being are our top priorities. At Medixi, we believe in a patient-centric approach to healthcare. This means we listen to your concerns, tailor treatments to your individual needs, and ensure you are informed and comfortable every step of the way. Our compassionate and skilled staff are here to support you on your health journey.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Easy and Convenient Online Access
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
                                    <div class="accordion-body">
                                        <p>With Medixi, managing your health is easier than ever. Our user-friendly website allows you to book appointments, access medical records, and consult with healthcare professionals from the comfort of your home. We strive to make healthcare convenient and accessible, so you can focus on what matters most—your health.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
                                <p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="mailto:info.example@mail.com">davidsmith.example@mail.com</a></p>
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
                                <p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="mailto:info.example@mail.com">vivimarian.example@mail.com</a></p>
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
                                <p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="mailto:info.example@mail.com">farhanmoris.example@mail.com</a></p>
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
                                <p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="mailto:info.example@mail.com">jerzzylamot.example@mail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Testimonial Area
    ==============================-->
    <section class="testimonial-wrapper space-top space-md-bottom">
        <div class="parallax" data-parallax-image="assets/img/bg/bg-shape-6.jpg"></div>
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
            <div class="position-relative">
                <div class="d-none d-md-block bg-top-right position-absolute start-0 top-0 w-100 h-100" data-bg-src="assets/img/bg/testimonial-shape-1.png"></div>
                <div class="row gx-30 mb-30 mb-lg-0">
                    <div class="col-md-5 col-lg-4 col-xl-3 z-index-common">
                        <div class="avater-slider-box vs-carousel" data-slide-show="1" data-md-slide-show="1" data-fade="true" data-asnavfor=".testimonail-desc-slide">
                            <div class="avater-slider">
                                <div class="avater">
                                    <img src="assets/img/author/author-3-1.jpg" alt="Author Image">
                                </div>
                                <h3 class="mb-0 h4 font-body">Mr. David Smith</h3>
                                <span class="fs-xs">Customer</span>
                            </div>
                            <div class="avater-slider">
                                <div class="avater">
                                    <img src="assets/img/author/author-3-2.jpg" alt="Author Image">
                                </div>
                                <h3 class="mb-0 h4 font-body">Mr. Jons Smith</h3>
                                <span class="fs-xs">Member</span>
                            </div>
                            <div class="avater-slider">
                                <div class="avater">
                                    <img src="assets/img/author/author-3-3.jpg" alt="Author Image">
                                </div>
                                <h3 class="mb-0 h4 font-body">Jerzzy Lamot</h3>
                                <span class="fs-xs">Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-8 align-self-center">
                        <div class="pl-30 no-pl-md mt-2 mt-md-0 position-relative">
                            <div class="testimonail-quote"><img src="assets/img/bg/quote-icon.png" alt="quote"></div>
                            <div class="vs-carousel testimonail-desc-slide text-center text-md-start" data-dots="true" data-slide-show="1" data-md-slide-show="1" data-asnavfor=".avater-slider-box">
                                <div class="testimonail-desc">
                                    <div class="testi-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                    </div>
                                    <p class="mb-0 testi-text">Medixi's commitment to comprehensive healthcare shines through in every visit. Their dedication to patient well-being and safety, combined with their advanced medical expertise and compassionate approach, ensures that I trust them completely with the health and care of my family. Each interaction at Medixi reinforces their reliability and commitment to delivering the highest standards of medical treatment and personalized attention, making them our trusted healthcare partner.</p>
                                </div>
                                <div class="testimonail-desc">
                                    <div class="testi-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                    </div>
                                    <p class="mb-0 testi-text">OLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat. Nulla aliquet. </p>
                                </div>
                                <div class="testimonail-desc">
                                    <div class="testi-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                    </div>
                                    <p class="mb-0 testi-text">Nick Richardson described the translation “like extreme Mallarmé, or a Burroughsian cut-up, or a paragraph of Finnegans Wake. Bits of it have surprising power: the desperate insistence on loving hitch and, an </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-md-bottom space-top">
        <div class="container">
            <div class="row  text-center justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <div class="sec-icon">
                            <i class="flaticon-ecg"></i>
                        </div>
                        <h2 class="h1 ">Latest Posts</h2>
                        <p>Proactively revolutionize granular customer service after pandemic internal or "organic" sources istinctively impact proactive human</p>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slide-show="3" data-lg-slide-show="2">
                <div class="col-xl-4">
                    <div class="vs-blog blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/b-1-1.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-date">
                                <div class="day">22</div>
                                Jan 2023
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog1.php"><i class="far fa-folder"></i>Mental Health</a>
                                <a href="blog1.php"><i class="fal fa-user"></i>David Smith</a>
                            </div>
                            <h3 class="blog-title h5 font-body lh-base"><a href="blog1.php">At Medixi, we recognize the importance of mental health in overall well-being.........</a></h3>
                            <a href="blog1.php" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/b-1-2.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-date">
                                <div class="day">23</div>
                                Mar 2023
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog2.php"><i class="far fa-folder"></i>Therapy</a>
                                <a href="blog2.php"><i class="fal fa-user"></i>Vivi Marian</a>
                            </div>
                            <h3 class="blog-title h5 font-body lh-base"><a href="blog2.php">At Medixi, we offer a comprehensive range of therapy services designed to support your.........</a></h3>
                            <a href="blog2.php" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/b-1-3.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-date">
                                <div class="day">28</div>
                                Dec 2023
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog3.php"><i class="far fa-folder"></i>Acupressure </a>
                                <a href="blog3.php"><i class="fal fa-user"></i>Moris John</a>
                            </div>
                            <h3 class="blog-title h5 font-body lh-base"><a href="blog3.php">At Medixi, we offer Acupressure services to enhance your physical and mental well-being.........</a></h3>
                            <a href="blog3.php" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/b-1-4.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-date">
                                <div class="day">22</div>
                                Jan 2023
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog4.php"><i class="far fa-folder"></i>Child Care</a>
                                <a href="blog4.php"><i class="fal fa-user"></i>Joseph Jon</a>
                            </div>
                            <h3 class="blog-title h5 font-body lh-base"><a href="blog4.php">At Medixi, our Child Care services are designed to provide comprehensive and compassionate.........</a></h3>
                            <a href="blog4.php" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Brand Area
    ==============================-->
    <div class="vs-brand-wrapper space-md bg-light">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay="0.3s">
                <div class="row vs-carousel text-center" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="1">
                    <div class="col-auto">
                        <div class="brand">
                            <img src="assets/img/brand/brand-1-1.svg" alt="Brand Image">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand">
                            <img src="assets/img/brand/brand-1-2.svg" alt="Brand Image">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand">
                            <img src="assets/img/brand/brand-1-3.svg" alt="Brand Image">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand">
                            <img src="assets/img/brand/brand-1-4.svg" alt="Brand Image">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand">
                            <img src="assets/img/brand/brand-1-5.svg" alt="Brand Image">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand">
                            <img src="assets/img/brand/brand-1-6.svg" alt="Brand Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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