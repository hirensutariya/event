<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.partials.head')
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            @include('layouts.partials.topbar')
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.partials.sidebar')

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                @yield('content')
                <!-- content -->

                <footer class="footer">
                    @include('layouts.partials.footer')    
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
        <div id="product_detail_loader"  style="display: none;">
            <div class="inner-div-loader">
                <div class="lds-ripple"><div></div><div></div></div> 
                {{--<h1>Action is being processed,</h1>
                <h1>Please wait ...</h1>
                <h1>(Please do not press 'Refresh' or 'Back' button)</h1>
                <h1>Thank you.</h1>--}}
            </div>
        </div>
        <div id="myModal" class="modal"  data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
        @include('layouts.partials.footer-scripts')


    </body>

</html>