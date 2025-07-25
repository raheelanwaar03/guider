@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/team/coaching.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Coaching</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Coaching</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- coaching area -->
        <div class="coaching-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"><i class="far fa-passport"></i> Our Coaching</span>
                            <h2 class="site-title">Get Best Coaching From Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="coaching-item">
                            <span class="coaching-price">$850</span>
                            <div class="coaching-img">
                                <img src="assets/img/coaching/01.jpg" alt="">
                            </div>
                            <div class="coaching-content">
                                <div class="coaching-meta">
                                    <span><i class="far fa-clock"></i> 03 Months</span>
                                    <span><i class="far fa-book"></i> 25 Classes</span>
                                </div>
                                <h4><a href="{{ route('Single-coaching') }}">IELTS Coaching</a></h4>
                                <p>There are many variations of passages available the majority form by injected humour.</p>
                            </div>
                            <div class="coaching-bottom">
                                <div class="coaching-rating">
                                    <i class="fas fa-star"></i><span> (4.0)</span>
                                </div>
                                <a href="{{ route('Single-coaching') }}" class="theme-btn">Details<i
                                        class="fas fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="coaching-item">
                            <span class="coaching-price">$780</span>
                            <div class="coaching-img">
                                <img src="assets/img/coaching/02.jpg" alt="">
                            </div>
                            <div class="coaching-content">
                                <div class="coaching-meta">
                                    <span><i class="far fa-clock"></i> 04 Months</span>
                                    <span><i class="far fa-book"></i> 29 Classes</span>
                                </div>
                                <h4><a href="{{ route('Single-coaching') }}">TOEFL Coaching</a></h4>
                                <p>There are many variations of passages available the majority form by injected humour.</p>
                            </div>
                            <div class="coaching-bottom">
                                <div class="coaching-rating">
                                    <i class="fas fa-star"></i><span> (4.0)</span>
                                </div>
                                <a href="{{ route('Single-coaching') }}" class="theme-btn">Details<i
                                        class="fas fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="coaching-item">
                            <span class="coaching-price">$690</span>
                            <div class="coaching-img">
                                <img src="assets/img/coaching/03.jpg" alt="">
                            </div>
                            <div class="coaching-content">
                                <div class="coaching-meta">
                                    <span><i class="far fa-clock"></i> 05 Months</span>
                                    <span><i class="far fa-book"></i> 35 Classes</span>
                                </div>
                                <h4><a href="{{ route('Single-coaching') }}">PTE Coaching</a></h4>
                                <p>There are many variations of passages available the majority form by injected humour.</p>
                            </div>
                            <div class="coaching-bottom">
                                <div class="coaching-rating">
                                    <i class="fas fa-star"></i><span> (4.0)</span>
                                </div>
                                <a href="{{ route('Single-coaching') }}" class="theme-btn">Details<i
                                        class="fas fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="coaching-item">
                            <span class="coaching-price">$520</span>
                            <div class="coaching-img">
                                <img src="assets/img/coaching/04.jpg" alt="">
                            </div>
                            <div class="coaching-content">
                                <div class="coaching-meta">
                                    <span><i class="far fa-clock"></i> 02 Months</span>
                                    <span><i class="far fa-book"></i> 20 Classes</span>
                                </div>
                                <h4><a href="{{ route('Single-coaching') }}">GRE Coaching</a></h4>
                                <p>There are many variations of passages available the majority form by injected humour.</p>
                            </div>
                            <div class="coaching-bottom">
                                <div class="coaching-rating">
                                    <i class="fas fa-star"></i><span> (4.0)</span>
                                </div>
                                <a href="{{ route('Single-coaching') }}" class="theme-btn">Details<i
                                        class="fas fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="coaching-item">
                            <span class="coaching-price">$370</span>
                            <div class="coaching-img">
                                <img src="assets/img/coaching/05.jpg" alt="">
                            </div>
                            <div class="coaching-content">
                                <div class="coaching-meta">
                                    <span><i class="far fa-clock"></i> 03 Months</span>
                                    <span><i class="far fa-book"></i> 25 Classes</span>
                                </div>
                                <h4><a href="{{ route('Single-coaching') }}">SAT Coaching</a></h4>
                                <p>There are many variations of passages available the majority form by injected humour.</p>
                            </div>
                            <div class="coaching-bottom">
                                <div class="coaching-rating">
                                    <i class="fas fa-star"></i><span> (4.0)</span>
                                </div>
                                <a href="{{ route('Single-coaching') }}" class="theme-btn">Details<i
                                        class="fas fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="coaching-item">
                            <span class="coaching-price">$450</span>
                            <div class="coaching-img">
                                <img src="assets/img/coaching/06.jpg" alt="">
                            </div>
                            <div class="coaching-content">
                                <div class="coaching-meta">
                                    <span><i class="far fa-clock"></i> 04 Months</span>
                                    <span><i class="far fa-book"></i> 32 Classes</span>
                                </div>
                                <h4><a href="{{ route('Single-coaching') }}">GMAT Coaching</a></h4>
                                <p>There are many variations of passages available the majority form by injected humour.</p>
                            </div>
                            <div class="coaching-bottom">
                                <div class="coaching-rating">
                                    <i class="fas fa-star"></i><span> (4.0)</span>
                                </div>
                                <a href="{{ route('Single-coaching') }}" class="theme-btn">Details<i
                                        class="fas fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="coaching-item">
                            <span class="coaching-price">$250</span>
                            <div class="coaching-img">
                                <img src="assets/img/coaching/07.jpg" alt="">
                            </div>
                            <div class="coaching-content">
                                <div class="coaching-meta">
                                    <span><i class="far fa-clock"></i> 03 Months</span>
                                    <span><i class="far fa-book"></i> 28 Classes</span>
                                </div>
                                <h4><a href="{{ route('Single-coaching') }}">OET Coaching</a></h4>
                                <p>There are many variations of passages available the majority form by injected humour.</p>
                            </div>
                            <div class="coaching-bottom">
                                <div class="coaching-rating">
                                    <i class="fas fa-star"></i><span> (4.0)</span>
                                </div>
                                <a href="{{ route('Single-coaching') }}" class="theme-btn">Details<i
                                        class="fas fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="coaching-item">
                            <span class="coaching-price">$580</span>
                            <div class="coaching-img">
                                <img src="assets/img/coaching/08.jpg" alt="">
                            </div>
                            <div class="coaching-content">
                                <div class="coaching-meta">
                                    <span><i class="far fa-clock"></i> 05 Months</span>
                                    <span><i class="far fa-book"></i> 36 Classes</span>
                                </div>
                                <h4><a href="{{ route('Single-coaching') }}">INE Coaching</a></h4>
                                <p>There are many variations of passages available the majority form by injected humour.</p>
                            </div>
                            <div class="coaching-bottom">
                                <div class="coaching-rating">
                                    <i class="fas fa-star"></i><span> (4.0)</span>
                                </div>
                                <a href="{{ route('Single-coaching') }}" class="theme-btn">Details<i
                                        class="fas fa-circle-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- coaching area end -->

    </main>
@endsection
