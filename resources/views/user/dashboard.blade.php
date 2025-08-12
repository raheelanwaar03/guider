@extends('layouts.app')

@section('content')
    <div style="margin-top:80px;">
        <main class="main">
            <!-- breadcrumb -->
            <div class="site-breadcrumb" style="background: url({{ asset('assets/img/breadcrumb/01.jpg') }})">
                <div class="container">
                    <h2 class="breadcrumb-title">Create Profile</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{ route('User.Dashboard') }}">Home</a></li>
                        <li class="active">Profile</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb end -->


            <!-- service single -->
            <div class="service-single py-120">
                <div class="container">
                    <div class="service-single-wrap">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4">
                                <div class="service-sidebar">
                                    <div class="widget">
                                        <h4 class="title">User Dashboard</h4>
                                        <div class="category">
                                            <a href="{{ route('User.Dashboard') }}"><i
                                                    class="far fa-angle-double-right"></i>Home</a>
                                            <a href="{{ route('coaching') }}"><i
                                                    class="far fa-angle-double-right"></i>Coaching</a>
                                            <a href="{{ route('visa') }}"><i class="far fa-angle-double-right"></i>Visa</a>
                                            <a href="{{ route('country') }}"><i
                                                    class="far fa-angle-double-right"></i>Countries</a>
                                            <a href="{{ route('contact') }}"><i
                                                    class="far fa-angle-double-right"></i>Contact</a>
                                            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                style="cursor:pointer;">
                                                <i class="far fa-angle-double-right"></i>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                                Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="service-details">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="title text-center" style="font-size:30px">Compelet Your Profile</h2>
                                            <p class="text-center" style="font-size:12px;">It will help us to
                                                find best universities for you.</p>
                                            <form action="#" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="country"
                                                        placeholder="Student Country">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="degree"
                                                        placeholder="Highest Degree">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="course"
                                                        placeholder="Course Level">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="category"
                                                        placeholder="Category">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="test"
                                                        placeholder="Language Test">
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- service single end -->

        </main>
    </div>
@endsection
