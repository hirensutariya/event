@extends('layouts.admin')
@push('css')
<!-- summernote -->
<link rel="stylesheet" href="{{asset('/public/plugins/summernote/summernote-bs4.css')}}" />
@endpush
@push('scripts')

<!-- summernote -->
<script src="{{asset('/public/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
jQuery(document).ready(function () {

    $('.summernote').summernote({
        height: 250, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false                 // set focus to editable area after initializing summernote
    });
});
</script>
@endpush


@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Email Compose</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">AFG</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
                        <li class="breadcrumb-item active">Email Compose</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title -->

        <div class="row">
            <div class="col-12">

                <!-- Right Sidebar -->
                <div class="mb-3">

                    <div class="card">
                        <div class="card-body">

                            <form method="POST" action="{{ route('postComposeEmail') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="To" name="email">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" name="subject">
                                </div>
                                <div class="form-group">
                                    <textarea class="summernote" name="content">


                                    </textarea>
                                </div>

                                <div class="btn-toolbar form-group mb-0">
                                    <div class="">
                                        <!--<button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="far fa-save"></i></button>-->
                                        <!--<button type="button" class="btn btn-danger waves-effect waves-light m-r-5"><i class="far fa-trash-alt"></i></button>-->
                                        <button class="btn btn-primary waves-effect waves-light"> <span>Send</span> <i class="fab fa-telegram-plane m-l-10"></i> </button>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>
                <!-- end Col-9 -->

            </div>

        </div>
        <!-- End row -->

    </div>
    <!-- container-fluid -->

</div>
@endsection
