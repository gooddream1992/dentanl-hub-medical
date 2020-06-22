        <!-- main menu-->
        <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
        <div data-active-color="white" data-background-color="man-of-steel"
            data-image="{{ asset('themes/apex/img/sidebar-bg/01.jpg') }}" class="app-sidebar">
            <!-- main menu header-->
            <!-- Sidebar Header starts-->
            <div class="sidebar-header">
                <div class="logo clearfix"><a href="{{route('wave.dashboard')}}" class="logo-text float-left">
                        <div class="logo-img"><img src="{{ asset('themes/apex/img/logo.png') }}" /></div><span
                            class="text align-middle">APEX</span>
                    </a><a id="sidebarToggle" href="javascript:;"
                        class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded"
                            class="toggle-icon ft-toggle-right"></i></a><a id="sidebarClose" href="javascript:;"
                        class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
            </div>
            <!-- Sidebar Header Ends-->
            <!-- / main menu header-->
            <!-- main menu content-->
            <div class="sidebar-content">
                <div class="nav-container">
                    <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true"
                        class="navigation navigation-main">
                        <!-- <li class="has-sub nav-item"><a href="#"><i class="ft-home"></i><span data-i18n=""
                                    class="menu-title">Users</span><span
                                    class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span></a>
                            <ul class="menu-content">
                                <li class="active"><a href="{{route('newemploy')}}" class="menu-item">New Registers</a>
                                </li>
                                <li><a href="{{route('employ')}}" class="menu-item">Users</a>
                                </li>
                            </ul>
                        </li> -->
                        <li class=" nav-item"><a href="{{route('newemploy')}}"><i class="ft-droplet"></i><span data-i18n=""
                                    class="menu-title">New Registers</span></a>
                        </li>
                        <li class=" nav-item"><a href="{{route('employ')}}"><i class="ft-droplet"></i><span data-i18n=""
                                    class="menu-title">Users</span></a>
                        </li>
                        <!-- <li class=" nav-item"><a href="#"><i class="ft-droplet"></i><span data-i18n=""
                                    class="menu-title">Settings</span></a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <!-- main menu content-->
            <div class="sidebar-background"></div>
            <!-- main menu footer-->
            <!-- include includes/menu-footer-->
            <!-- main menu footer-->
        </div>
        <!-- / main menu-->