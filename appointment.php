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
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>

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
                        <a href="service.php">Services</a>
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
                <h1 class="breadcumb-title">Appointment</h1>
                <div class="breadcumb-menu-wrap">
                    <i class="far fa-home-lg"></i>
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Appointment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Appointment Form Area 
    ==============================-->
    <section class="appointment-wrapper space"  id="make-appointment">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xl-6 mb-40 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                <form id="appointmentForm" action="process_form.php" method="post" class="form-wrap1 shadow-none mb-0" data-bg-color="#f3f6f7">
    <div class="form-title-box bg-title" data-bg-src="assets/img/bg/bg-shape-9.jpg">
        <div class="row justify-content-between align-items-center">
            <div class="col">
                <h2 class="h4 mb-2 text-white">Book An Appointment</h2>
                <p class="mb-0 text-white-light">Medixi is a comprehensive resource offering medical information, symptom checkers, and health advice for patients and professionals....</p>
            </div>
            <div class="col-auto d-none d-sm-block">
                <a href="tel:0088123456789" class="ripple-icon style2"><i class="fas fa-phone"></i></a>
            </div>
        </div>
    </div>
    <div class="form-box">
        <div class="row">
            <div class="col-lg-6 form-group">
                <select class="form-select style3" name="service" id="service">
                    <option hidden disabled selected value="">Select Services</option>
                    <option value="Aerospace Medicine">Aerospace Medicine</option>
                    <option value="Bariatric Surgery">Bariatric Surgery</option>
                    <option value="Infectious Diseases">Infectious Diseases</option>
                    <option value="Laboratory Medicine">Laboratory Medicine</option>
                </select>
                <span class="error" id="serviceError"></span>
            </div>
            <div class="col-lg-6 form-group">
                <select class="form-select style3" name="doctor" id="doctor">
                    <option hidden disabled selected value="">Choose Doctor</option>
                    <option value="Dr. Smith">Dr. Smith</option>
                    <option value="Dr. Johnson">Dr. Johnson</option>
                    <option value="Dr. Brown">Dr. Brown</option>
                    <option value="Dr. Taylor">Dr. Taylor</option>
                </select>
                <span class="error" id="doctorError"></span>
            </div>
            <div class="col-lg-6 form-group">
                <input type="text" class="form-control style3" name="name" id="name" placeholder="Your Name">
                <i class="fal small fa-user"></i>
                <span class="error" id="nameError"></span>
            </div>
            <div class="col-lg-6 form-group">
                <input type="email" class="form-control style3" name="email" id="email" placeholder="Email Address">
                <i class="fal small fa-envelope"></i>
                <span class="error" id="emailError"></span>
            </div>
            <div class="col-lg-6 form-group">
                <input type="number" class="form-control style3" name="phone" id="phone" placeholder="Your Phone">
                <i class="fal small fa-phone"></i>
                <span class="error" id="phoneError"></span>
            </div>
            <div class="col-lg-6 form-group">
                <input type="text" class="dateTime-pick form-control style3" name="appointment_date" id="appointment_date" placeholder="Select Date & Time">
                <i class="fal small fa-calendar-alt"></i>
                <span class="error" id="appointmentDateError"></span>
            </div>
            <div class="col-xl-12 text-center">
                <button type="submit" class="vs-btn style2">Make Appointment<i class="far fa-calendar-alt"></i></button>
            </div>
        </div>
    </div>
</form>
                </div>
                <div class="col-xl-6">
                    <div class="vs-accordion accordion" id="vsaccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Improves overall patients experience by offering a convenient and user-friendly appointment process.
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#vsaccordion">
                                <div class="accordion-body">
                                    <p>  Providing patients with an easy-to-use online appointment booking system reduces the friction associated with scheduling appointments. Patients appreciate the convenience of being able to book appointments anytime and from anywhere, enhancing their overall experience with the Medixi.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Enable patients to analyze the system, optimize operations, and personalize services based on patients conditions.
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
                                <div class="accordion-body">
                                   <p> Ensure patient safety and comfort with round-the-clock monitoring and personalized care plans.
                                    Provide compassionate and empathetic support to address both physical and emotional needs of patients.
                                    Foster a clean, hygienic environment to prevent infections and promote swift recovery.
                                    Utilize advanced medical technology and practices to deliver high-quality, effective healthcare.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Builds trust and loyalty by providing reliable service and effective communication channels.
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
                                <div class="accordion-body">
                                    <p> Provides a platform accessible 24/7, Evidence-based clinical resources and decision support tools for healthcare professionals.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Comprehensive drug information, pill identifiers, and medication management tools.                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
                                <div class="accordion-body">
                                    <p> Medixi appointment booking system sends automated confirmation emails or messages, assuring patients appointments are booked correctly. Clear communication throughout the booking process and any subsequent changes helps in building trust and loyalty over time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Encourages feedback and enhances responsiveness to patients needs and preferences.
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
                                <div class="accordion-body">
                                    <p>Appointment booking  systems often include features for customers to leave feedback or rate their experience. This feedback loop provides valuable insights into areas for improvement and allows Medixi to adjust services based on patients  suggestions, ultimately enhancing patients satisfaction and loyalty.</p>
                                </div>
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
    < <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/bg-shape-4.png">
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
    <!-- Form-Validation -->
    <script src="assets/js/form-validation.js"></script>

</body>

</html>