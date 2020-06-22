@extends('theme::layouts.app_apex',['activePage' => 'register', 'titlePage' => __('register')])

@section('content')

<body data-col="1-column" class=" 1-column  blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <!--Registration Page Starts-->
                    <section id="regestration">
                        <div class="container-fluid">
                            <div class="row full-height-vh m-0">
                                <div class="col-12 d-flex align-items-center justify-content-center">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body register-img">
                                                <div class="row m-0">
                                                    <div class="col-lg-6 d-none d-lg-block py-2 text-center">
                                                        <img src="{{ asset('themes/apex/img/gallery/register.png') }}"
                                                            alt="" class="img-fluid mt-3 pl-3" width="400" height="230">
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 px-4 pt-3 bg-white">
                                                        <form class="uk-form-stacked"
                                                            id="@if(setting('billing.card_upfront')){{ 'payment-form' }}@endif"
                                                            role="form" method="POST"
                                                            action="{{ route('new_user') }}">
                                                            {{ csrf_field() }}
                                                            <h4 class="card-title mb-2">Create Account</h4>
                                                            <p class="card-text mb-3">
                                                                Fill the below form to create a new account.
                                                            </p>
                                                            <select type="text" name="account_type"
                                                                class="form-control mb-3">
                                                            <option value="2">Studio</option>
                                                            <option value="3">Doctor</option>
                                                            <option value="4">Dentist Assistant</option>
                                                            <option value="5">Secreatary</option>
                                                            <option value="6">Patient</option>
                                                            </select>
                                                            <input type="text" name="name" class="form-control mb-3"
                                                                placeholder="Name" />
                                                            <input type="text" name="username" class="form-control mb-3"
                                                                placeholder="UserName" />
                                                            <input type="email" name="email" class="form-control mb-3"
                                                                placeholder="Email" />

                                                            <div
                                                                class="custom-control custom-checkbox custom-control-inline mb-3">
                                                                <input type="checkbox" id="customCheckboxInline1"
                                                                    
                                                                    class="custom-control-input" />
                                                                <label class="custom-control-label"
                                                                    for="customCheckboxInline1">
                                                                    I accept the terms & conditions.
                                                                </label>
                                                            </div>
                                                            <div class="fg-actions d-flex justify-content-between">
                                                                <div class="login-btn">
                                                                    <button class="btn btn-outline-primary">
                                                                        <a href="{{ route('login') }}"
                                                                            class="text-decoration-none">
                                                                            Back To Login
                                                                        </a>
                                                                    </button>
                                                                </div>
                                                                <div class="recover-pass">
                                                                    <button name="button" type="submit" class="btn btn-primary">
                                                                            Register
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
                    <!--Registration Page Ends-->

                </div>
            </div>
            <!-- END : End Main Content-->
        </div>
    </div>
    @endsection