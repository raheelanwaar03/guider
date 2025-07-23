@extends('layouts.app')

@section('content')
    <main class="main">
        <!-- register area -->
        <div class="auth-area py-100">
            <div class="container">
                <div class="col-md-5 mx-auto">
                    <div class="auth-form">
                        <div class="auth-header">
                            <img src="assets/img/logo/logo.png" alt="">
                            <p>Create your free visarx account</p>
                        </div>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="far fa-user-tie"></i>
                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
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
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="far fa-key"></i>
                                    <input type="password" name="password_confirmation" id="password" class="form-control"
                                        placeholder="Retype Password">
                                    <span class="password-view"><i class="far fa-eye-slash"></i></span>
                                </div>
                            </div>
                            <div class="auth-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="agree">
                                    <label class="form-check-label" for="agree">
                                        I agree with the <a href="#" class="auth-group-link">Terms Of Service.</a>
                                    </label>
                                </div>
                            </div>
                            <div class="auth-btn">
                                <button type="submit" class="theme-btn"><span class="far fa-paper-plane"></span>
                                    Register</button>
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
                            <p class="auth-bottom-text">Already have an account? <a href="{{ route('login') }}">Login.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
