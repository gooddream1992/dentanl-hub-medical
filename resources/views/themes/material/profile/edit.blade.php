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
                    <!--User Profile Starts-->
                    <!--Basic User Details Starts-->
                    <section id="user-profile">
                        <div class="row">
                            <div class="col-12">
                                <div class="card profile-with-cover">
                                    <div class="card-img-top img-fluid bg-cover height-300"
                                        style="background: url('themes/apex/img/photos/14.jpg') 50%;"></div>
                                    <div class="media profil-cover-details row">
                                        <div class="col-5">
                                            <div class="align-self-start halfway-fab pl-3 pt-2">
                                                <div class="text-left">
                                                    <h3 class="card-title white">Jose Diaz</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="align-self-center halfway-fab text-center">
                                                <a class="profile-image">
                                                    <img src="{{ asset('themes/apex/img/portrait/avatars/avatar-08.png') }}"
                                                        class="rounded-circle img-border gradient-summer width-100"
                                                        alt="Card image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                        </div>
                                        <div class="profile-cover-buttons">
                                            <div class="media-body halfway-fab align-self-end">
                                                <div class="text-right d-none d-sm-none d-md-none d-lg-block">
                                                    <button type="button" class="btn btn-primary btn-raised mr-2"><i
                                                            class="fa fa-plus"></i> Follow</button>
                                                    <button type="button" class="btn btn-success btn-raised mr-3"><i
                                                            class="fa fa-dashcube"></i> Message</button>
                                                </div>
                                                <div class="text-right d-block d-sm-block d-md-block d-lg-none">
                                                    <button type="button" class="btn btn-primary btn-raised mr-2"><i
                                                            class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-success btn-raised mr-3"><i
                                                            class="fa fa-dashcube"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-section">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 ">
                                                <ul class="profile-menu no-list-style">
                                                    <li>
                                                        <a href="#about"
                                                            class="primary font-medium-2 font-weight-600">About</a>
                                                    </li>
                                                    <li>
                                                        <a href="#user"
                                                            class="primary font-medium-2 font-weight-600">Timeline</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2 col-md-2 text-center">
                                                <span class="font-medium-2 text-uppercase">Jose Diaz</span>
                                                <p class="grey font-small-2">Ninja Developer</p>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <ul class="profile-menu no-list-style">
                                                    <li>
                                                        <a href="#friends"
                                                            class="primary font-medium-2 font-weight-600">Friends</a>
                                                    </li>
                                                    <li>
                                                        <a href="#photos"
                                                            class="primary font-medium-2 font-weight-600">Photos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Basic User Details Ends-->

                    <!--About section starts-->
                    <section id="about">
                        <div class="row">
                            <div class="col-12">
                                <div class="content-header">About</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Personal Information</h5>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <span class="text-bold-500 primary">About Me:</span>
                                                <span class="d-block overflow-hidden">Hi, I’m Jose, I’m 29 and I work as
                                                    a Ninja Developer for the
                                                    “PIXINVENT” Creative Studio. In my research, I follow the flow of
                                                    early medieval slavery from viking
                                                    raids in the west, through the booming ports of the Scandinavian
                                                    north, and out into the Islamic world.
                                                    Reading texts against the grain and seeing artifacts as traces of
                                                    the past can make their lives once
                                                    again visible to us today. This website documents my efforts to do
                                                    just that, and I hope it will prove
                                                    a resource and an inspiration for others in similar pursuits.
                                                </span>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="icon-present font-small-3"></i>
                                                                    Birthday:</a></span>
                                                            <span class="d-block overflow-hidden">June 10th, 1988</span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-map-pin font-small-3"></i>
                                                                    Birthplace:</a></span>
                                                            <span class="d-block overflow-hidden">New Jersey, USA</span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-globe font-small-3"></i> Lives
                                                                    in:</a></span>
                                                            <span class="d-block overflow-hidden">Denver, USA</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-user font-small-3"></i>
                                                                    Gender:</a></span>
                                                            <span class="d-block overflow-hidden">Male</span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-mail font-small-3"></i>
                                                                    Email:</a></span>
                                                            <a class="d-block overflow-hidden">jose@yourmail.com</a>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-monitor font-small-3"></i>
                                                                    Website:</a></span>
                                                            <a class="d-block overflow-hidden">pixinvent.com</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-smartphone font-small-3"></i> Phone
                                                                    Number:</a></span>
                                                            <span class="d-block overflow-hidden">(012) 345 - 678 -
                                                                9910</span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-briefcase font-small-3"></i>
                                                                    Occupation:</a></span>
                                                            <span class="d-block overflow-hidden">Ninja Developer</span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                        class="ft-book font-small-3"></i>
                                                                    Joined:</a></span>
                                                            <span class="d-block overflow-hidden">April 1st, 2012</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="mt-3">
                                                <span class="text-bold-500 primary">Hobbies:</span>
                                                <span class="d-block overflow-hidden">I like to ride the cycle to work,
                                                    swimming, listning music and
                                                    working out. I also like reading magazines, go to museums, watching
                                                    good movies and eat spicy food
                                                    while
                                                    it’s raining outside.Twin siblings Dipper and Mabel Pines spend the
                                                    summer at their uncle's tourist
                                                    trap
                                                    in the enigmatic town of Gravity Falls.A mysterious Hollywood
                                                    stuntman and mechanic moonlights as a
                                                    getaway driver.Scuba Diving, Skiing, Surfing, Photography, Long
                                                    drive.
                                                </span>
                                            </div>
                                            <div class="mt-2 overflow-hidden">
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="icon-plane danger font-large-2"></i>
                                                    <div class="mt-2">Travelling</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="icon-speedometer danger font-large-2"></i>
                                                    <div class="mt-2">Driving</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="icon-camera danger font-large-2"></i>
                                                    <div class="mt-2">Photography</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="icon-game-controller danger font-large-2"></i>
                                                    <div class="mt-2">Gaming</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="icon-music-tone-alt danger font-large-2"></i>
                                                    <div class="mt-2">Music</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="ft-monitor danger font-large-2"></i>
                                                    <div class="mt-2">Surfing</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="ft-pie-chart danger font-large-2"></i>
                                                    <div class="mt-2">Foodie</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="ft-tv danger font-large-2"></i>
                                                    <div class="mt-2">TV</div>
                                                </span>
                                                <span class="mr-3 mt-2 text-center float-left width-100"> <i
                                                        class="icon-basket-loaded danger font-large-2"></i>
                                                    <div class="mt-2">Shopping</div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Educational Information</h5>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="primary text-bold-500"><a><i
                                                                        class="ft-home font-small-3"></i> Broklin
                                                                    Institute</a></span>
                                                            <span
                                                                class="grey line-height-0 d-block mb-2 font-small-2">2008
                                                                - 2009</span>
                                                            <span
                                                                class="line-height-2 d-block overflow-hidden">Professor:
                                                                Leonardo Stagg. Six months of best
                                                                Developing tools course.</span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="primary text-bold-500"><a><i
                                                                        class="ft-home font-small-3"></i> The Ninja
                                                                    College </a></span>
                                                            <span
                                                                class="grey line-height-0 d-block mb-2 font-small-2">2012
                                                                - 2013</span>
                                                            <span
                                                                class="line-height-2 d-block overflow-hidden">Professor:
                                                                Steve Ustreil. Gave me the best
                                                                educational information for Ninja.</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="primary text-bold-500"><a><i
                                                                        class="ft-home font-small-3"></i> Ninja
                                                                    Developer</a></span>
                                                            <span
                                                                class="grey line-height-0 d-block mb-2 font-small-2">2009-2011</span>
                                                            <span class="line-height-2 d-block overflow-hidden">Ninja
                                                                Developer for the “PIXINVENT” creative
                                                                studio. </span>
                                                        </li>
                                                        <li class="mb-2">
                                                            <span class="primary text-bold-500"><a><i
                                                                        class="ft-home font-small-3"></i> Senior Ninja
                                                                    Developer</a></span>
                                                            <span
                                                                class="grey line-height-0 d-block mb-2 font-small-2">2014-Now</span>
                                                            <span class="line-height-2 d-block overflow-hidden">Senior
                                                                Ninja Developer for the “PIXINVENT”
                                                                creative studio.</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--About section ends-->

                    <!--User Timeline section starts-->
                    <section id="user">
                        <div class="row">
                            <div class="col-12">
                                <div class="content-header">User Timeline</div>
                            </div>
                        </div>
                        <div id="timeline" class="timeline-center timeline-wrapper">
                            <ul class="timeline">
                                <li class="timeline-line"></li>
                                <li class="timeline-group">
                                    <a class="btn btn-raised btn-primary"><i class="fa fa-calendar-o"></i> Today</a>
                                </li>
                            </ul>
                            <ul class="timeline">
                                <li class="timeline-line"></li>
                                <li class="timeline-item">
                                    <div class="timeline-badge">
                                        <span class="bg-red bg-lighten-1" data-toggle="tooltip" data-placement="right"
                                            title="Portfolio project work"><i class="fa fa-plane"></i></span>
                                    </div>
                                    <div class="timeline-card card border-grey border-lighten-2">
                                        <div class="card-header">
                                            <h4 class="mb-0 card-title"><a>Portfolio project work</a></h4>
                                            <div class="card-subtitle text-muted mt-0">
                                                <span class="font-small-3">5 hours ago</span>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <img class="img-fluid" src="{{ asset('themes/apex/img/photos/06.jpg') }}"
                                                alt="Timeline Image 1">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse
                                                        ornare dolor vitae libero
                                                        hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta
                                                        ut orci sed, fermentum bibendum nisi.</p>
                                                    <div class="list-inline mb-1">
                                                        <span class="pr-1"><a class="primary"><span
                                                                    class="fa fa-thumbs-o-up"></span> Like</a></span>
                                                        <span class="pr-1"><a class="primary"><span
                                                                    class="fa fa-commenting-o"></span>
                                                                Comment</a></span>
                                                        <span><a class="primary"><span class="fa fa-share-alt"></span>
                                                                Share</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer px-0 py-0">
                                                <div class="card-body">
                                                    <form>
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left mb-0">
                                                            <input type="text" class="form-control"
                                                                placeholder="Write comments...">
                                                            <div class="form-control-position">
                                                                <i class="fa fa-dashcube"></i>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item mt-5">
                                    <div class="timeline-badge">
                                        <span class="avatar avatar-online" data-toggle="tooltip" data-placement="right"
                                            title="Eu pid nunc urna integer"><img
                                                src="{{ asset('themes/apex/img/portrait/small/avatar-s-5.png') }}') }}" alt="avatar"
                                                width="40"></span>
                                    </div>
                                    <div class="timeline-card card card-inverse">
                                        <img class="card-img img-fluid" src="{{ asset('themes/apex/img/photos/07.jpg') }}"
                                            alt="Card image">
                                        <div class="card-img-overlay bg-overlay">
                                            <h4 class="card-title">Good Morning</h4>
                                            <p class="card-text"><small>15 hours ago</small></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <!-- 2016 -->
                            <ul class="timeline">
                                <li class="timeline-line"></li>
                                <li class="timeline-group">
                                    <a class="btn btn-raised btn-primary"><i class="fa fa-calendar-o"></i> 2016</a>
                                </li>
                            </ul>
                            <ul class="timeline">
                                <li class="timeline-line"></li><!-- /.timeline-line -->
                                <li class="timeline-item">
                                    <div class="timeline-badge">
                                        <span class="bg-warning bg-darken-1" data-toggle="tooltip"
                                            data-placement="right" title="Application API Support"><i
                                                class="fa fa-life-ring"></i></span>
                                    </div>
                                    <div class="timeline-card card border-grey border-lighten-2">
                                        <div class="card-header">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a>
                                                        <span class="avatar avatar-md avatar-busy"><img
                                                                src="{{ asset('themes/apex/img/portrait/small/avatar-s-11.png') }}"
                                                                alt="avatar" width="50"></span>
                                                        <i></i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="mb-0 card-title"><a>Application API Support</a></h4>
                                                    <div class="card-subtitle text-muted mt-0">
                                                        <span class="font-small-3">15 Oct, 2016 at 8.00 A.M</span>
                                                        <span
                                                            class="tag tag-pill tag-default tag-warning float-right">High</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <img class="img-fluid" src="{{ asset('themes/apex/img/photos/08.jpg') }}"
                                                alt="Timeline Image 1">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse
                                                        ornare dolor vitae libero
                                                        hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta
                                                        ut orci sed, fermentum bibendum nisi.</p>
                                                    <div class="list-inline mb-1">
                                                        <span class="pr-1"><a class="primary"><span
                                                                    class="fa fa-commenting-o"></span>
                                                                Comment</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer px-0 py-0">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a>
                                                                <span class="avatar avatar-online"><img
                                                                        src="{{ asset('themes/apex/img/portrait/small/avatar-s-14.png') }}"
                                                                        alt="avatar" width="50"></span>
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text-bold-600 mb-0"><a>Crystal Lawson</a></p>
                                                            <p class="m-0">Cras sit amet nibh libero, in gravida nulla.
                                                                Nulla vel metus scelerisque ante
                                                                sollicitudin commodo.</p>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a>
                                                                        <span class="avatar avatar-online"><img
                                                                                src="{{ asset('themes/apex/img/portrait/small/avatar-s-16.png') }}"
                                                                                alt="avatar" width="50"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <p class="text-bold-600 mb-0"><a>Rafila Găitan</a>
                                                                    </p>
                                                                    <p>Gravida nulla. Nulla vel metus scelerisque ante
                                                                        sollicitudin.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form>
                                                        <fieldset
                                                            class="form-group position-relative has-icon-left mb-0">
                                                            <input type="text" class="form-control"
                                                                placeholder="Write comments...">
                                                            <div class="form-control-position">
                                                                <i class="fa fa-dashcube"></i>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item mt-5">
                                    <div class="timeline-badge">
                                        <span class="bg-amber bg-darken-1" data-toggle="tooltip" data-placement="left"
                                            title="Quote of the day"><i class="fa fa-smile-o"></i></span>
                                    </div>
                                    <div class="timeline-card card border-grey border-lighten-2">
                                        <div class="card-header">
                                            <h4 class="mb-0 card-title"><a>Quote of the day</a></h4>
                                            <div class="card-subtitle text-muted mt-0">
                                                <span class="font-small-3">03 March, 2016 at 5 P.M</span>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <img class="img-fluid" src="{{ asset('themes/apex/img/photos/09.jpg') }}"
                                                alt="Timeline Image 1">
                                            <div class="card-body">
                                                <blockquote class="card-bodyquote">
                                                    <p class="card-text">Eu pid nunc urna integer, sed, cras tortor
                                                        scelerisque penatibus facilisis a
                                                        pulvinar, rhoncus sagittis ut nunc elit! Sociis in et?</p>
                                                    <footer>Someone famous in <cite title="Source Title"> - Source
                                                            Title</cite></footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- 2015 -->
                            <ul class="timeline">
                                <li class="timeline-line"></li>
                                <li class="timeline-group">
                                    <a class="btn btn-raised btn-primary"><i class="fa fa-calendar-o"></i> Founded in
                                        2015</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!--User Timeline section ends-->

                    <!--User's friend section starts-->
                    <section id="friends">
                        <div class="row">
                            <div class="col-12">
                                <div class="content-header">Friends</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <img src="{{ asset('themes/apex/img/portrait/small/avatar-s-3.png') }}" alt="Brek" width="150"
                                            class="rounded-circle gradient-mint">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Brek Padio</h4>
                                            <p class="category text-gray font-small-4">CEO / Co-Founder</p>
                                            <a class="btn btn-lg gradient-mint font-small-2 white p-2 mr-2">Add as
                                                Friend</a>
                                            <a class="btn btn-lg btn-outline-grey font-small-2 p-2">Message</a>
                                            <hr class="grey">
                                            <div class="row grey">
                                                <div class="col-4">
                                                    <a><i class="ft-star mr-1"></i> <span>4.9</span></a>
                                                </div>
                                                <div class="col-4">
                                                    <a><i class="ft-globe mr-1"></i> <span>USA</span></a>
                                                </div>
                                                <div class="col-4">
                                                    <a><i class="ft-book mr-1"></i> <span>21</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <img src="{{ asset('themes/apex/img/portrait/small/avatar-s-18.png') }}" alt="Jassi" width="150"
                                            class="rounded-circle gradient-pomegranate">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Jassi Lee</h4>
                                            <p class="category text-gray font-small-4">Ninja Developer</p>
                                            <a class="btn btn-lg gradient-pomegranate font-small-2 white p-2 mr-2">Add
                                                as Friend</a>
                                            <a class="btn btn-lg btn-outline-grey font-small-2 p-2">Message</a>
                                            <hr class="grey">
                                            <div class="row grey">
                                                <div class="col-4">
                                                    <a><i class="ft-star mr-1">star</i> <span>4.7</span></a>
                                                </div>
                                                <div class="col-4">
                                                    <a><i class="ft-globe mr-1"></i> <span>Canada</span></a>
                                                </div>
                                                <div class="col-4">
                                                    <a><i class="ft-book mr-1"></i> <span>14</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <img src="{{ asset('themes/apex/img/portrait/small/avatar-s-11.png') }}" alt="Brek" width="150"
                                            class="rounded-circle gradient-orange-amber">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Peter Steven</h4>
                                            <p class="category text-gray font-small-4">Android Developer</p>
                                            <a class="btn btn-lg gradient-orange-amber font-small-2 white p-2 mr-2">Add
                                                as Friend</a>
                                            <a class="btn btn-lg btn-outline-grey font-small-2 p-2">Message</a>
                                            <hr class="grey">
                                            <div class="row grey">
                                                <div class="col-4">
                                                    <a><i class="ft-star mr-1">star</i> <span>5.0</span></a>
                                                </div>
                                                <div class="col-4">
                                                    <a><i class="ft-globe mr-1"></i> <span>India</span></a>
                                                </div>
                                                <div class="col-4">
                                                    <a><i class="ft-book mr-1"></i> <span>18</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <img src="{{ asset('themes/apex/img/portrait/small/avatar-s-6.png') }}" alt="Maitri" width="150"
                                            class="rounded-circle gradient-red-pink">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Maitri Rajput</h4>
                                            <p class="category text-gray font-small-4">UX Designer</p>
                                            <a class="btn btn-lg gradient-red-pink font-small-2 white p-2 mr-2">Add as
                                                Friend</a>
                                            <a class="btn btn-lg btn-outline-grey font-small-2 p-2">Message</a>
                                            <hr class="grey">
                                            <div class="row grey">
                                                <div class="col-4">
                                                    <a><i class="ft-star mr-1">star</i> <span>4.5</span></a>
                                                </div>
                                                <div class="col-4">
                                                    <a><i class="ft-globe mr-1"></i> <span>India</span></a>
                                                </div>
                                                <div class="col-4">
                                                    <a><i class="ft-book mr-1"></i> <span>19</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <img src="{{ asset('themes/apex/img/portrait/small/avatar-s-9.png') }}" alt="Anibal" width="150"
                                            class="rounded-circle gradient-blackberry">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Anibal Santo</h4>
                                            <p class="category text-gray font-small-4">Project Developer</p>
                                            <a class="btn btn-lg gradient-blackberry font-small-2 white p-2 mr-2">Add as
                                                Friend</a>
                                            <a class="btn btn-lg btn-outline-grey font-small-2 p-2">Message</a>
                                            <hr class="grey">
                                            <div class="row grey">
                                                <div class="col-4">
                                                    <a><i class="ft-star mr-1">star</i> <span>4.8</span></a>
                                                </div>
                                                <div class="col-4">
                                                    <a><i class="ft-globe mr-1"></i> <span>London</span></a>
                                                </div>
                                                <div class="col-4">
                                                    <a><i class="ft-book mr-1"></i> <span>20</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <img src="{{ asset('themes/apex/img/portrait/small/avatar-s-12.png') }}" alt="Gini" width="150"
                                            class="rounded-circle gradient-back-to-earth">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Gini Fredre</h4>
                                            <p class="category text-gray font-small-4">HR</p>
                                            <a class="btn btn-lg gradient-back-to-earth font-small-2 white p-2 mr-2">Add
                                                as Friend</a>
                                            <a class="btn btn-lg btn-outline-grey font-small-2 p-2">Message</a>
                                            <hr class="grey">
                                            <div class="row grey">
                                                <div class="col-4">
                                                    <a><i class="ft-star mr-1">star</i> <span>4.4</span></a>
                                                </div>
                                                <div class="col-4">
                                                    <a><i class="ft-globe mr-1"></i> <span>Korea</span></a>
                                                </div>
                                                <div class="col-4">
                                                    <a><i class="ft-book mr-1"></i> <span>15</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--User's friend section starts-->

                    <!--User's uploaded photos section starts-->
                    <section id="photos">
                        <div class="row">
                            <div class="col-12">
                                <div class="content-header">Photos</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Photos Uploaded</h5>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="row">
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/1.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/2.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/3.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/4.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                            </div>
                                            <div class="row">
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/5.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/6.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/7.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/8.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                            </div>
                                            <div class="row">
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/9.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/10.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/11.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/12.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                            </div>
                                            <div class="row">
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/13.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/14.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/15.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                                <figure class="col-lg-3 col-md-6 col-12">
                                                    <img class="img-thumbnail img-fluid"
                                                        src="{{ asset('themes/apex/img/gallery/16.jpg') }}" itemprop="thumbnail"
                                                        alt="Image description" />
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--User's uploaded photos section starts-->
                    <!--User Profile Starts-->

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

    <!-- BEGIN VENDOR JS-->

    @endsection