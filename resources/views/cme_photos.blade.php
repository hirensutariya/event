@extends('layouts.front')

@section('content')  
<!--====== PAGE TITLE PART START ======-->
    
    <div class="page-title-area d-flex align-items-center bg_cover" style="background-image: url(assets/images/page-title-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content text-center">
                        <h3 class="title">Portfolio</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== PAGE TITLE PART ENDS ======-->

    <!--====== PORTFOLIO PART START ======-->
    
    <section class="portfolio-area pb-120 pt-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="portfolio-item mt-30">
                        <img src="{{asset('public/front_assets//images/portfolio-1.jpg')}}" alt="portfolio">
                        <div class="portfolio-content">
                            <span>Business Strategy</span>
                            <h4 class="title">Award-Winning Work</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="portfolio-item mt-30">
                        <img src="{{asset('public/front_assets//images/portfolio-2.jpg')}}" alt="portfolio">
                        <div class="portfolio-content">
                            <span>Business Strategy</span>
                            <h4 class="title">Award-Winning Work</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="portfolio-item mt-30">
                        <img src="{{asset('public/front_assets//images/portfolio-3.jpg')}}" alt="portfolio">
                        <div class="portfolio-content">
                            <span>Business Strategy</span>
                            <h4 class="title">Award-Winning Work</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="portfolio-item mt-30">
                        <img src="{{asset('public/front_assets//images/portfolio-4.jpg')}}" alt="portfolio">
                        <div class="portfolio-content">
                            <span>Business Strategy</span>
                            <h4 class="title">Award-Winning Work</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="portfolio-item mt-30">
                        <img src="{{asset('public/front_assets//images/portfolio-5.jpg')}}" alt="portfolio">
                        <div class="portfolio-content">
                            <span>Business Strategy</span>
                            <h4 class="title">Award-Winning Work</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="portfolio-item mt-30">
                        <img src="{{asset('public/front_assets//images/portfolio-6.jpg')}}" alt="portfolio">
                        <div class="portfolio-content">
                            <span>Business Strategy</span>
                            <h4 class="title">Award-Winning Work</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="portfolio-item mt-30">
                        <img src="{{asset('public/front_assets//images/portfolio-18.jpg')}}" alt="portfolio">
                        <div class="portfolio-content">
                            <span>Business Strategy</span>
                            <h4 class="title">Award-Winning Work</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="portfolio-item mt-30">
                        <img src="{{asset('public/front_assets//images/portfolio-19.jpg')}}" alt="portfolio">
                        <div class="portfolio-content">
                            <span>Business Strategy</span>
                            <h4 class="title">Award-Winning Work</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="portfolio-item mt-30">
                        <img src="{{asset('public/front_assets//images/portfolio-20.jpg')}}" alt="portfolio">
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
    @endsection