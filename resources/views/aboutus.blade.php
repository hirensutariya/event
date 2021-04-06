@extends('layouts.front')

@section('content') 
<!--====== PAGE TITLE PART START ======-->

<div class="page-title-area d-flex align-items-center bg_cover" style="background-image: url(assets/images/page-title-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">About Us</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #094074;
  font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container1 {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container1::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #d1651a;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container1 {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container1::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
</style>

<!--====== PAGE TITLE PART ENDS ======-->

<!--====== WHY CHOOSE PART START ======-->

<section class="why-choose-area why-choose-about pt-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-9">
                <div class="why-choose-content">
                    <div class="content">
                        <span>History of AFG</span>
                        <p>

Association of Fellow Gynaecologists was conceptualized by a group of Gynaecologists, 7 yrs ago (in year 2000); who felt the need for a platform to share their clinical experiences, seek solutions for their practical difficulties and build bonds of trust & friendship with their colleagues practicing in the neighborhood.
<br><br>
They also were keen to update their knowledge & promote academic activities in their own localities for practicing Gynaecologists like themselves, whose busy routine practice keeps them away from sharpening their skills.
<br><br>
Thus a humble beginning was made by senior Gynaecologists like Dr. P. R. Shah, Dr. Chandrakant Joshi, and Dr. R. M. Saraogi who were joined by many others to start group meetings to discuss cases & important topics 7 yrs ago.

</p>
                    </div>
                  <div class="choose-list d-block d-sm-flex">
                       <div class="item">
                            <i class="flaticon-graphic"></i>
                            <h6 class="title">Lorem ipsum</h6>
                            <p>Lorem ipsum dolor sit amet, consec tetur adipis</p>
                        </div>
                        <div class="item">
                            <i class="flaticon-dollar"></i>
                            <h6 class="title">Lorem ipsum</h6>
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

<div class="page-title-area d-flex align-items-center bg_cover" style="background-image: url(assets/images/page-title-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Our Mission</h3>
                     <p style="color:white;">Let us strive together for a brighter future by opening newer windows of knowledge & skills & building bridges of trust & fellowship with our colleagues.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== WHY CHOOSE PART ENDS ======-->

<!--====== SERVICES 2 PART START ======-->

 <section class="services-2-area services-about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title section-title-3 text-center">
                    <span>Our Core Values</span>
                    <h3 class="title">How we are different?</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="services-item mt-30 wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="0ms">
                    <i class="flaticon-money"></i>
                    <h5 class="title">Lorem ipsum dolor</h5>
                    <p>Lorem ipsum dolor sit amet, consec tetur adipis</p>
                    <a class="main-btn" href="#">Read More </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="services-item mt-30 wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <i class="flaticon-atm"></i>
                    <h5 class="title">Lorem ipsum dolor</h5>
                    <p>Lorem ipsum dolor sit amet, consec tetur adipis</p>
                    <a class="main-btn" href="#">Read More </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="services-item mt-30 wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <i class="flaticon-pie-chart"></i>
                    <h5 class="title">Lorem ipsum dolor</h5>
                    <p>Lorem ipsum dolor sit amet, consec tetur adipis</p>
                    <a class="main-btn" href="#">Read More </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== SERVICES 2 PART ENDS ======-->
<div class="timeline">
  <div class="container1 left">
    <div class="content">
      <h2>2000 Starting</h2>
      <p>Association of Fellow Gynaecologists was conceptualized by a group of Gynaecologists, 7 yrs ago (in year 2000); who felt the need for a platform to share their clinical experiences, seek solutions for their practical difficulties and build bonds of trust & friendship with their colleagues practicing in the neighborhood.</p>
    </div>
  </div>
  <div class="container1 right">
    <div class="content">
      <h2>End 2000</h2>
      <p>By the end of the year 2000, a formal body, Registered in the name of "Association of Fellow Gynaecologists" was established whose Life members were only to be Gynaecologists practicing or residing in the western suburbs of Mumbai.</p>
    </div>
  </div>
  <div class="container1 left">
    <div class="content">
      <h2>October 2001</h2>
      <p>The success of a full day Symposium on "Emergencies in Obstetrics & Gynaecology" in October 2001 set up the concept of Annual Scientific Conferences. The 6th such conference will be held shortly (Jan 2007). These conferences have been graced by several nationally & internationally renowned Gynaecologists.</p>
    </div>
  </div>
  <div class="container1 right">
    <div class="content">
      <h2>2005-2006</h2>
      <p>The association has also successfully organized two Live Operative Workshops in the years 2005 & 2006.</p>
    </div>
  </div>
  
</div>
<!--====== TEAM 2 PART START ======-->

<!--====== TEAM 2 PART ENDS ======-->

<!--====== TESTIMONIALS 2 PART START ======-->

<section class="testimonials-2-area testimonials-about">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-8">
                <div class="row testimonials-2-active">
                    <div class="col-lg-6">
                        <div class="testimonials-item-2">
                            <img src="{{asset('public/front_assets/images/testimonials-user-1.jpg')}}" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipis cing elit, sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam </p>
                            <div class="info">
                                <h5 class="title">Edward murphy</h5>
                                <span>HD Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonials-item-2">
                            <img src="{{asset('public/front_assets/images/testimonials-user-2.jpg')}}" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipis cing elit, sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam </p>
                            <div class="info">
                                <h5 class="title">Michael Brown</h5>
                                <span>HD Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonials-item-2">
                            <img src="{{asset('public/front_assets/images/testimonials-user-2.jpg')}}" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipis cing elit, sed diam nonummy nibh euismod tincid  unt ut laoreet dolore magna aliquam </p>
                            <div class="info">
                                <h5 class="title">Michael Brown</h5>
                                <span>HD Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== TESTIMONIALS 2 PART ENDS ======-->

<!--====== PORTFOLIO PART START ======-->

<!--<section class="portfolio-2-area pt-115 portfolio-about">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title section-title-3 text-center">
                    <span>Portfolio</span>
                    <h3 class="title">Case Study </h3>
                </div>
            </div>
        </div>
        <div class="row portfolio-active">
            <div class="col-lg-3">
                <div class="portfolio-thumb mt-30">
                    <img src="{{asset('public/front_assets/images/portfolio-7.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="portfolio-thumb mt-30">
                    <img src="{{asset('public/front_assets/images/portfolio-8.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="portfolio-thumb mt-30">
                    <img src="{{asset('public/front_assets/images/portfolio-9.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="portfolio-thumb mt-30">
                    <img src="{{asset('public/front_assets/images/portfolio-10.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="portfolio-thumb mt-30">
                    <img src="{{asset('public/front_assets/images/portfolio-11.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="portfolio-thumb mt-30">
                    <img src="{{asset('public/front_assets/images/portfolio-8.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PORTFOLIO PART ENDS ======-->

<!--====== FUN FACTS PART START ======-->
<!--
<section class="fun-facts-area fun-facts-about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-9">
                <div class="fun-facts-content">
                    <span class=" wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="0ms">Fun Facts</span>
                    <h3 class="title wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="300ms">We are help you  to grow your  business</h3>
                    <p class=" wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="600ms">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labLorem ipsum dolor sit amet, consectetur adip mod tempor incididunt</p>
                    <a class="main-btn wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="900ms" href="#">View more <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="fun-facts-progress">
                    <div class="progress-item d-block d-sm-flex justify-content-start justify-content-lg-end">
                        <div class="item">
                            <div class="box">
                                <div id="circle5"></div>
                                <h3 class="title"><span class="counter">90</span>%</h3>
                            </div>
                            <div class="content text-center">
                                <span>Projects Completed </span>
                            </div>
                        </div>
                        <div class="item ml-120">
                            <div class="box">
                                <div id="circle6"></div>
                                <h3 class="title"><span class="counter">76</span>%</h3>
                            </div>
                            <div class="content text-center">
                                <span>Customers </span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-item d-block d-sm-flex justify-content-start justify-content-lg-end mt-45">
                        <div class="item">
                            <div class="box">
                                <div id="circle7"></div>
                                <h3 class="title"><span class="counter">62</span>%</h3>
                            </div>
                            <div class="content text-center">
                                <span>Customers</span>
                            </div>
                        </div>
                        <div class="item ml-120">
                            <div class="box">
                                <div id="circle8"></div>
                                <h3 class="title"><span class="counter">85</span>%</h3>
                            </div>
                            <div class="content text-center">
                                <span>Projects Completed </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!--====== FUN FACTS PART ENDS ======-->

<!--====== FAQ PART START ======-->

<section class="faq-area faq-about bg_cover pt-115 pb-120" style="background-image: url(public/front_assets/images/faq-bg.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <span>FAQs</span>
                    <h3 class="title">Let’s Help </h3>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="faq-box-area faq-box-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="faq-box white-bg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="faq-accordion">
                                <div class="faq-accordion-content">
                                    <h4 class="title">Frequently Asked  Questions</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <a class="" href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Lorem ipsum dolor sit amet
                                            </a>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio</p>
                                            </div>
                                        </div>
                                    </div> <!-- card -->
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                               Lorem ipsum dolor sit amet
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio</p>
                                            </div>
                                        </div>
                                    </div> <!-- card -->
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Lorem ipsum dolor sit amet
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio</p>
                                            </div>
                                        </div>
                                    </div> <!-- card -->
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                               Lorem ipsum dolor sit amet
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio</p>
                                            </div>
                                        </div>
                                    </div> <!-- card -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-form">
                                <div class="faq-title">
                                    <h4 class="title">Free Consultation</h4>
                                </div>
                                <form action="#">
                                    <div class="input-box mt-20">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="input-box mt-20">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="input-box mt-20">
                                        <textarea name="#" id="#" cols="30" rows="10" placeholder="Messages"></textarea>
                                        <button class="main-btn mt-35" type="button">Send messages</button>
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

<!--====== FAQ PART ENDS ======-->

<!--====== BRAND PART START ======-->

<!--    <div class="brand-area pt-120">
        <div class="container">
            <div class="row brand-active">
                <div class="col-lg-3">
                    <div class="brand-item text-center">
                        <a href="#"><img src="assets/images/brand-11.png" alt="brand"></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item text-center">
                        <a href="#"><img src="assets/images/brand-12.png" alt="brand"></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item text-center">
                        <a href="#"><img src="assets/images/brand-13.png" alt="brand"></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item text-center">
                        <a href="#"><img src="assets/images/brand-14.png" alt="brand"></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item text-center">
                        <a href="#"><img src="assets/images/brand-15.png" alt="brand"></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item text-center">
                        <a href="#"><img src="assets/images/brand-12.png" alt="brand"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

<!--====== BRAND PART ENDS ======-->

@endsection