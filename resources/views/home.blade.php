@extends('layouts.front')

@section('content')
<!--====== BANNER PART START ======-->

<section class="banner-area d-flex align-items-center bg_cover" style="background-image: url(public/front_assets/images/qAG3Tih1Xv.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="banner-content">
                    <h1 class="title wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".3s">Welcome to Our Site</h1>
                    <p class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".6s">Association of Fellow Gynaecologists is conceptualized for the need of a platform to share clinical experiences, seek solutions for practical difficulties and build bonds of trust & friendship with practicing Gynaecologists in the neighborhood whose busy routine practice keeps them away from sharpening their skills.</p>
                    <a class="main-btn wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".9s" href="#">Learn More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== BANNER PART ENDS ======-->

<!--====== SUB PART START ======-->

<section class="sub-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-9">
                <div class="sub-thumb mt-30">
                    <img src="{{asset('public/front_assets/images/stethoscope.png')}}" alt="sub" style="padding-left:20px;">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9">
                <div class="sub-item white-bg mt-30">
                    <h5 class="title">Clinical<br>Experiences</h5>
                    <img src="{{asset('public/front_assets/images/hospital.png')}}">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9">
                <div class="sub-item white-bg item-3 mt-30">
                    <h5 class="title">practical <br>Difficulties </h5>
                    <img src="{{asset('public/front_assets/images/health-check.png')}}">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9">
                <div class="sub-item white-bg item-4 mt-30">
                    <h5 class="title"> build bonds of trust </h5>
                    <img src="{{asset('public/front_assets/images/clinic.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== SUB PART ENDS ======-->

<!--====== WHY CHOOSE PART START ======-->

<section class="why-choose-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-9">
                <div class="why-choose-content">
                    <div class="content">
                        <span>Association of fellow Gynaecologists</span>
                        <br><br>
                        <p>Association of Fellow Gynaecologists was conceptualized by a group of Gynaecologists, 7 yrs ago (in year 2000); who felt the need for a platform to share their clinical experiences, seek solutions for their practical difficulties and build bonds of trust & friendship with their colleagues practicing in the neighborhood.</p>
                    </div>
                    <div class="choose-list d-block d-sm-flex">
                        <div class="item">
                            <i class="flaticon-graphic"></i>
                            <h6 class="title">Lorem ipsum dolor</h6>
                            <p>Lorem ipsum dolor sit amet, consec tetur adipis</p>
                        </div>
                        <div class="item">
                            <i class="flaticon-dollar"></i>
                            <h6 class="title">Lorem ipsum dolor</h6>
                            <p>Lorem ipsum dolor sit amet, consec tetur adipis</p>
                        </div>
                    </div>
                    <ul>
                        <li><a class="main-btn" href="#">View more <i class="flaticon-right-arrow"></i></a></li>
                        <li><a href="#"><i class="flaticon-layers"></i> more features </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why-choose-thumb">
                    <img src="{{asset('public/front_assets/images/doctor.jpg')}}" alt="">
                    <div class="play">
                        <a href="https://www.youtube.com/watch?v=AIne0kQCNZo&list=RDGMEMfhzoLwQjqfpiXic5LqFvjQ&index=1" class="video-popup">
                            <i class="fa fa-play"></i><br>
                            <span>Play video</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== WHY CHOOSE PART ENDS ======-->

<!--====== CLEAN DESIGNS PART START ======-->

<section class="clean-designs-area pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="clean-designs-thumb wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".3s">
                    <div class="item">
                        <img src="{{asset('public/front_assets/images/doctor.jpg')}}" alt="clean">
                        <div class="clean-designs-thumb-content text-center d-flex">
                            <div class="icon">
                                <ul>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                </ul>
                                <i class="flaticon-like"></i>
                            </div>
                            <div class="text text-left ml-15">
                                <h4 class="title"><span>25</span> years <br> of experience</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="clean-designs-content ml-50">
                    <div class="content">
                        <span>Msg from President</span>
                        <h3 class="title">Lorem ipsum dolor<br> Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                    </div>
                    <div class="clean-counter d-flex">
                        <div class="item mr-90">
                            <h2 class="title"><span class="counter">70</span>%</h2>
                            <span>Lorem ipsum dolor</span>
                        </div>
                        <div class="item ">
                            <h2 class="title"><span class="counter">100</span>%</h2>
                            <span>Lorem ipsum dolor/span>
                        </div>
                    </div>
                    <div class="clean-btn mt-45">
                        <a class="main-btn" href="#">View more <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== CLEAN DESIGNS PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section class="services-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="services-content mt-95">
                    <span>Our core values</span>
                    <h3 class="title">Lorem ipsum </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                    <a class="main-btn" href="#">View more <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="services-item mt-80">
                    <div class="services-thumb">
                    
                    </div>
                    <div class="services-item-content">
                           <img src="{{asset('public/front_assets/images/clinic.png')}}" alt="">
                        <h5 class="title">Lorem ipsum dolor <br>Lorem ipsum dolor</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="services-item mt-80">
                    <div class="services-thumb">
                     
                    </div>
                    <div class="services-item-content">
                          <img src="{{asset('public/front_assets/images/clinic.png')}}" alt="">
                        <h5 class="title">Lorem ipsum dolor <br> Lorem ipsum dolor</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="services-item mt-80">
                    <div class="services-thumb">
                     
                    </div>
                    <div class="services-item-content">
                         <img src="{{asset('public/front_assets/images/clinic.png')}}" alt="">
                        <h5 class="title">Lorem ipsum dolor <br> Lorem ipsum dolor</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="services-item mt-80">
                    <div class="services-thumb">
                       
                    </div>
                    <div class="services-item-content">
                    <img src="{{asset('public/front_assets/images/clinic.png')}}" alt="">
                        <h5 class="title">Lorem ipsum dolor <br> Lorem ipsum dolor</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="services-item mt-80">
                    <div class="services-thumb">
                        
                    </div>
                    <div class="services-item-content">
                        <img src="{{asset('public/front_assets/images/clinic.png')}}" alt="">
                        <h5 class="title">Lorem ipsum dolor <br>Lorem ipsum dolor</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== SERVICES PART ENDS ======-->

<!--====== TESTIMONIALS PART START ======-->

<section class="testimonials-area bg_cover" style="background-image: url(public/front_assets/images/testimonials-bg.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <span>Client Testimonials</span>
                    <h3 class="title">What our clients say </h3>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="testimonials-slider">
    <div class="container">
        <div class="row testimonials-active">
            <div class="col-lg-6">
                <div class="testimonials-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ULorem ipsum dolor</p>
                    <i class="flaticon-quote"></i>
                    <div class="info">
                        <img src="{{asset('public/front_assets/images/user.png')}}" alt="">
                        <span>Emma Banks</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonials-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ULorem ipsum dolor</p>
                    <i class="flaticon-quote"></i>
                    <div class="info">
                        <img src="{{asset('public/front_assets/images/user-2.png')}}" alt="">
                        <span>Emma Banks</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonials-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ULorem ipsum dolor</p>
                    <i class="flaticon-quote"></i>
                    <div class="info">
                        <img src="{{asset('public/front_assets/images/user.png')}}" alt="">
                        <span>Emma Banks</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== TESTIMONIALS PART ENDS ======-->

<!--====== PORTFOLIO PART START ======-->

<!--<section class="portfolio-area pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title section-title-2 text-center">
                    <span>Portfolio</span>
                    <h3 class="title">Case Study </h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="portfolio-item mt-30 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="0ms">
                    <img src="{{asset('public/front_assets/images/portfolio-1.jpg')}}" alt="portfolio">
                    <div class="portfolio-content">
                        <span>Business Strategy</span>
                        <h4 class="title">Award-Winning Work</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="portfolio-item mt-30 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                    <img src="{{asset('public/front_assets/images/portfolio-2.jpg')}}" alt="portfolio">
                    <div class="portfolio-content">
                        <span>Business Strategy</span>
                        <h4 class="title">Award-Winning Work</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="portfolio-item mt-30 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="600ms">
                    <img src="{{asset('public/front_assets/images/portfolio-3.jpg')}}" alt="portfolio">
                    <div class="portfolio-content">
                        <span>Business Strategy</span>
                        <h4 class="title">Award-Winning Work</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="portfolio-item mt-30 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="0ms">
                    <img src="{{asset('public/front_assets/images/portfolio-4.jpg')}}" alt="portfolio">
                    <div class="portfolio-content">
                        <span>Business Strategy</span>
                        <h4 class="title">Award-Winning Work</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="portfolio-item mt-30 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                    <img src="{{asset('public/front_assets/images/portfolio-5.jpg')}}" alt="portfolio">
                    <div class="portfolio-content">
                        <span>Business Strategy</span>
                        <h4 class="title">Award-Winning Work</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="portfolio-item mt-30 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="600ms">
                    <img src="{{asset('public/front_assets/images/portfolio-6.jpg')}}" alt="portfolio">
                    <div class="portfolio-content">
                        <span>Business Strategy</span>
                        <h4 class="title">Award-Winning Work</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PORTFOLIO PART ENDS ======-->

<!--====== TEAM PART START ======-->

<!--   <section class="team-area pt-115 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title section-title-2">
                    <span>Meet Our Team</span>
                    <h3 class="title">Our Creative Team</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mt-30">
                    <div class="team-thumb">
                        <img src="assets/images/team-1.jpg" alt="team">
                    </div>
                    <div class="team-content text-center white-bg">
                        <a href="#"><h4 class="title">David Smith</h4></a>
                        <span>Design Expert</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mt-30">
                    <div class="team-thumb">
                        <img src="assets/images/team-2.jpg" alt="team">
                    </div>
                    <div class="team-content text-center white-bg">
                        <a href="#"><h4 class="title">Barbara Smith</h4></a>
                        <span>painting director</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mt-30">
                    <div class="team-thumb">
                        <img src="assets/images/team-3.jpg" alt="team">
                    </div>
                    <div class="team-content text-center white-bg">
                        <a href="#"><h4 class="title">Robert Pineda</h4></a>
                        <span>Project Manager</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mt-30">
                    <div class="team-thumb">
                        <img src="assets/images/team-4.jpg" alt="team">
                    </div>
                    <div class="team-content text-center white-bg">
                        <a href="#"><h4 class="title">Jenna Sue</h4></a>
                        <span>Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->

<!--====== TEAM PART ENDS ======-->

<!--====== BLOG PART START ======-->

<section class="blog-area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title section-title-2 text-center">
                    <span>Latest News</span>
                    <h3 class="title">Our Insights & Articles </h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-9">
                <div class="blog-item mt-30 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-7 col-md-7 order-2 order-md-1">
                            <div class="blog-content">
                                <span>28 JANUARY, 2020   /   BY ADMIN</span>
                                <h4 class="title"><a href="#">New Accessories in Stock</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor </p>
                                <a href="#"><i class="flaticon-right-arrow-1"></i> VIEW MORE</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 order-1 order-md-2">
                            <div class="blog-thumb">
                                <img src="{{asset('public/front_assets/images/blog-1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-9">
                <div class="blog-item mt-30 wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7 order-2 order-md-1">
                            <div class="blog-content">
                                <span>28 JANUARY, 2020   /   BY ADMIN</span>
                                <h4 class="title"><a href="#">New Accessories in Stock</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor </p>
                                <a href="#"><i class="flaticon-right-arrow-1"></i> VIEW MORE</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 order-1 order-md-2">
                            <div class="blog-thumb">
                                <img src="{{asset('public/front_assets/images/blog-2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== BLOG PART ENDS ======-->
@endsection
