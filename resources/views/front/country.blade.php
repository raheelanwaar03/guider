@extends('layouts.app')
@section('content')
    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/team/map.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Country</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Country</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- country area -->
        <div class="country-area py-100">
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
                        <div class="col-md-6 col-lg-4">
                            <div class="country-item">
                                <div class="country-img">
                                    <img src="assets/img/country/united-states.png" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="{{ route('Single-country') }}">United States</a></h4>
                                    <p>There are many variations majority have suffered</p>
                                    <a href="{{ route('Single-country') }}" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="country-item">
                                <div class="country-img">
                                    <img src="assets/img/country/australia.png" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="{{ route('Single-country') }}">Australia</a></h4>
                                    <p>There are many variations majority have suffered</p>
                                    <a href="{{ route('Single-country') }}" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="country-item">
                                <div class="country-img">
                                    <img src="assets/img/country/canada.png" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="{{ route('Single-country') }}">Canada</a></h4>
                                    <p>There are many variations majority have suffered</p>
                                    <a href="{{ route('Single-country') }}" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="country-item">
                                <div class="country-img">
                                    <img src="assets/img/country/united-kingdom.png" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="{{ route('Single-country') }}">United Kingdom</a></h4>
                                    <p>There are many variations majority have suffered</p>
                                    <a href="{{ route('Single-country') }}" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="country-item">
                                <div class="country-img">
                                    <img src="assets/img/country/france.png" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="{{ route('Single-country') }}">France</a></h4>
                                    <p>There are many variations majority have suffered</p>
                                    <a href="{{ route('Single-country') }}" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="country-item">
                                <div class="country-img">
                                    <img src="assets/img/country/denmark.png" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="{{ route('Single-country') }}">Denmark</a></h4>
                                    <p>There are many variations majority have suffered</p>
                                    <a href="{{ route('Single-country') }}" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="country-item">
                                <div class="country-img">
                                    <img src="assets/img/country/new-zealand.png" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="{{ route('Single-country') }}">New Zealand</a></h4>
                                    <p>There are many variations majority have suffered</p>
                                    <a href="{{ route('Single-country') }}" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="country-item">
                                <div class="country-img">
                                    <img src="assets/img/country/germany.png" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="{{ route('Single-country') }}">Germany</a></h4>
                                    <p>There are many variations majority have suffered</p>
                                    <a href="{{ route('Single-country') }}" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="country-item">
                                <div class="country-img">
                                    <img src="assets/img/country/singapore.png" alt="">
                                </div>
                                <div class="country-content">
                                    <h4><a href="{{ route('Single-country') }}">Singapore</a></h4>
                                    <p>There are many variations majority have suffered</p>
                                    <a href="{{ route('Single-country') }}" class="theme-btn">Details<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- country area end -->

    </main>
@endsection
