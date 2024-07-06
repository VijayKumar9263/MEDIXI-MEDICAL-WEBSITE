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
        Service Area
        ==============================-->
        <section class="vs-service-wrapper space-top space-md-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-content mb-30">
                    <div style="
                        background: rgba(255, 255, 255, 0.3);
                        border-radius: 15px;
                        padding: 20px;
                        max-width: 100%;
                        backdrop-filter: blur(10px);
                        -webkit-backdrop-filter: blur(10px);
                        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                        border: 1px solid rgba(255, 255, 255, 0.3);
                        text-align: justify;
                    ">
                        <h2 style="text-align: center;">Child Care</h2>
                        <p>
                            At Medixi, our Child Care services are designed to provide comprehensive and compassionate care for your child’s health and development. We offer a range of services to ensure your child grows up healthy, happy, and well-supported.
                        </p>
                        <p>
                            <strong>Pediatric Consultations:</strong> Our pediatricians provide thorough health evaluations, monitoring your child’s growth and development. We address any health concerns and offer guidance on nutrition, immunizations, and preventive care.
                        </p>
                        <p>
                            <strong>Developmental Screenings:</strong> Early detection of developmental issues is crucial for effective intervention. We conduct regular screenings to assess your child’s physical, cognitive, and emotional development, ensuring any concerns are addressed promptly.
                        </p>
                        <p>
                            <strong>Immunizations:</strong> Keeping your child up-to-date with vaccinations is essential for protecting them against various diseases. Our child care services include administering all necessary immunizations according to the recommended schedule.
                        </p>
                        <p>
                            <strong>Parental Support:</strong> We believe in supporting parents as well as children. Our team provides education and resources on child-rearing practices, nutrition, and health care. We are here to answer your questions and help you navigate the challenges of parenting.
                        </p>
                        <p>
                            At Medixi, we are committed to the health and well-being of your child. Our Child Care services are tailored to meet the unique needs of each child, ensuring they receive the best possible start in life.
                        </p>
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