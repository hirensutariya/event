<script type="text/javascript" src="{{asset('public/plugins/jquery-validate/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/plugins/jquery-validate/additional-methods.min.js')}}"></script>
<script src="{{asset('public/plugins/tinymce/tinymce.min.js')}}"></script>
<script>

$(function () {
    // Default initialization


//    $.validator.addMethod('dimention', function (value, element, param) {
//        if (element.files.length == 0) {
//            return true;
//        }
//        var width = $(element).data('imageWidth');
//        var height = $(element).data('imageHeight');
//        if (width == param[0] && height == param[1]) {
//            return true;
//        } else {
//            return false;
//        }
//    });
//    $('.checkImageWidthHeight').change(function () {
//        $('.checkImageWidthHeight').removeData('imageWidth');
//        $('.checkImageWidthHeight').removeData('imageHeight');
//        var file = this.files[0];
//        var tmpImg = new Image();
//        tmpImg.src = window.URL.createObjectURL(file);
//        tmpImg.onload = function () {
//            width = tmpImg.naturalWidth,
//                    height = tmpImg.naturalHeight;
//            $('.checkImageWidthHeight').data('imageWidth', width);
//            $('.checkImageWidthHeight').data('imageHeight', height);
//        }
//    });

    $('input[type=file]').change(function (e) {

        var file_type = $('#image_url').val();
        var extension = file_type.substr(file_type.lastIndexOf('.') + 1).toLowerCase();
        var allowedExtensions = ["jpeg", "png", "jpg", "gif", "svg"];

        if (file_type.length > 0)
        {
            if (allowedExtensions.indexOf(extension) === -1)
            {
                $('#image_url').val("");
                var msg = 'Invalid file Format. Only ' + allowedExtensions.join(', ') + ' are allowed.';

                swal({
                    title: "Error!",
                    text: msg,
                    type: "error",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    confirmButtonColor: "#2196F3"
                });

            }
        }

    });
    $('#blogadd').validate({
        errorClass: 'error m-error',
        errorElement: 'small',
        ignore: ':hidden:not(textarea)',
        rules: {
            "image_url": {
                required: true,
                accept: ".png, .jpg, .jpeg",
//                dimention: [660, 275]
            },
            description: {
                required: true,
            }
        },
        messages: {
            "image_url": {
                accept: 'Only PNG, JPEG and JPG image types are allowed.',
                dimention: 'Your image\'s width and height must be 660X275',
            }, "description": {
                remote: "This field is required."
            }
        }
    });
    $('#blogadd').submit(function () {
        if ($(this).valid()) {

            $(this).find('button[type=submit]').prop('disabled', true);
        }
    });
    $(document).ready(function () {

        tinymce.init({
            selector: "textarea#description",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
        });

    });



});
</script>

<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myModalLabel">Add New Blog</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('admin.blogs.editsave',$blog->id)}}" id="blogadd" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body ">
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Blog Name<span  class="text-danger"> *</span></label>
                                    <input type="text" placeholder="Enter Blog Name" class="form-control  required" name="name" value="{{$blog->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Blog Image</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="uploader">
                                        <input type="file" class="file-styled-primary required checkImageWidthHeight" id="image_url" name="image_url" value="{{$blog->image_url}}">
                                        <span class="filename" >No file selected</span>
                                        <span class="action btn bg-teal-400 legitRipple" >Choose File</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="blog_img"  src="{{$blog->image_url}}" width="30%">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Description</label>
                                    <textarea  name="description" class="form-control required basic-example description"    placeholder="Enter Blog Description" id="description"><?php echo (isset($blog->description) && !empty($blog->description)) ? $blog->description : "" ?></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Meta Title</label>
                                    <input type="text" placeholder="Enter Blog Meta Title" class="form-control" name="meta_title" value="{{$blog->meta_title}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Meta Keywords</label>
                                    <input type="text" placeholder="Enter Blog Meta Keywords" class="form-control" name="meta_keywords" value="{{$blog->meta_keywords}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Meta Description</label>
                                    <textarea type="text" placeholder="Enter Blog Meta Description" class="form-control" name="meta_description">{{$blog->meta_description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="row">

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="is_active" {{($blog->is_active==1)? "checked" : ""}}>
                                        <label class="custom-control-label" for="customCheck1">Blog Active</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Update Blog</button>
            </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->