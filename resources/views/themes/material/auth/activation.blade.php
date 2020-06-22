@extends('theme::layouts.app_apex',['activePage' => 'activate', 'titlePage' => __('activate')])


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
                                                            action="{{route('register_withactive')}}">

                                                            {{ csrf_field() }}
                                                            <h4 class="mb-2 card-title">First Login</h4>
                                                            <p class="card-text mb-3">
                                                                Welcome back, please insert activation code to your account.
                                                            </p>
                                                            <input type="email" class="form-control mb-3" name="email"
                                                                placeholder="email" />
                                                            <input type="text" class="form-control mb-1"
                                                                name="activatecode" placeholder="ActivateCode" />
                                                                <div class="" style="text-align:center;padding-top:15px;">
                                                                    <button type=submit class="btn btn-primary">
                                                                        Activate
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
