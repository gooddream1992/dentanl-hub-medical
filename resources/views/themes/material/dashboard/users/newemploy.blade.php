@extends('theme::layouts.app_apex')

@section('content')

<body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">

        @include('theme::menus.apex')
        @include('theme::layouts.headers.apex(header)')
        <div class="main-panel">
            <!-- BEGIN : Main Content-->
            <div class="main-content">
                <div class="content-wrapper">
                    <!--Extended Table starts-->
                    <div class="row">
                        <div class="col-12">
                            <div class="content-header">New Registers</div>
                            <p class="content-sub-header">Tables with some actions and with more feathers.</p>
                        </div>
                    </div>
                    <section id="extended">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">New Registers List</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th></th>
                                                        <th>User Name</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Account Type</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($users as $user)
                                                    <tr>
                                                        <td>{{$user->id}}</td>
                                                        <td>
                                                            <div class="custom-control custom-checkbox m-0">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="item1">
                                                                <label class="custom-control-label" for="item1"></label>
                                                            </div>
                                                        </td>
                                                        <td>{{$user->username}}</td>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->role_id}}</td>
                                                        <td>
                                                            <a class="info p-0" data-original-title="" title="">
                                                                <i class="ft-user font-medium-3 mr-2"></i>
                                                            </a>
                                                            <a class="success p-0" data-original-title="" title="">
                                                                <i class="ft-edit-2 font-medium-3 mr-2"></i>
                                                            </a>
                                                            <a class="danger p-0" data-original-title="" title="">
                                                                <i class="ft-x font-medium-3 mr-2"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Extended Table Ends-->
                    <!--Shopping cart starts-->
                    <!-- <section id="shopping-cart">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Shopping Cart</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <table class="table table-responsive-md text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Product</th>
                                                        <th>Weight</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Amount</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img class="media-object round-media"
                                                                src="{{ asset('themes/apex/img/elements/01.png') }}"
                                                                alt="Generic placeholder image" style="height: 75px;" />
                                                        </td>
                                                        <td>Product 1</td>
                                                        <td>38.9 Ounce</td>
                                                        <td>$9.97</td>
                                                        <td>
                                                            2
                                                            <div class="btn-group ml-1">
                                                                <a class="btn btn-info px-1 py-1 btn-raised font-medium-5"
                                                                    href="javascript:void(0)">-</a>
                                                                <a class="btn btn-info px-1 py-1 btn-raised font-medium-5"
                                                                    href="javascript:void(0)">+</a>
                                                            </div>
                                                        </td>
                                                        <td>$19.94</td>
                                                        <td>
                                                            <a class="danger" data-original-title="" title="">
                                                                <i class="ft-trash font-medium-3"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="media-object round-media"
                                                                src="{{ asset('themes/apex/img/elements/07.png') }}"
                                                                alt="Generic placeholder image" style="height: 75px;" />
                                                        </td>
                                                        <td>Product 2</td>
                                                        <td>15.9 Ounce</td>
                                                        <td>$6.00</td>
                                                        <td>
                                                            2
                                                            <div class="btn-group ml-1">
                                                                <a class="btn btn-info px-1 py-1 btn-raised font-medium-5"
                                                                    href="javascript:void(0)">-</a>
                                                                <a class="btn btn-info px-1 py-1 btn-raised font-medium-5"
                                                                    href="javascript:void(0)">+</a>
                                                            </div>
                                                        </td>
                                                        <td>$12.00</td>
                                                        <td>
                                                            <a class="danger" data-original-title="" title="">
                                                                <i class="ft-trash font-medium-3"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="media-object round-media"
                                                                src="{{ asset('themes/apex/img/elements/11.png') }}"
                                                                alt="Generic placeholder image" style="height: 75px;" />
                                                        </td>
                                                        <td>Product 3</td>
                                                        <td>20.9 Ounce</td>
                                                        <td>$15.78</td>
                                                        <td>
                                                            1
                                                            <div class="btn-group ml-1">
                                                                <a class="btn btn-info px-1 py-1 btn-raised font-medium-5"
                                                                    href="javascript:void(0)">-</a>
                                                                <a class="btn btn-info px-1 py-1 btn-raised font-medium-5"
                                                                    href="javascript:void(0)">+</a>
                                                            </div>
                                                        </td>
                                                        <td>$15.78</td>
                                                        <td>
                                                            <a class="danger" data-original-title="" title="">
                                                                <i class="ft-trash font-medium-3"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="media-object round-media"
                                                                src="{{ asset('themes/apex/img/elements/14.png') }}"
                                                                alt="Generic placeholder image" style="height: 75px;" />
                                                        </td>
                                                        <td>Product 4</td>
                                                        <td>90 Ounce</td>
                                                        <td>$24.51</td>
                                                        <td>
                                                            3
                                                            <div class="btn-group ml-1">
                                                                <a class="btn btn-info px-1 py-1 btn-raised font-medium-5"
                                                                    href="javascript:void(0)">-</a>
                                                                <a class="btn btn-info px-1 py-1 btn-raised font-medium-5"
                                                                    href="javascript:void(0)">+</a>
                                                            </div>
                                                        </td>
                                                        <td>$73.53</td>
                                                        <td>
                                                            <a class="danger" data-original-title="" title="">
                                                                <i class="ft-trash font-medium-3"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                        <td><b>Total</b></td>
                                                        <td><b>$101.31</b></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><button class="btn btn-success btn-raised">Continue</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <!--Shopping cart ends-->

                </div>
            </div>
            <!-- END : End Main Content-->

            <!-- BEGIN : Footer-->
            <footer class="footer footer-static footer-light">
                <p class="clearfix text-muted text-sm-center px-2"><span>Copyright &copy; 2019 <a
                            href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink"
                            target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved.
                    </span></p>
            </footer>
            <!-- End : Footer-->

        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    @include('theme::notifications.apex.sidebar')
    <script src="{{ asset('themes/apex/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/prism.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="{{ asset('themes/apex/js/app-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/js/notification-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/js/customizer.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->

@endsection