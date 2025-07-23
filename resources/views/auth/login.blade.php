@extends('layouts.app')

@section('content')
    <main class="main">
        <div class="auth-area py-100">
            <div class="container">
                <div class="col-md-5 mx-auto">
                    <div class="auth-form">
                        <div class="auth-header">
                            <img src="assets/img/logo/logo.png" alt="">
                            <p>Login with your Guider account</p>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="far fa-envelope"></i>
                                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="far fa-key"></i>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Your Password">
                                    <span class="password-view"><i class="far fa-eye-slash"></i></span>
                                </div>
                            </div>
                            <div class="auth-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remember">
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                <a href="#" class="auth-group-link">Forgot Password?</a>
                            </div>
                            <div class="auth-btn">
                                <button type="submit" class="theme-btn"><span class="far fa-sign-in"></span> Login</button>
                            </div>
                        </form>
                        <div class="auth-bottom">
                            <div class="auth-social">
                                <p>Continue with social media</p>
                                <div class="auth-social-list">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-google"></i></a>
                                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                                </div>
                            </div>
                            <p class="auth-bottom-text">Don't have an account? <a
                                    href="{{ route('register') }}">Register.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
