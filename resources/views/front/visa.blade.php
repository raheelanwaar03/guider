@extends('layouts.app')
@section('content')
    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/team/visa.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Visa</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Visa</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- visa area -->
        <div class="visa-area py-100">
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
                                        <img src="assets/img/icon/student-visa.svg" alt="">
                                    </div>
                                    <div class="visa-info">
                                        <h4 class="visa-title">
                                            <a href="{{ route('Single-visa') }}">Student Visa</a>
                                        </h4>
                                        <p class="visa-text">
                                            There are many variations of passages orem psum available but the majority have
                                            suffered words looking at layout.
                                        </p>
                                        <a href="{{ route('Single-visa') }}" class="theme-btn">Details<i
                                                class="fas fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="visa-img">
                                    <img src="assets/img/visa/01.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="visa-item">
                                <span class="count">02</span>
                                <div class="visa-content">
                                    <div class="visa-icon">
                                        <img src="assets/img/icon/tourist-visa.svg" alt="">
                                    </div>
                                    <div class="visa-info">
                                        <h4 class="visa-title">
                                            <a href="{{ route('Single-visa') }}">Tourist Visa</a>
                                        </h4>
                                        <p class="visa-text">
                                            There are many variations of passages orem psum available but the majority have
                                            suffered words looking at layout.
                                        </p>
                                        <a href="{{ route('Single-visa') }}" class="theme-btn">Details<i
                                                class="fas fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="visa-img">
                                    <img src="assets/img/visa/02.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="visa-item">
                                <span class="count">03</span>
                                <div class="visa-content">
                                    <div class="visa-icon">
                                        <img src="assets/img/icon/commercial-visa.svg" alt="">
                                    </div>
                                    <div class="visa-info">
                                        <h4 class="visa-title">
                                            <a href="{{ route('Single-visa') }}">Commercial Visa</a>
                                        </h4>
                                        <p class="visa-text">
                                            There are many variations of passages orem psum available but the majority have
                                            suffered words looking at layout.
                                        </p>
                                        <a href="{{ route('Single-visa') }}" class="theme-btn">Details<i
                                                class="fas fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="visa-img">
                                    <img src="assets/img/visa/03.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="visa-item">
                                <span class="count">04</span>
                                <div class="visa-content">
                                    <div class="visa-icon">
                                        <img src="assets/img/icon/residence-visa.svg" alt="">
                                    </div>
                                    <div class="visa-info">
                                        <h4 class="visa-title">
                                            <a href="{{ route('Single-visa') }}">Residence Visa</a>
                                        </h4>
                                        <p class="visa-text">
                                            There are many variations of passages orem psum available but the majority have
                                            suffered words looking at layout.
                                        </p>
                                        <a href="{{ route('Single-visa') }}" class="theme-btn">Details<i
                                                class="fas fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="visa-img">
                                    <img src="assets/img/visa/04.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="visa-item">
                                <span class="count">05</span>
                                <div class="visa-content">
                                    <div class="visa-icon">
                                        <img src="assets/img/icon/working-visa.svg" alt="">
                                    </div>
                                    <div class="visa-info">
                                        <h4 class="visa-title">
                                            <a href="{{ route('Single-visa') }}">Working Visa</a>
                                        </h4>
                                        <p class="visa-text">
                                            There are many variations of passages orem psum available but the majority have
                                            suffered words looking at layout.
                                        </p>
                                        <a href="{{ route('Single-visa') }}" class="theme-btn">Details<i
                                                class="fas fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="visa-img">
                                    <img src="assets/img/visa/05.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="visa-item">
                                <span class="count">06</span>
                                <div class="visa-content">
                                    <div class="visa-icon">
                                        <img src="assets/img/icon/migrate-visa.svg" alt="">
                                    </div>
                                    <div class="visa-info">
                                        <h4 class="visa-title">
                                            <a href="{{ route('Single-visa') }}">Migrate Visa</a>
                                        </h4>
                                        <p class="visa-text">
                                            There are many variations of passages orem psum available but the majority have
                                            suffered words looking at layout.
                                        </p>
                                        <a href="{{ route('Single-visa') }}" class="theme-btn">Details<i
                                                class="fas fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="visa-img">
                                    <img src="assets/img/visa/06.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- visa area end -->

    </main>
@endsection
