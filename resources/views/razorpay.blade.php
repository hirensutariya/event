<!DOCTYPE html>
<html>
    <head>
        <title>Razorpay Payment Gateway</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>    
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if($message = Session::get('error'))
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
                        <h3>AFG Payment</h3><br>
                        <div class="panel-heading">
                            <h4>Complete Registration process after payment.</h4>

                            <!-- <div class="panel-body text-center"> -->
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
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>