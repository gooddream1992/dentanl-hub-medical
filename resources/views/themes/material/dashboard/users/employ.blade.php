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
                    <!-- DOM - jQuery events table -->
                    <section id="dom">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Users</h4>
                                    </div>
                                    <div class="card-content ">
                                        <div class="card-body card-dashboard table-responsive">
                                            <table class="table table-striped table-bordered dom-jQuery-events">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>UserName</th>
                                                        <th>Email</th>
                                                        <th>Account</th>
                                                        <th>Mobile Number</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($users as $user)
                                                    <tr>
                                                        <td>{{$user->id}}</td>
                                                        
                                                        <td>{{$user->username}}</td>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->account_type}}</td>
                                                        <td>{{$user->mobile_number}}</td>
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
                    <!-- DOM - jQuery events table -->
                    <!-- Column rendering table -->
                   

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
    <script src="{{ asset('themes/apex/vendors/js/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/datatable/dataTables.buttons.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/datatable/buttons.flash.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/datatable/jszip.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/datatable/pdfmake.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/datatable/vfs_fonts.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/datatable/buttons.html5.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/vendors/js/datatable/buttons.print.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="{{ asset('themes/apex/js/app-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/js/notification-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{ asset('themes/apex/js/customizer.js')}}" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('themes/apex/js/data-tables/datatable-advanced.js')}}" type="text/javascript"></script>
@endsection