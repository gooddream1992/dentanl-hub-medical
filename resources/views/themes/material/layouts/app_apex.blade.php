<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content="" />
  <meta property="og:image" content="" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('themes/apex/img/ico/apple-icon-60.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('themes/apex/img/ico/apple-icon-76.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('themes/apex/img/ico/apple-icon-120.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('themes/apex/img/ico/apple-icon-152.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/apex/img/ico/favicon.ico') }}">
  <link rel="shortcut icon" type="image/png" href="{{ asset('themes/apex/img/ico/favicon-32.png') }}">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900"
    rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <!-- font icons-->
  <link rel="stylesheet" type="text/css" href="{{ asset('themes/apex/fonts/feather/style.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('themes/apex/fonts/simple-line-icons/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('themes/apex/fonts/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('themes/apex/vendors/css/perfect-scrollbar.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('themes/apex/vendors/css/prism.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('themes/apex/vendors/css/chartist.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('themes/apex/vendors/css/tables/datatable/datatables.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('themes/apex/css/app.css') }}">
  <!-- END APEX CSS-->
  <!-- BEGIN Page Level CSS-->
  <!-- END Page Level CSS-->
</head>
<!-- END : Head-->

<!-- BEGIN : Body-->
@yield('content')
<!-- Theme customizer Starts-->
<div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="rtl-icon" href="https://pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-6/" target="_blank" class="bg-dark customizer-toggle"><span class="font-medium-1 white align-middle">RTL</span></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
      <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
        <h4 class="text-uppercase mb-0 text-bold-400">Theme Customizer</h4>
        <p>Customize & Preview in Real Time</p>
        <hr>
        <!-- Layout Options-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Layout Options</h6>
        <div class="layout-switch ml-4">
          <div class="custom-control custom-radio d-inline-block custom-control-inline light-layout">
            <input id="ll-switch" type="radio" name="layout-switch" checked class="custom-control-input">
            <label for="ll-switch" class="custom-control-label">Light</label>
          </div>
          <div class="custom-control custom-radio d-inline-block custom-control-inline dark-layout">
            <input id="dl-switch" type="radio" name="layout-switch" class="custom-control-input">
            <label for="dl-switch" class="custom-control-label">Dark</label>
          </div>
          <div class="custom-control custom-radio d-inline-block custom-control-inline transparent-layout">
            <input id="tl-switch" type="radio" name="layout-switch" class="custom-control-input">
            <label for="tl-switch" class="custom-control-label">Transparent</label>
          </div>
        </div>
        <hr>
        <!-- Sidebar Options Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase sb-options">Sidebar Color Options</h6>
        <div class="cz-bg-color sb-color-options">
          <div class="row p-1">
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="pomegranate" class="gradient-pomegranate d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="king-yna" class="gradient-king-yna d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset" class="gradient-ibiza-sunset d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="flickr" class="gradient-flickr d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-bliss" class="gradient-purple-bliss d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="man-of-steel" class="gradient-man-of-steel d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-love" class="gradient-purple-love d-block rounded-circle"></span></div>
          </div>
          <div class="row p-1">
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="black" class="bg-black d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="white" class="bg-grey d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="primary" class="bg-primary d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="success" class="bg-success d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="warning" class="bg-warning d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="info" class="bg-info d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="danger" class="bg-danger d-block rounded-circle"></span></div>
          </div>
        </div>
        <!-- Sidebar Options Ends-->
        <!-- Transparent Layout Bg color Options-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase tl-color-options d-none">Background Colors</h6>
        <div class="cz-tl-bg-color d-none">
          <div class="row p-1">
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="hibiscus" class="bg-hibiscus d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-purple-pizzazz" class="bg-purple-pizzazz d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-blue-lagoon" class="bg-blue-lagoon d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-electric-viloet" class="bg-electric-violet d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-protage" class="bg-portage d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-tundora" class="bg-tundora d-block rounded-circle"></span></div>
          </div>
        </div>
        <!-- Transparent Layout Bg color Ends-->
        <hr>
        <!-- Sidebar BG Image Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase sb-bg-img">Sidebar Bg Image</h6>
        <div class="cz-bg-image row sb-bg-img">
          <div class="col-sm-2 mb-3"><img src="{{ asset('themes/apex/img/sidebar-bg/01.jpg')}}" width="90" class="rounded sb-bg-01"></div>
          <div class="col-sm-2 mb-3"><img src="{{ asset('themes/apex/img/sidebar-bg/02.jpg')}}" width="90" class="rounded sb-bg-02"></div>
          <div class="col-sm-2 mb-3"><img src="{{ asset('themes/apex/img/sidebar-bg/03.jpg')}}" width="90" class="rounded sb-bg-03"></div>
          <div class="col-sm-2 mb-3"><img src="{{ asset('themes/apex/img/sidebar-bg/04.jpg')}}" width="90" class="rounded sb-bg-04"></div>
          <div class="col-sm-2 mb-3"><img src="{{ asset('themes/apex/img/sidebar-bg/05.jpg')}}" width="90" class="rounded sb-bg-05"></div>
          <div class="col-sm-2 mb-3"><img src="{{ asset('themes/apex/img/sidebar-bg/06.jpg')}}" width="90" class="rounded sb-bg-06"></div>
        </div>
        <!-- Transparent BG Image Ends-->
        <div class="tl-bg-img d-none">
          <h6 class="text-center text-bold-500 text-uppercase">Background Images</h6>
          <div class="cz-tl-bg-image row">
            <div class="col-sm-3"><img src="{{ asset('themes/apex/img/gallery/bg-glass-1.jpg')}}" width="90" class="rounded bg-glass-1 selected"></div>
            <div class="col-sm-3"><img src="{{ asset('themes/apex/img/gallery/bg-glass-2.jpg')}}" width="90" class="rounded bg-glass-2"></div>
            <div class="col-sm-3"><img src="{{ asset('themes/apex/img/gallery/bg-glass-3.jpg')}}" width="90" class="rounded bg-glass-3"></div>
            <div class="col-sm-3"><img src="{{ asset('themes/apex/img/gallery/bg-glass-4.jpg')}}" width="90" class="rounded bg-glass-4"></div>
          </div>
        </div>
        <!-- Transparent BG Image Ends    -->
        <hr>
        <!-- Sidebar BG Image Toggle Starts-->
        <div class="togglebutton toggle-sb-bg-img">
          <div class="switch"><span>Sidebar Bg Image</span>
            <div class="float-right">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input id="sidebar-bg-img" type="checkbox" checked class="custom-control-input cz-bg-image-display">
                <label for="sidebar-bg-img" class="custom-control-label"></label>
              </div>
            </div>
          </div>
          <hr>
        </div>
        <!-- Sidebar BG Image Toggle Ends-->
        <!-- Compact Menu Starts-->
        <div class="togglebutton">
          <div class="switch"><span>Compact Menu</span>
            <div class="float-right">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
                <label for="cz-compact-menu" class="custom-control-label"></label>
              </div>
            </div>
          </div>
        </div>
        <!-- Compact Menu Ends-->
        <hr>
        <!-- Sidebar Width Starts-->
        <div>
          <label for="cz-sidebar-width">Sidebar Width</label>
          <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
            <option value="small">Small</option>
            <option value="medium" selected="">Medium</option>
            <option value="large">Large</option>
          </select>
        </div>
        <!-- Sidebar Width Ends-->
      </div>
    </div>
    <!-- Theme customizer Ends-->

<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->


<!-- BEGIN PAGE LEVEL JS-->

  <!-- BEGIN : Body-->
  @yield('content')

  
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->

  <!-- END : Body-->
<!-- END PAGE VENDOR JS-->
<!-- END PAGE LEVEL JS-->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
</body>
<!-- END : Body-->

</html>