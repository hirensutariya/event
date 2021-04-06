@extends('layouts.front')

@section('content') 
<!--====== PAGE TITLE PART START ======-->

<div class="page-title-area d-flex align-items-center bg_cover" style="background-image: url(public/front_assets/images/page-title-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Our Team</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE TITLE PART ENDS ======-->

<!--====== TEAM 2 PART START ======-->

<section class="team-2-area team-about team-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/amita_suchak.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Amita Suchak</h5>
                        <span>2000-2003</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/ramesh_kothari.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Ramesh Kothari</h5>
                        <span>2003-2004</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/nikhil_datar.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Nikhil Datar</h5>
                        <span>2004-2005</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/arun_apte.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Arun Apte</h5>
                        <span>2005-2006</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/rajendra_saraogi.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Rajendra Saraogi</h5>
                        <span>2006-2007</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/sudhir_naik.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Sudhir Naik</h5>
                        <span>2007-2008</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/sn_agarwal.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.S N Aaarwal</h5>
                        <span>2008-2009</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/rakesh_pandia.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Rakesh Pandia</h5>
                        <span>2009-2010</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/bipin_pandit.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr. Bipin Pandit</h5>
                        <span>2010-2011</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/unnati_shah.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Unaati Shah</h5>
                        <span>2011-2012</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/kartikeya_bhagat.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Kartikeya Bhagat</h5>
                        <span>2012-2013</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/mukesh_gupta.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Mukesh Gupta</h5>
                        <span>2013-2014</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/arun_nayak.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Arun Nayak</h5>
                        <span>2014-2015</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/mohan_gadam.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Mohan Gadam</h5>
                        <span>2015-2016</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/seema_gadiwan.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr. Seema Gadiwan</h5>
                        <span>2016-2017</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/rajendra_nagarkatti.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr. Rajendra Nagarkatti</h5>
                        <span>2017-2018</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/manohar_motwani.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Manohar Motwani</h5>
                        <span>2018-2019</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="team-item mt-30 mr-100">
                    <div class="team-thumb">
                        <img src="{{asset('public/front_assets/images/saurabh_dani.jpg')}}" alt="">
                    </div>
                    <div class="team-content pl-55">
                        <h5 class="title">Dr.Saurabh Dani</h5>
                        <span>2019-2020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!--====== TEAM 2 PART ENDS ======-->

@endsection