@extends('layouts.app')
@section('content')
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
                                        <button type="submit" class="theme-btn"><span class="far fa-paper-plane"></span>
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

    </main>
@endsection
