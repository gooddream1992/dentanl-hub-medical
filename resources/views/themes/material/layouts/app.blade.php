<!DOCTYPE html>
<html llang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

    <!-- <link href="{{ asset('themes/uikit/css/app.css') }}" rel="stylesheet"> -->

    <!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('themes/material/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('themes/material/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('themes/material/css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('themes/material/css/magnific-popup.css') }}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('themes/material/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('themes/material/css/owl.theme.default.min.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('themes/material/css/style.css') }}">

    <link href="{{ asset('themes/material/css/app.css') }}" rel="stylesheet">

    <!-- Modernizr JS -->
	<script src="{{ asset('themes/material/js/modernizr-2.6.2.min.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90745841-3"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-90745841-3');
	</script>

</head>
<body>
    
    <div class="colorlib-loader"></div>
    <div id="page">

        <!-- NAVIGATION MENU -->
        <div class="uk-nav-container" @if(Request::is('/')){{ 'uk-sticky' }}@endif>
            <div class="uk-container">
                <nav class="uk-navbar-container uk-margin uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left uk-logo-container">
                        <a class="uk-navbar-item uk-logo" href="/"><img src="{{ Voyager::image(theme('logo')) }}" style="height:35px;"></a>
                    </div>

                    @if(!Auth::guest())
                        <div id="uk-nav-left-mobile"><span class="more-btn" uk-icon="menu"></span><span class="close-btn uk-icon" uk-icon="close"></span></div>
                        <div class="uk-navbar-left uk-margin-left">
                            <ul class="uk-navbar-nav" id="uk-nav-left">
                                {!! menu('authenticated-menu', 'theme::menus.uikit') !!}
                            </ul>
                        </div>
                    @endif

                    <div class="uk-navbar-right">

                        <ul class="uk-navbar-nav @if(!Auth::guest()){{ 'uk-navbar-auth' }}@endif" id="uk-nav-right">
                            @if(Auth::guest())
                                {!! menu('guest-menu', 'theme::menus.uikit') !!}
                                <li class="uk-login"><a href="/login">Login</a></li>
                                <li>
                                    <a href="/register"><button class="uk-button uk-button-primary">Sign Up</button></a>
                                </li>
                                
                                @php $locale = session()->get('locale'); @endphp
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @switch($locale)
                                        @case('it')
                                        <span>Italian</span> 
                                        @break
                                        @default
                                        <span>English</span> 
                                    @endswitch<span class="caret"></span>
                                    </a>
                                    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style = "left: 0.5rem; padding-left: 0.5rem;">
                                        <a class="dropdown-item" href="lang/en"> <span> English </span> </a>
                                        </br>

                                        <a class="dropdown-item" href="lang/it"> <span> Italian </span> </a>
                                    </div>
                                </li>
                                
                            @else

                                @if( auth()->user()->onTrial() )
                                    <li><span class="trial-days">You have {{ auth()->user()->daysLeftOnTrial() }} @if(auth()->user()->daysLeftOnTrial() > 1){{ 'Days' }}@else{{ 'Day' }}@endif left on your @if(auth()->user()->subscription('main') && auth()->user()->subscription('main')->onTrial()){{ ucfirst(auth()->user()->role->name) . ' Plan' }}@else{{ 'Free' }}@endif Trial</span></li>
                                @endif

                                @if( auth()->user()->subscribed('main') && auth()->user()->subscription('main')->onGracePeriod() && !auth()->user()->onTrial() )
                                    <li><span class="trial-days">You have {{ auth()->user()->daysLeftOnGrace() }} @if(auth()->user()->daysLeftOnTrial() > 1){{ 'Days' }}@else{{ 'Day' }}@endif left on your {{ ucfirst(auth()->user()->role->name) . ' Plan' }}</span></li>
                                @endif

                                @if(!Request::is('notifications'))
                                    @include('theme::partials.notifications')
                                @endif

                                <li>
                                    <a href="#_" class="user-icon">
                                        <img src="{{ Voyager::image(Auth::user()->avatar) }}">
                                        <span uk-icon="icon: triangle-down"></span>
                                    </a>
                                    <div class="uk-navbar-dropdown uk-user-dropdown" id="user-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="user-dropdown-info">
                                                <img src="{{ Voyager::image(Auth::user()->avatar) }}">
                                                <div>
                                                    <p>{{ Auth::user()->name }}</p>
                                                    <span>{{ Auth::user()->username }}</span>
                                                </div>
                                            </li>
                                            <li><div class="uk-label uk-label-success uk-label-plan"  style="background:#{{ stringToColorCode(auth()->user()->role->display_name) }}">{{ auth()->user()->role->display_name }}</div></li>
                                            @if( auth()->user()->onTrial() && !auth()->user()->subscription('main') )
                                                <li><a href="{{ route('wave.settings', 'plans') }}"><span uk-icon="icon: cloud-upload"></span>Upgrade My Account</a></li>
                                            @endif
                                            @if(Voyager::can('browse_admin'))
                                                <li><a href="{{ route('voyager.dashboard') }}"><span uk-icon="icon: bolt"></span>Admin</a></li>
                                            @endif
                                            <li><a href="{{ route('wave.profile', Auth::user()->username) }}"><span uk-icon="icon: user"></span>My Profile</a></li>
                                            <li><a href="{{ route('wave.settings') }}"><span uk-icon="icon: cog"></span>Settings</a></li>
                                            <li class="uk-hidden@m"><a href="{{ route('wave.notifications') }}"><span uk-icon="icon: bell"></span>My Notifications</a></li>
                                            <li><a href="{{ route('logout') }}"><span uk-icon="icon: sign-out"></span>Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                                
                                    @php $locale = session()->get('locale'); @endphp
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        @switch($locale)
                                            @case('it')
                                            <span>Italian</span> 
                                            @break
                                            @default
                                            <span>English</span> 
                                        @endswitch<span class="caret"></span>
                                        </a>
                                        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style = "left: 0.5rem; padding-left: 0.5rem;">
                                            <a class="dropdown-item" href="lang/en"> <span> English </span> </a>
                                            </br>

                                            <a class="dropdown-item" href="lang/it"> <span> Italian </span> </a>
                                        </div>
                                    </li>
                                    <!-- <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Language <span class="caret"></span>
                                        </a>
                                        @switch($locale)
                                            @case('it')
                                            <img src="{{asset('frontEnd/images/it.png')}}" width="30px" height="20x"> Italian
                                            @break
                                            @default
                                            <img src="{{asset('frontEnd/images/en.png')}}" width="30px" height="20x"> English
                                        @endswitch
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="lang/en"><img src="{{asset('frontEnd/images/en.png')}}" width="30px" height="20x"> English</a>
                                            <a class="dropdown-item" href="lang/it"><img src="{{asset('frontEnd/images/it.png')}}" width="30px" height="20x"> Italian</a>
                                        </div>
                                    </li> -->
                               

                            @endif
                        </ul>
                        <div id="uk-nav-right-mobile"><span class="more-btn" uk-icon="more-vertical"></span><span class="close-btn uk-icon" uk-icon="close"></span></div>
                    </div>

                </nav>
            </div>
        </div>

        @yield('content')

        <!-- FOOTER SAME FOR ALL THE PAGES-->
          <footer id="colorlib-footer">
            <div class="container">
              <div class="row row-pb-md">
                <div class="col-md-4 colorlib-widget">
                  <h4>DentalManager</h4>
                  <p>DentalManager è un software gestionale per studi dentistici che permette di monitorare l'esito delle campagne di marketing</p>

                  <p>
                    <ul class="colorlib-social-icons">
                      {{--
                      <li><a href="#"><i class="icon-twitter"></i></a></li>
                      <li><a href="#"><i class="icon-facebook"></i></a></li>
                      <li><a href="#"><i class="icon-linkedin"></i></a></li>
                      <li><a href="#"><i class="icon-dribbble"></i></a></li>
                      --}}
                    </ul>
                  </p>
                </div>

                <div class="col-md-4 colorlib-widget">
                  <h4>Informazioni di contatto</h4>
                  <ul class="colorlib-footer-links">
                    <li><i class="icon-map"></i>&nbsp;{{-- VIA --}} 31100 - Treviso</li>
                    <li><a href="tel://1234567920"><i class="icon-phone"></i>&nbsp;{{-- NUMERO TELEFONO --}}</a></li>
                    <li><a href="mailto:info@dentalmanager.it"><i class="icon-envelope"></i>&nbsp;info@dentalmanager.it</a></li>
                    <li><a href="https://www.dentalmanager.it"><i class="icon-location4"></i>&nbsp;dentalmanager.it</a></li>
                    {{-- <li><b>PIVA</b> NUMERO PARTITA IVA</li> --}}
                  </ul>
                </div>

                <div class="col-md-4 colorlib-widget">
                    <h4>Come vengono gestiti i dati che raccogliamo?</h4>
                    <ul class="colorlib-footer-links">
                      <li><a href="https://www.dentalmanager.it/privacy">Informativa sulla privacy</a></li>
                      <li><a href="https://www.dentalmanager.it/cookies">Informativa sui cookies</a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="copy" style="padding: 0.5em 0;  opacity: 0.2;">
              <div class="container">
                <div class="row" style="color:none">
                  <div class="col-md-12 text-center">
                    <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <!-- END FOOTER SAME FOR ALL THE PAGES-->
    </div>

    <div class="gototop js-top">
      <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>


    @if(!auth()->guest() && auth()->user()->hasAnnouncements())
        @include('theme::partials.announcements')
    @endif

    <!-- Scripts -->
    <script src="{{ asset('themes/uikit/js/app.js') }}"></script>

    @yield('javascript')

    @impersonating
        @include('theme::partials.impersonation-bar')
    @endImpersonating

    <script>
        @if(session('message'))
            @php $message_type = (session('message_type') == 'info') ? 'primary' : session('message_type'); @endphp
            UIkit.notification('{{ session("message") }}', {status:'{{ $message_type }}', pos: 'top-right'})
        @endif
    </script>

    @if(setting('site.google_analytics_tracking_id', ''))
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-62970618-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', '{{ setting("site.google_analytics_tracking_id") }}');
        </script>

    @endif
    <!-- jQuery -->
    <script src="{{ asset('themes/material/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('themes/material/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('themes/material/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('themes/material/js/jquery.waypoints.min.js') }}"></script>
    <!-- Stellar Parallax -->
    <script src="{{ asset('themes/material/js/jquery.stellar.min.js') }}"></script>
    <!-- YTPlayer -->
    <script src="{{ asset('themes/material/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('themes/material/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('themes/material/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('themes/material/js/magnific-popup-options.js') }}"></script>
    <!-- Counters -->
    <script src="{{ asset('themes/material/js/jquery.countTo.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('themes/material/js/main.js') }}"></script>

  </body>
</html>
