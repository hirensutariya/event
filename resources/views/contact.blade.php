@extends('layouts.front')

@section('content') 
<!--====== PAGE TITLE PART START ======-->

<div class="page-title-area d-flex align-items-center bg_cover" style="background-image: url(assets/images/page-title-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Contact</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE TITLE PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<div class="contact-area pt-90 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-item text-center mt-30">
                    <i class="flaticon-location"></i>
                    <h4 class="title">Our Address</h4>
                    <ul>
                        <li>510, SYNERGY,MAMLADARWADI ROAD, </li>
                        <li>KANCHPADA, MALAD (W),</li>
                        <li>MUMBAI 400064</li>
                    </ul>
                    <a class="main-btn" href="#">Directions</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-item text-center mt-30">
                    <i class="flaticon-dial-pad"></i>
                    <h4 class="title">Our Phone</h4>
                    <ul>
                        <li>Office Telephone : 0029129102320</li>
                        <li>Mobile : 000 2324 39493</li>
                    </ul>
                    <a class="main-btn" href="#">Call Us</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-item text-center mt-30">
                    <i class="flaticon-email"></i>
                    <h4 class="title">Our Email</h4>
                    <ul>
                        <li>Main Email : info@afg.org.in </li>
                        <li>Inquiries : info@afg.org.in</li>
                    </ul>
                    <a class="main-btn" href="#">Send a Message</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== CONTACT PART ENDS ======-->

<!--====== CONTACT PART ENDS ======-->
<div class="google-map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8962.26325483059!2d72.83477122621969!3d19.18788413678695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6ef0d5754d9%3A0x32ac2a934bfe0c48!2sAssociation+of+Fellow+Gynaecologist!5e0!3m2!1sen!2sin!4v1515161385862" width="900" height="400" frameborder="0" style="border:1" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!--====== CONTACT PART ENDS ======-->

<!--====== FAQ PART START ======-->

<section class="faq-area faq-about bg_cover pt-115 pb-120" style="background-image: url(assets/images/faq-bg.jpg);">
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
                                                Lorem ipsum dolor
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
                                                Lorem ipsum dolor
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
                                                Lorem ipsum dolor
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
                                               Lorem ipsum dolor
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

<!--  <div class="brand-area pt-120">
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