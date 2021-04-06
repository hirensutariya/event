@extends('layouts.front')

@section('content') 
<!--====== PAGE TITLE PART START ======-->

<div class="page-title-area d-flex align-items-center bg_cover" style="background-image: url(assets/images/page-title-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Blog Details</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE TITLE PART ENDS ======-->

<!--====== BLOG DETAILS PART START ======-->

<section class="blog-standard-area blog-details-area pt-90 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-standard mt-30">
                    <div class="blog-standard-item">
                        <div class="blog-standard-thumb">
                            <img src="{{$blogDetail->image_url}}" alt="blog">
                        </div>
                        <div class="blog-details-item">
                            <div class="blog-details-title">
                                <!--<span>NEWS</span>-->
                                <ul>
                                    <li><i class="fa fa-calendar"></i> {{date('d M, Y',strtotime($blogDetail->created_at))}}</li>
                                    <li><i class="fa fa-user-o"></i>  BY ADMIN</li>
                                </ul>
                                <h3 class="title">{{$blogDetail->name}}</h3>
                                
                            </div>
                            
                            <div class="blog-details-text">
                                <p><?php echo $blogDetail->description ?></p>
                            </div>
                           
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!--====== BLOG DETAILS PART ENDS ======-->




@endsection