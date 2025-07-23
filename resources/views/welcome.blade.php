<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Guider - Immigration and Visa Consulting</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body class="home-3">

    <!-- preloader -->
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- header area -->
    <header class="header">
        <!-- navbar -->
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <div class="mobile-menu-btn">
                            <button type="button" class="nav-right-link search-box-outer"><i
                                    class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a href="index.html" class="offcanvas-brand" id="offcanvasNavbarLabel">
                                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                                    class="far fa-xmark"></i></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1">
                                <li class="nav-item dropdown">
                                    <a class="nav-link active" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Coaching</a>
                                </li>
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Pages</a>
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                        <li><a class="dropdown-item" href="team.html">Our Team</a></li>
                                        <li><a class="dropdown-item" href="pricing.html">Pricing Plan</a></li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Services</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="service.html">Services</a></li>
                                                <li><a class="dropdown-item" href="service-single.html">Service
                                                        Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="login.html">Login</a></li>
                                                <li><a class="dropdown-item" href="register.html">Register</a></li>
                                                <li><a class="dropdown-item" href="forgot-password.html">Forgot
                                                        Password</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Extra Pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                                </li>
                                                <li><a class="dropdown-item" href="terms.html">Terms Of Service</a>
                                                </li>
                                                <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                                        <li><a class="dropdown-item" href="faq.html">Faq's</a></li>
                                        <li><a class="dropdown-item" href="testimonial.html">Testimonials</a></li>
                                        <li><a class="dropdown-item" href="404.html">404 Error</a></li>
                                    </ul>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Visa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Countries</a>
                                </li>
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Blog</a>
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                        <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> --}}
                                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                            </ul>
                            <!-- nav-right -->
                            <div class="nav-right">
                                <div class="search-btn">
                                    <button type="button" class="nav-right-link search-box-outer"><i
                                            class="far fa-search"></i></button>
                                </div>
                                <div class="nav-btn">
                                    <a href="contact.html" class="theme-btn">Sign In<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar end-->

    </header>
    <!-- header area end -->


    <!-- popup search -->
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" class="form-control" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->


    <main class="main">

        <!-- hero area -->
        <div class="hero-section">
            <div class="hero-single" style="background-image: url({{ asset('assets/img/hero/bg.jpg') }});">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-7">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">
                                    <i class="far fa-passport"></i> Best Legal Support!
                                </h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Let's plan <span>awesome trip of</span> your dream...
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    There are many variations of passages orem psum available but the majority have
                                    suffered alteration in some form by injected humour.
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="contact.html" class="theme-btn2">Make your Profile<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <div class="hero-img">
                                <img src="{{ asset('assets/img/video/1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero area end -->


        <!-- apply area -->
        <div class="apply-area">
            <div class="container">
                <div class="col-lg-11 col-xl-9">
                    <div class="apply-form">
                        <form action="#">
                            <div class="apply-header">
                                <h4 class="title">Destination To Fly</h4>
                                <button type="submit" class="theme-btn">Apply Now<i
                                        class="fas fa-arrow-circle-right"></i></button>
                            </div>
                            <div class="row g-3">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="form-icon">
                                            <i class="far fa-user-tie"></i>
                                            <input type="text" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="form-icon">
                                            <i class="far fa-envelopes"></i>
                                            <input type="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="form-icon">
                                            <i class="far fa-globe"></i>
                                            <select class="select">
                                                <option value="">Country</option>
                                                <option value="1">USA</option>
                                                <option value="2">AUS</option>
                                                <option value="3">UK</option>
                                                <option value="4">CAN</option>
                                                <option value="5">NZL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="form-icon">
                                            <i class="far fa-passport"></i>
                                            <select class="select">
                                                <option value="">Visa Type</option>
                                                <option value="1">Student Visa</option>
                                                <option value="2">Tourist Visa</option>
                                                <option value="3">Working Visa</option>
                                                <option value="4">Migrate Visa</option>
                                                <option value="5">Residence Visa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- apply area end -->


        <!-- feature area -->
        <div class="feature-area pt-100">
            <div class="container">
                <div class="feature-wrapper">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item">
                                <span class="count">01</span>
                                <div class="feature-icon">
                                    <img src="{{ asset('assets/img/icon/assistance.svg') }}" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Genuine Assistance</h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        excepturi words of voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item mt-lg-5">
                                <span class="count">02</span>
                                <div class="feature-icon">
                                    <img src="{{ asset('assets/img/icon/faster-visa.svg') }}" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Faster Processing</h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        excepturi words of voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item">
                                <span class="count">03</span>
                                <div class="feature-icon">
                                    <img src="{{ asset('assets/img/icon/interview.svg') }}" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Direct Interviews</h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        excepturi words of voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->


        <!-- about area -->
        <div class="about-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img">
                                <div class="row">
                                    <div class="col-6">
                                        <img class="img-1" src="{{ asset('assets/img/video/7.jpg') }}" alt="">
                                        <img class="shape" src="{{ asset('assets/img/shape/02.png') }}" alt="">
                                    </div>
                                    <div class="col-6">
                                        <div class="about-experience">
                                            <h5>30<span>+</span></h5>
                                            <p>Years Of Experience</p>
                                        </div>
                                        <img class="img-2" src="{{ asset('assets/img/video/8.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInUp" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="far fa-passport"></i> About Us</span>
                                <h2 class="site-title">We Are Trusted <span>Visa And Immigration</span> Agency</h2>
                            </div>
                            <p class="about-text">There are many variations of passages available
                                but the majority have suffered alteration in some form by injected humour
                                randomised words look even. Many desktop packages and web
                                page editors now their default model text.</p>
                            <div class="about-content">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="about-item">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icon/accurate.svg') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h6>Accurate & Expert Advise</h6>
                                                <p>It is a long established fact that a reader will be distracted.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="about-item">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icon/support.svg') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h6>24/7 Live Online Support</h6>
                                                <p>It is a long established fact that a reader will be distracted.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="about.html" class="theme-btn">Discover More<i
                                    class="fas fa-circle-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->


        <!-- video-area -->
        <div class="video-area">
            <div class="container-fluid px-0">
                <div class="video-info">
                    <div class="video-content" style="background-image: url({{ asset('assets/img/video/5.jpg') }});">
                        <a class="play-btn popup-youtube" href="#">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- video-area end -->


        <!-- country area -->
        <div class="country-area2 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"><i class="far fa-passport"></i> Country We Offer</span>
                            <h2 class="site-title">Let's Check Country We Offer For You</h2>
                        </div>
                    </div>
                </div>
                <div class="country-wrap p-0">
                    <div class="row g-4 wow fadeInUp" data-wow-delay=".25s">
                        <div class="col-md-6 col-lg-3">
                            <div class="country-item">
                                <div class="country-banner-img">
                                    <img src="{{ asset('assets/img/country/01.jpg') }}" alt="">
                                </div>
                                <div class="country-img">
                                    <img src="{{ asset('assets/img/country/united-states.png') }}" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="#">United States</a></h4>
                                    <p>There are many variations majority have suffered its layout.</p>
                                    <a href="#" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="country-item">
                                <div class="country-banner-img">
                                    <img src="{{ asset('assets/img/country/02.jpg') }}" alt="">
                                </div>
                                <div class="country-img">
                                    <img src="{{ asset('assets/img/country/australia.png') }}" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="#">Australia</a></h4>
                                    <p>There are many variations majority have suffered its layout.</p>
                                    <a href="#" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="country-item">
                                <div class="country-banner-img">
                                    <img src="{{ asset('assets/img/country/03.jpg') }}" alt="">
                                </div>
                                <div class="country-img">
                                    <img src="{{ asset('assets/img/country/canada.png') }}" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="#">Canada</a></h4>
                                    <p>There are many variations majority have suffered its layout.</p>
                                    <a href="#" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="country-item">
                                <div class="country-banner-img">
                                    <img src="{{ asset('assets/img/country/04.jpg') }}" alt="">
                                </div>
                                <div class="country-img">
                                    <img src="{{ asset('assets/img/country/united-kingdom.png') }}" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="#">United Kingdom</a></h4>
                                    <p>There are many variations majority have suffered its layout.</p>
                                    <a href="#" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- country area end -->


        <!-- visa area -->
        {{-- <div class="visa-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto wow fadeInDown" data-wow-delay=".25s">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-passport"></i> Visa Type</span>
                            <h2 class="site-title">Let's <span>explore</span> our immigration and visa type</h2>
                        </div>
                    </div>
                </div>
                <div class="visa-wrap wow fadeInUp" data-wow-delay=".25s">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="visa-item">
                                <span class="count">01</span>
                                <div class="visa-content">
                                    <div class="visa-icon">
                                        <img src="{{ asset('assets/img/icon/student-visa.svg') }}" alt="">
                                    </div>
                                    <div class="visa-info">
                                        <h4 class="visa-title">
                                            <a href="#">Student Visa</a>
                                        </h4>
                                        <p class="visa-text">
                                            There are many variations of passages orem psum available but the majority
                                            have
                                            suffered words looking at layout.
                                        </p>
                                        <a href="#" class="theme-btn">Details<i
                                                class="fas fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="visa-img">
                                    <img src="{{ asset('assets/img/visa/01.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="visa-item">
                                <span class="count">02</span>
                                <div class="visa-content">
                                    <div class="visa-icon">
                                        <img src="{{ asset('assets/img/icon/tourist-visa.svg') }}" alt="">
                                    </div>
                                    <div class="visa-info">
                                        <h4 class="visa-title">
                                            <a href="#">Tourist Visa</a>
                                        </h4>
                                        <p class="visa-text">
                                            There are many variations of passages orem psum available but the majority
                                            have
                                            suffered words looking at layout.
                                        </p>
                                        <a href="#" class="theme-btn">Details<i
                                                class="fas fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="visa-img">
                                    <img src="{{ asset('assets/img/visa/02.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="visa-item">
                                <span class="count">03</span>
                                <div class="visa-content">
                                    <div class="visa-icon">
                                        <img src="{{ asset('assets/img/icon/commercial-visa.svg') }}" alt="">
                                    </div>
                                    <div class="visa-info">
                                        <h4 class="visa-title">
                                            <a href="#">Commercial Visa</a>
                                        </h4>
                                        <p class="visa-text">
                                            There are many variations of passages orem psum available but the majority
                                            have
                                            suffered words looking at layout.
                                        </p>
                                        <a href="#" class="theme-btn">Details<i
                                                class="fas fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="visa-img">
                                    <img src="{{ asset('assets/img/visa/03.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="visa-item">
                                <span class="count">04</span>
                                <div class="visa-content">
                                    <div class="visa-icon">
                                        <img src="{{ asset('assets/img/icon/residence-visa.svg') }}" alt="">
                                    </div>
                                    <div class="visa-info">
                                        <h4 class="visa-title">
                                            <a href="#">Residence Visa</a>
                                        </h4>
                                        <p class="visa-text">
                                            There are many variations of passages orem psum available but the majority
                                            have
                                            suffered words looking at layout.
                                        </p>
                                        <a href="#" class="theme-btn">Details<i
                                                class="fas fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="visa-img">
                                    <img src="{{ asset('assets/img/visa/04.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="visa-item">
                                <span class="count">05</span>
                                <div class="visa-content">
                                    <div class="visa-icon">
                                        <img src="{{ asset('assets/img/icon/working-visa.svg') }}" alt="">
                                    </div>
                                    <div class="visa-info">
                                        <h4 class="visa-title">
                                            <a href="#">Working Visa</a>
                                        </h4>
                                        <p class="visa-text">
                                            There are many variations of passages orem psum available but the majority
                                            have
                                            suffered words looking at layout.
                                        </p>
                                        <a href="#" class="theme-btn">Details<i
                                                class="fas fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="visa-img">
                                    <img src="{{ asset('assets/img/visa/05.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="visa-item">
                                <span class="count">06</span>
                                <div class="visa-content">
                                    <div class="visa-icon">
                                        <img src="{{ asset('assets/img/icon/migrate-visa.svg') }}" alt="">
                                    </div>
                                    <div class="visa-info">
                                        <h4 class="visa-title">
                                            <a href="#">Migrate Visa</a>
                                        </h4>
                                        <p class="visa-text">
                                            There are many variations of passages orem psum available but the majority
                                            have
                                            suffered words looking at layout.
                                        </p>
                                        <a href="#" class="theme-btn">Details<i
                                                class="fas fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="visa-img">
                                    <img src="{{ asset('assets/img/visa/06.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- visa area end -->

        <!-- choose area -->
        <div class="choose-area pt-100">
            <div class="container">
                <div class="row g-4 g-lg-5">
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay=".25s">
                            <div class="site-heading mb-0">
                                <span class="site-title-tagline"><i class="far fa-passport"></i> Why Choose Us</span>
                                <h2 class="site-title">Trusted And <span>Experience Visa</span> Service Provider</h2>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when will uncover many web sites still in their majority have
                                    suffered alteration in some form
                                    infancy looking at its layout.
                                </p>
                            </div>
                            <div class="choose-img">
                                <img src="{{ asset('assets/img/hero/9.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4 wow fadeInRight" data-wow-delay=".25s">
                            <div class="col-md-6 mt-lg-5">
                                <div class="choose-item">
                                    <span class="count">01</span>
                                    <div class="choose-item-icon">
                                        <img src="{{ asset('assets/img/icon/team.svg') }}" alt="">
                                    </div>
                                    <div class="choose-item-info">
                                        <h4>Experience Team</h4>
                                        <p>It is a long established fact that a readable content of a page when looking
                                            layout.</p>
                                    </div>
                                </div>
                                <div class="choose-item">
                                    <span class="count">02</span>
                                    <div class="choose-item-icon">
                                        <img src="{{ asset('assets/img/icon/quality-service.svg') }}" alt="">
                                    </div>
                                    <div class="choose-item-info">
                                        <h4>Quality Services</h4>
                                        <p>It is a long established fact that a readable content of a page when looking
                                            layout.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="choose-item">
                                    <span class="count">03</span>
                                    <div class="choose-item-icon">
                                        <img src="{{ asset('assets/img/icon/accurate-guidance.svg') }}" alt="">
                                    </div>
                                    <div class="choose-item-info">
                                        <h4>Accurate Guidance</h4>
                                        <p>It is a long established fact that a readable content of a page when looking
                                            layout.</p>
                                    </div>
                                </div>
                                <div class="choose-item">
                                    <span class="count">04</span>
                                    <div class="choose-item-icon">
                                        <img src="{{ asset('assets/img/icon/immigration.svg') }}" alt="">
                                    </div>
                                    <div class="choose-item-info">
                                        <h4>Legal Immigration</h4>
                                        <p>It is a long established fact that a readable content of a page when looking
                                            layout.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- choose area end -->


        <!-- team-area -->
        <div class="team-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"><i class="far fa-passport"></i> Our Team</span>
                            <h2 class="site-title">Meet With Our <span>Awesome Team</span> Members</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="team-img">
                                <img src="{{ asset('assets/img/team/01.jpg') }}" alt="thumb">
                                <div class="team-social-wrap">
                                    <div class="team-social-btn">
                                        <button type="button"><i class="far fa-share-alt"></i></button>
                                    </div>
                                    <div class="team-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4><a href="team.html">Miss Fozia</a></h4>
                                <span>Visa Agent</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="team-img">
                                <img src="{{ asset('assets/img/team/02.jpg') }}" alt="thumb">
                                <div class="team-social-wrap">
                                    <div class="team-social-btn">
                                        <button type="button"><i class="far fa-share-alt"></i></button>
                                    </div>
                                    <div class="team-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4><a href="team.html">Rana Ahmad</a></h4>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="team-img">
                                <img src="{{ asset('assets/img/team/03.jpg') }}" alt="thumb">
                                <div class="team-social-wrap">
                                    <div class="team-social-btn">
                                        <button type="button"><i class="far fa-share-alt"></i></button>
                                    </div>
                                    <div class="team-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4><a href="team.html">Mam Noor</a></h4>
                                <span>Legal Advisor</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay="1s">
                            <div class="team-img">
                                <img src="{{ asset('assets/img/team/04.jpg') }}" alt="thumb">
                                <div class="team-social-wrap">
                                    <div class="team-social-btn">
                                        <button type="button"><i class="far fa-share-alt"></i></button>
                                    </div>
                                    <div class="team-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4><a href="team.html">Sameer Kazim</a></h4>
                                <span>Visa Specialist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team-area end -->


        <!-- quote area -->
        <div class="quote-area mb-100">
            <div class="quote-bg" style="background-image: url({{ asset('assets/img/video/2.jpg') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ms-auto">
                        <div class="quote-form">
                            <div class="quote-header">
                                <h4>Request A Quote</h4>
                                <p>It is a long established fact that a reader will by the readable content page when
                                    looking at its layout
                                    will their infancy.
                                </p>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-icon">
                                                <i class="far fa-user-tie"></i>
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-icon">
                                                <i class="far fa-envelope"></i>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-icon">
                                                <i class="far fa-pencil"></i>
                                                <input type="text" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-icon">
                                                <i class="far fa-passport"></i>
                                                <select class="select" name="service">
                                                    <option value="">Choose Service</option>
                                                    <option value="1">Student Visa</option>
                                                    <option value="2">Tourist Visa</option>
                                                    <option value="3">Commercial Visa</option>
                                                    <option value="4">Residence Visa</option>
                                                    <option value="5">Working Visa</option>
                                                    <option value="6">Migrate Visa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-icon">
                                                <i class="far fa-comment-lines"></i>
                                                <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Write Your Message"
                                                    required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <button type="submit" class="theme-btn"><span
                                                class="far fa-paper-plane"></span>
                                            Request A Quote</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- quote area end -->


        <!-- process area -->
        <div class="process-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"><i class="far fa-passport"></i> How It Works</span>
                            <h2 class="site-title">Easy step to get your visa</h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay=".25s">
                    <div class="col-md-6 col-lg-3">
                        <div class="process-item">
                            <span class="count">01</span>
                            <div class="process-icon">
                                <img src="{{ asset('assets/img/icon/visa-2.svg') }}" alt="">
                            </div>
                            <div class="process-content">
                                <h4>Choose Your Visa Type</h4>
                                <p>There are many variations of passages available but the majority have suffered</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="process-item mt-lg-5">
                            <span class="count">02</span>
                            <div class="process-icon">
                                <img src="{{ asset('assets/img/icon/agent.svg') }}" alt="">
                            </div>
                            <div class="process-content">
                                <h4>Meet With Our Agent</h4>
                                <p>There are many variations of passages available but the majority have suffered</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="process-item">
                            <span class="count">03</span>
                            <div class="process-icon">
                                <img src="{{ asset('assets/img/icon/document.svg') }}" alt="">
                            </div>
                            <div class="process-content">
                                <h4>Submit Your Documents</h4>
                                <p>There are many variations of passages available but the majority have suffered</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="process-item mt-lg-5">
                            <span class="count">04</span>
                            <div class="process-icon">
                                <img src="{{ asset('assets/img/icon/visa-3.svg') }}" alt="">
                            </div>
                            <div class="process-content">
                                <h4>Get Your Dream Visa</h4>
                                <p>There are many variations of passages available but the majority have suffered</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- process area end -->


        <!-- testimonial-area -->
        <div class="testimonial-area testimonial-bg pt-80 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"><i class="far fa-passport"></i> Testimonials</span>
                            <h2 class="site-title text-white">What Our Awesome Clients Say About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme wow fadeInUp" data-wow-delay=".25s">
                    <div class="testimonial-item">
                        <div class="testimonial-quote-icon">
                            <img src="{{ asset('assets/img/icon/quote.svg') }}" alt="">
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{ asset('assets/img/testimonial/01.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Niesha Phips</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations passage available the majority have suffered of the alteration
                                in some form by injected humour or randomised words which look even slightly believable.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-icon">
                            <img src="{{ asset('assets/img/icon/quote.svg') }}" alt="">
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{ asset('assets/img/testimonial/02.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Daniel Porter</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations passage available the majority have suffered of the alteration
                                in some form by injected humour or randomised words which look even slightly believable.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-icon">
                            <img src="{{ asset('assets/img/icon/quote.svg') }}" alt="">
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{ asset('assets/img/testimonial/03.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Ebony Swihart</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations passage available the majority have suffered of the alteration
                                in some form by injected humour or randomised words which look even slightly believable.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-icon">
                            <img src="{{ asset('assets/img/icon/quote.svg') }}" alt="">
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{ asset('assets/img/testimonial/04.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Loreta Jones</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations passage available the majority have suffered of the alteration
                                in some form by injected humour or randomised words which look even slightly believable.
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial-area end -->


        <!-- partner-area -->
        <!-- <div class="partner-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"><i class="far fa-passport"></i> Our Partners</span>
                            <h2 class="site-title">Meet With Our <span>Awesome</span> Partners</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center wow fadeInUp" data-wow-delay=".25s">
                    <div class="col-4 col-lg-2">
                        <div class="partner-img">
                            <img src="{{ asset('assets/img/partner/01.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="partner-img">
                            <img src="{{ asset('assets/img/partner/02.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="partner-img">
                            <img src="{{ asset('assets/img/partner/03.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="partner-img">
                            <img src="{{ asset('assets/img/partner/04.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="partner-img">
                            <img src="{{ asset('assets/img/partner/05.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="partner-img">
                            <img src="{{ asset('assets/img/partner/06.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="partner-img">
                            <img src="{{ asset('assets/img/partner/04.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="partner-img">
                            <img src="{{ asset('assets/img/partner/02.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <div class="partner-img">
                            <img src="{{ asset('assets/img/partner/03.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- partner-area end -->


        <!-- cta-area -->
        <div class="cta-area pb-100">
            <div class="container">
                <div class="cta-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="cta-img">
                                <img src="{{ asset('assets/img/video/3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cta-content">
                                <h1>We Are Best For <span>Visa And Immigration</span> Services</h1>
                                <p>
                                    It is a long established fact that reader will readable content page when looking at
                                    its desktop publishing and web page editors now layout.
                                </p>
                                <a href="#" class="theme-btn2">Contact Now<i
                                        class="fas fa-circle-arrow-right"></i></a>
                                <div class="shape">
                                    <img src="{{ asset('assets/img/shape/03.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta-area end -->


        <!-- blog-area -->
        <!-- <div class="blog-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"><i class="far fa-passport"></i> Our Blog</span>
                            <h2 class="site-title">Our Latest News & <span>Blog</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-date">
                                <strong>10</strong>
                                <span>Mar</span>
                            </div>
                            <div class="blog-item-img">
                                <img src="{{ asset('assets/img/blog/01.jpg') }}" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 2.5k Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-single.html">There are many variations of passages orem available.</a>
                                </h4>
                                <p>It is a long established fact that by the readable content of a page when looking at
                                    its layout.</p>
                                <a class="theme-btn" href="blog-single.html">Read More<i
                                        class="fas fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="blog-date">
                                <strong>11</strong>
                                <span>Mar</span>
                            </div>
                            <div class="blog-item-img">
                                <img src="{{ asset('assets/img/blog/02.jpg') }}" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 1.2k Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-single.html">Generator internet repeat tend word chunk necessary.</a>
                                </h4>
                                <p>It is a long established fact that by the readable content of a page when looking at
                                    its layout.</p>
                                <a class="theme-btn" href="blog-single.html">Read More<i
                                        class="fas fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="blog-date">
                                <strong>12</strong>
                                <span>Mar</span>
                            </div>
                            <div class="blog-item-img">
                                <img src="{{ asset('assets/img/blog/03.jpg') }}" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 2.8k Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-single.html">Survived only five centuries but also the leap into.</a>
                                </h4>
                                <p>It is a long established fact that by the readable content of a page when looking at
                                    its layout.</p>
                                <a class="theme-btn" href="blog-single.html">Read More<i
                                        class="fas fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- blog-area end -->

    </main>


    <!-- footer area -->
    <footer class="footer-area light">
        <div class="footer-shape">
            <img src="{{ asset('assets/img/shape/01.png') }}" alt="">
        </div>
        <div class="footer-widget">
            <div class="container">
                <div class="footer-widget-wrap pt-100 pb-80">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="footer-widget-box about-us">
                                <a href="#" class="footer-logo">
                                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                                </a>
                                <p class="mb-4">
                                    We are many variations of passages available but the majority have suffered
                                    alteration
                                    some form by injected humour words believable.
                                </p>
                                <div class="footer-newsletter">
                                    <h6>Subscribe Our Newsletter</h6>
                                    <div class="newsletter-form">
                                        <form action="#">
                                            <div class="form-group">
                                                <div class="form-icon">
                                                    <i class="far fa-envelopes"></i>
                                                    <input type="email" class="form-control"
                                                        placeholder="Your Email">
                                                    <button class="theme-btn" type="submit">
                                                        Subscribe <span class="far fa-paper-plane"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">Company</h4>
                                <ul class="footer-list">
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>About Us</a>
                                    </li>
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Update News</a>
                                    </li>
                                    <li><a href="#"><i
                                                class="far fa-angle-double-right"></i>Testimonials</a>
                                    </li>
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Contact
                                            Us</a>
                                    </li>
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Terms Of
                                            Service</a></li>
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Privacy
                                            policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-2">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">Visa Type</h4>
                                <ul class="footer-list">
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Student
                                            Visa</a>
                                    </li>
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Tourist
                                            Visa</a>
                                    </li>
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Commercial
                                            Visa</a>
                                    </li>
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Residence
                                            Visa</a>
                                    </li>
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Working
                                            Visa</a>
                                    </li>
                                    <li><a href="#"><i class="far fa-angle-double-right"></i>Migrate
                                            Visa</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-widget-box">
                                <h4 class="footer-widget-title">Get In Touch</h4>
                                <ul class="footer-contact">
                                    <li>
                                        <div class="icon">
                                            <i class="far fa-location-dot"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Our Address</h6>
                                            <p>25/AB Milford Road, New York, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Call Us</h6>
                                            <a href="tel:+21236547898">+92 302 1233432</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Mail Us</h6>
                                            <a href="mailto:info@example.com">info@RanaUzaibAhmad.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="#"> Visarx </a> All Rights
                            Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->


    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
