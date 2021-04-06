@extends('layouts.admin')
@push('css')
<link href="{{asset('/public/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('public/plugins/sweet-alert2/sweetalert2.css')}}" rel="stylesheet" type="text/css" />
<!--<link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />-->
@endpush
@push('scripts')
<!-- Required datatable js -->
<script src="{{asset('/public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/public/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/plugins/selects/select2.min.js')}}"></script>
<script src="{{asset('public/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
<!--<script src="assets/pages/sweet-alert.init.js"></script>-->
<!-- Buttons examples -->
<!--<script src="../plugins/datatables/dataTables.buttons.min.js"></script>-->
<!--<script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>-->
<!--<script src="../plugins/datatables/jszip.min.js"></script>-->
<!--<script src="../plugins/datatables/pdfmake.min.js"></script>-->
<!--<script src="../plugins/datatables/vfs_fonts.js"></script>-->
<!--<script src="../plugins/datatables/buttons.html5.min.js"></script>-->
<!--<script src="../plugins/datatables/buttons.print.min.js"></script>-->
<!--<script src="../plugins/datatables/buttons.colVis.min.js"></script>-->
<!-- Responsive examples -->
<!--<script src="../plugins/datatables/dataTables.responsive.min.js"></script>-->
<!--<script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>-->

<!-- Datatable init js -->
<!--<script src="{{asset('/public/assets/pages/datatables.init.js')}}"></script>-->
<script>
/* ------------------------------------------------------------------------------
 *
 *  # Basic datatables
 *
 *  Specific JS code additions for datatable_basic.html page
 *
 *  Version: 1.0
 *  Latest update: Aug 1, 2015
 *
 * ---------------------------------------------------------------------------- */

$(function () {


    // Table setup
    // ------------------------------

    // Setting datatable defaults
    $.extend($.fn.dataTable.defaults, {
//        autoWidth: false,
//        columnDefs: [{
//                orderable: false,
//                width: '100px',
//                targets: [1]
//            }],
//        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
//        language: {
//            search: '<span>Filter:</span> _INPUT_',
//            lengthMenu: '<span>Show:</span> _MENU_',
//            paginate: {'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;'}
//        },
        drawCallback: function () {

            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
            deleteRecord();

        },
//        preDrawCallback: function () {
//            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
//        }
    });

    var table = $('#listingTable').DataTable({
        "processing": true,
        "language":
                {
                    "processing": "<i class='fa fa-refresh fa-spinner fa-2x'></i>",
                },
        "serverSide": true,
        "order": [[1, 'desc']],
        "select": true,
//        "dom": 'lftipr',
        "ajax": {
            "url": "{{route('blog-collection-data')}}",
            "dataType": "json",
            "type": "POST",
            "data": {_token: "{{csrf_token()}}"}
        },
        "columns": [
            {"data": "action", "sortable": false},
            {"data": "id", "sortable": true},
            {"data": "name"},
            {"data": "image"},
            {"data": "active"}
        ]

    });




    // Enable Select2 select for the length option
    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: 'auto'
    });

    function deleteRecord() {
        $('.delete_blog').on('click', function () {
            var url = $(this).attr("data-value");


            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger ml-2',
                buttonsStyling: false
            }).then(function (isConfirm) {

                if (isConfirm.dismiss === 'cancel') {
                    swal(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                            )
                } else {
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                        }
                    }).done(function (data) {
                        if (data == 1)
                        {
                            $('#listingTable').DataTable().row($(this).parents('tr')).remove().draw();
                            swal({
                                title: "Deleted!",
                                text: "Blog has been successfully deleted.",
                                type: "success",
                                showCancelButton: true,
                                closeOnConfirm: false,
                                confirmButtonColor: "#2196F3"
                            });

                        } else {
                            swal({
                                title: "Error!",
                                text: "Something went wrong..",
                                type: "error",
                                showCancelButton: true,
                                closeOnConfirm: false,
                                confirmButtonColor: "#2196F3"
                            });
                        }
                    });
                }
                

            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                    swal(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                            )
                }
            })



        });
    }

    $("#refresh_datatable").click(function () {
        table.search("").draw();
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
                    <h4 class="page-title">Blogs</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">AFG</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Blogs</a></li>
                        <li class="breadcrumb-item active">Listing</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div>
        <!-- end page-title -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="float-right">
                            <a type="button" class="btn btn-outline-primary waves-effect waves-light ajaxviewmodel" href="{{route('admin.blogs.create')}}"><i class="icon-plus3"></i> Add New Blog</a>
                        </div>
                        <h4  class="mt-0 header-title">Manage Blog</h4>
                        <p class="sub-title">
                        </p>

                        <table id="listingTable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Action</th> 
                                    <th>Blog ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Active</th> 
                                </tr>
                            </thead>



                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    <!-- container-fluid -->

</div>

@endsection