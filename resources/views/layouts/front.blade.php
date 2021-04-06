<!doctype html>
<html lang="en">

    <head>

        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--====== Title ======-->
        <title>Association of fellow Gynaecologists</title>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{asset('public/front_assets/images/logo.jpg')}}" type="image/png">

        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{asset('public/front_assets/css/bootstrap.min.css')}}">

        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="{{asset('public/front_assets/css/font-awesome.min.css')}}">

        <!--====== flaticon css ======-->
        <link rel="stylesheet" href="{{asset('public/front_assets/css/flaticon.css')}}">

        <!--====== nice select css ======-->
        <link rel="stylesheet" href="{{asset('public/front_assets/css/nice-select.css')}}">

        <!--====== animate css ======-->
        <link rel="stylesheet" href="{{asset('public/front_assets/css/animate.css')}}">

        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="{{asset('public/front_assets/css/magnific-popup.css')}}">

        <!--====== Slick css ======-->
        <link rel="stylesheet" href="{{asset('public/front_assets/css/slick.css')}}">

        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{asset('public/front_assets/css/default.css')}}">

        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{asset('public/front_assets/css/style.css')}}">


    </head>

    <body>

        <!--====== PRELOADER PART START ======-->

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div>

        <!--====== PRELOADER PART ENDS ======-->

        <!--====== HEADER-AREA PART START ======-->

        <header class="header-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top d-flex justify-content-between">
                            <div class="header-top-info d-none d-md-block">
                                <ul>
                                    <li><a href="#"><i class="fa fa-map-marker"></i> 510, SYNERGY,MAMLADARWADI ROAD,KANCHPADA, MALAD (W),MUMBAI 400064.</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> info@afg.org.in</a></li>
                                </ul>
                            </div>
                            <div class="header-top-social">
                                <select>
                                    <option value="1">English</option>
                                    <option value="2">Bangla</option>
                                    <option value="3">Hindi</option>
                                    <option value="4">Spanish</option>
                                </select>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="{{route('home')}}">
                                    <img src="{{asset('public/front_assets/images/logo.jpg')}}" alt="Logo">
                                </a> <!-- logo -->

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarFive" aria-controls="navbarFive" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button> <!-- navbar toggler -->
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarFive">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item">
                                            <a class="page-scroll" href="{{route('home')}}">Home</a>

                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="{{route('page.aboutus')}}">About <span>+</span> </a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('page.commite_emembers')}}">Commitee Members</a></li>
                                                <li><a href="{{route('page.cme_photos')}}">CME Photos</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="{{route('page.team')}}">Presidents Wall </a>
                                        </li>
                                        <!-- <li class="nav-item">
                                             <a class="page-scroll" href="#">Services <span>+</span></a>
                                             <ul class="sub-menu">
                                                 <li><a href="services-1.html">Services 1</a></li>
                                                 <li><a href="services-2.html">Services 2</a></li>
                                                 <li><a href="services-details.html">Services Details</a></li>
                                             </ul>
                                         </li>
                                         <li class="nav-item">
                                             <a class="page-scroll" href="#">Pages <span>+</span></a>
                                             <ul class="sub-menu">
                                                 <li><a href="faq.html">Faq</a></li>
                                                 <li><a href="portfolio.html">Portfolio</a></li>
                                                 <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                 <li><a href="team.html">Team</a></li>
                                                 <li><a href="team-details.html">Team Details</a></li>
                                             </ul>
                                         </li>-->
                                        <li class="nav-item">
                                            <a class="page-scroll" href="{{route('page.blog')}}">Blog <span>+</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('page.agenda_for_meeting')}}">Agenda for Meeting</a></li>
                                                <li><a href="{{route('page.press_release')}}">Press Release</a></li>
                                                <li><a href="{{route('page.constitution')}}">Constitution</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="{{route('page.events')}}">Event</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="{{route('page.contactus')}}">contact</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="navbar-btn d-none d-sm-inline-block">
                                    @guest
                                    <a class="main-btn ml-20" href="{{route('login')}}"> Login/Registration <i class="flaticon-right-arrow"></i></a>

                                    <!--<a class="main-btn ml-20" href="{{route('register')}}"> Registration <i class="flaticon-right-arrow"></i></a>-->
                                    @else

<!--                                    <a class="main-btn ml-20" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>-->

                                    <a class="main-btn ml-20" href="{{ route('user.dashboard') }}">
                                        Dashboard
                                    </a>
<!--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>-->


                                    @endguest
                                </div>
                            </nav> <!-- navbar -->
                        </div>
                    </div>
                </div>
            </div>
        </header>   

        <!--====== HEADER-AREA PART ENDS ======-->
        @yield('content')

        <!--====== SUBSCRIBE PART START ======-->

        <!--      <div class="subscribe-area">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="subscribe-box">
                                  <div class="row align-items-center">
                                      <div class="col-lg-6">
                                          <div class="subscribe-info pl-65">
                                              <h3 class="title">Need Consultation?</h3>
                                              <ul>
                                                  <li><a href="tel:+84935815989">Phone: +84 935 815 989</a></li>
                                                  <li><a href="mailto:borexonline@mail.com">Email: info@afg.org.in
      </a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="subscribe-info pl-50 pr-70">
                                              <h3 class="title">Need Consultation?</h3>
                                              <form action="#">
                                                  <div class="input-box">
                                                      <input type="email" placeholder="Email">
                                                      <button type="button">Subscribe</button>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>-->

        <!--====== SUBSCRIBE PART ENDS ======-->

        <!--====== FOOTER PART START ======-->

        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="footer-content mt-30">
                            <a href="index.html"><img src="{{asset('public/front_assets/images/logo.jpg')}}" alt="logo"></a>
                            <p>Lorem ipsum dolor sit amet, consect etuer adipiscing elit, sed diam nonu mmy nibh euismod tincid </p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-list mt-30">
                            <h3 class="title">Services</h3>
                            <ul>
                                <li><a href="#">Conditions</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">New Guests List</a></li>
                                <li><a href="#">The Team List</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-list item-2 mt-30 pl-45">
                            <h3 class="title">Useful Links</h3>
                            <ul>
                                <li><a href="#">Conditions</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">New Guests List</a></li>
                                <li><a href="#">The Team List</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-instagram mt-30">
                            <h3 class="title">Instagram</h3>
                            <ul>
                                <li>
                                    <a href="#"><img src="{{asset('public/front_assets/images/ins-1.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('public/front_assets/images/ins-2.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('public/front_assets/images/ins-3.jpg')}}" alt=""></a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#"><img src="{{asset('public/front_assets/images/ins-4.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('public/front_assets/images/ins-5.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('public/front_assets/images/ins-6.jpg')}}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copyright-item">
                                <p>© Association of fellow Gynaecologists 2021 | All Rights Reserved</p>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--====== FOOTER PART ENDS ======-->

        <!--====== GO TO TOP PART START ======-->

        <div class="go-top-area">
            <div class="go-top-wrap">
                <div class="go-top-btn-wrap">
                    <div class="go-top go-top-btn">
                        <i class="fa fa-angle-double-up"></i>
                        <i class="fa fa-angle-double-up"></i>
                    </div>
                </div>
            </div>
        </div>

        <!--====== GO TO TOP PART ENDS ======-->


        <!--====== jquery js ======-->
        <script src="{{asset('public/front_assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
        <script src="{{asset('public/front_assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

        <!--====== Bootstrap js ======-->
        <script src="{{asset('public/front_assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/front_assets/js/popper.min.js')}}"></script>

        <!--====== Slick js ======-->
        <script src="{{asset('public/front_assets/js/slick.min.js')}}"></script>

        <!--====== Isotope js ======-->
        <script src="{{asset('public/front_assets/js/isotope.pkgd.min.js')}}"></script>

        <!--====== nice select js ======-->
        <script src="{{asset('public/front_assets/js/jquery.nice-select.min.js')}}"></script>

        <!--====== counterup js ======-->
        <script src="{{asset('public/front_assets/js/jquery.counterup.min.js')}}"></script>

        <!--====== circle progress js ======-->
        <script src="{{asset('public/front_assets/js/circle-progress.min.js')}}"></script>

        <!--====== waypoints js ======-->
        <script src="{{asset('public/front_assets/js/waypoints.min.js')}}"></script>

        <!--====== wow js ======-->
        <script src="{{asset('public/front_assets/js/wow.min.js')}}"></script>

        <!--====== Images Loaded js ======-->
        <script src="{{asset('public/front_assets/js/imagesloaded.pkgd.min.js')}}"></script>

        <!--====== Magnific Popup js ======-->
        <script src="{{asset('public/front_assets/js/jquery.magnific-popup.min.js')}}"></script>

        <!--====== Main js ======-->
        <script src="{{asset('public/front_assets/js/main.js')}}"></script>

    </body>

</html>
