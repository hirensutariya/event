<!-- jQuery  -->
<script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/assets/js/metismenu.min.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/assets/js/waves.min.js')}}"></script>

<!--Morris Chart-->
<!--<script src="../plugins/morris/morris.min.js"></script>-->
<!--<script src="../plugins/raphael/raphael.min.js"></script>-->

<!-- App js -->
<script src="{{asset('public/assets/js/app.js')}}"></script>

<script src="{{asset('public/plugins/alertify/js/alertify.js')}}"></script>

<script>
$(document).on('click', '.ajaxviewmodel', function (event) {
    var tmp_html = '<div class="modal-dialog"><div class="modal-content"><div class="modal-body"><p class="ajaxloader text-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw margin-bottom margin-top text-center"></i></p></div></div></div>';
    event.preventDefault();
    var link = $(this).attr("href");
    $('#myModal').modal('show');
    $("#myModal").html(tmp_html);
    $.ajax({
        url: link,
        success: function (data) {
            $(".ajaxloader").hide();
            $("#myModal").html(data);
        }
    });
});

$(function() {
@if (Session::has('success'))
    alertify.success("{{Session::get('success')}}");

//new PNotify({title: 'Success', text: "{{Session::get('success')}}", addclass: 'bg-success'});
@php
        Session::forget('success')
@endphp
        @endif
        @if (Session::has('error'))
            alertify.error("{{Session::get('error')}}");
//new PNotify({title: 'Error', text: "{{Session::get('error')}}", addclass: 'bg-danger'});
@php
        Session::forget('error')
@endphp
        @endif
}
);
</script>


@stack('scripts')