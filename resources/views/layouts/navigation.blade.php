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
                    <a class="navbar-brand" href="{{ url('/') }}">
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
                                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('coaching') }}">Coaching</a>
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
                                    <a class="nav-link" href="{{ route('visa') }}">Visa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('country') }}">Countries</a>
                                </li>
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Blog</a>
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                        <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> --}}
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                                <li class="nav-item d-sm-none ">
                                    <a href="{{ route('login') }}" class="btn btn-warning text-white">Login</a>
                                    <a href="{{ route('register') }}" class="btn text-white"
                                        style="background-color:#1d397e;">Register</a>
                                </li>
                            </ul>
                            <!-- nav-right -->
                            <div class="nav-right">
                                {{-- <div class="search-btn">
                                    <button type="button" class="nav-right-link search-box-outer"><i
                                            class="far fa-search"></i></button>
                                </div> --}}
                                <div class="nav-btn">
                                    <a href="{{ route('login') }}" class="theme-btn">Sign In<i
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
