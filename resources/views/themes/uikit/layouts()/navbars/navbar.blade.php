@auth()
    @include('theme::layouts.navbars.navs.auth')
@endauth
    
@guest()
    @include('theme::layouts.navbars.navs.guest')
@endguest