@extends('layouts.user')

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Stexo</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
<!--            @if($message = Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Error!</strong> {{ $message }}
            </div>
            @endif
            {!! Session::forget('error') !!}
            @if($message = Session::get('success'))
            <div class="alert alert-info alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Success!</strong> {{ $message }}
            </div>
            @endif
            {!! Session::forget('success') !!}
            <div class="panel panel-default" style="margin-top: 30px;">
                <h3>Razorpay Payment Gateway</h3><br>
                <div class="panel-heading">
                    <h2>Pay With Razorpay</h2>

                     <div class="panel-body text-center"> 
                    <form action="{!!route('payment')!!}" method="POST" >                        
                        <script src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="{{ env('RAZOR_KEY','rzp_test_pc2FYh5B5hBzGQ') }}"
                                data-amount="1000"
                                data-buttontext="Pay 10 INR"
                                data-name="AFG"
                                data-description="Payment"
                                data-image="{{url('/public/front_assets/images/AFG_logo.jpg')}}"
                                data-prefill.name="name"
                                data-prefill.email="email"
                                data-theme.color="#ff7529">
                        </script>
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                    </form>
                </div>
            </div>-->
            <!-- end row -->
        </div>
        <!-- end page-title -->



    </div>
    <!-- container-fluid -->

</div>
@endsection
