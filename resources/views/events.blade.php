@extends('layouts.front')

@section('content') 
<!--====== PAGE TITLE PART START ======-->

<div class="page-title-area d-flex align-items-center bg_cover" style="background-image: url(public/front_assets/images/page-title-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Events</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Events</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE TITLE PART ENDS ======-->

<!--====== BLOG 3 PART START ======-->

<section class="blog-3-area blog-page">
    <div class="container">
        <div class="row justify-content-center">
            @if (count($events))
            @foreach ($events as $event)
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="blog-item mt-80">
                    <div class="blog-thumb">
                        <img src="{{$event->image_url}}" alt="blog">
                        <!--<a href="#">NEWS</a>-->
                    </div>
                    <div class="blog-content">
                        <a href="{{route('page.eventDetail',[$event->slug])}}"><h4 class="title">{{$event->name}}</h4></a>
                        <ul>
                            <li><a href="#"><i class="fa fa-calendar"></i> {{date('d M, Y',strtotime($event->date))}}</a></li>
                            @guest
                            @else
                            <li style="padding-bottom: 10px;float: right;"><a href="{{route('page.saveUserEvent',[$event->id])}}"><button class="main-btn btn-sm float-right" >Apply</button></a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <h4>No any event are available!</h4>
            
            @endif
        </div>
    </div>
</section>

<!--====== BLOG 3 PART ENDS ======-->

@endsection