@extends('theme::layouts.app_apex',['activePage' => 'login', 'titlePage' => __('login')])

@section('content')

<body data-col="1-column" class=" 1-column  blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <!--Login Page Starts-->
                    <section id="login">
                        <div class="container-fluid">
                            <div class="row full-height-vh m-0">
                                <div class="col-12 d-flex align-items-center justify-content-center">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body login-img">
                                                <div class="row m-0">
                                                    <div
                                                        class="col-lg-6 d-lg-block d-none py-2 text-center align-middle">
                                                        <img src="{{ asset('themes/apex/img/gallery/login.png') }}"
                                                            alt="" class="img-fluid mt-5" width="400" height="230">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 bg-white px-4 pt-3">
                                                        <form class="uk-form-stacked" role="form" method="POST"
                                                            action="{{ route('login') }}">

                                                            {{ csrf_field() }}
                                                            <h4 class="mb-2 card-title">Login</h4>
                                                            <p class="card-text mb-3">
                                                                Welcome back, please login to your account.
                                                            </p>
                                                            <input type="email" class="form-control mb-3" name="email"
                                                                placeholder="email" />
                                                            <input type="password" class="form-control mb-1"
                                                                name="password" placeholder="Password" />
                                                            <div class="d-flex justify-content-between mt-2">
                                                                <div class="remember-me">
                                                                    <div
                                                                        class="custom-control custom-checkbox custom-control-inline mb-3">
                                                                        <input type="checkbox"
                                                                            id="customCheckboxInline1"
                                                                            name="customCheckboxInline1"
                                                                            class="custom-control-input" />
                                                                        <label class="custom-control-label"
                                                                            for="customCheckboxInline1">
                                                                            Remember Me
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="forgot-password-option">
                                                                    <a href="#"
                                                                        class="text-decoration-none text-primary">Forgot
                                                                        Password
                                                                        ?</a>
                                                                </div>
                                                            </div>
                                                            <div class="fg-actions d-flex justify-content-between">
                                                                <div class="login-btn">
                                                                    <button class="btn btn-outline-primary">
                                                                        <a href="{{ route('register') }}"
                                                                            class="text-decoration-none">Register</a>
                                                                    </button>
                                                                </div>
                                                                <div class="recover-pass">
                                                                    <button class="btn btn-primary" type="submit">
                                                                        Login
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Login Page Ends-->

                </div>
            </div>
            <!-- END : End Main Content-->
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->

    @endsection