<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myModalLabel">View Event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body ">
            <div class="table-responsive">
                <table class="table">

                    <tbody>
                        <tr>
                            <td width="4%">Name</td>
                            <td width="6%">{{$data->name}}</td>
                        </tr>
                        <tr>
                            <td width="4%">Location</td>
                            <td width="6%"><?php echo $data->location; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Date</td>
                            <td width="6%"><?php echo $data->date; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Description</td>
                            <td width="6%"><?php echo $data->description; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Image</td>
                            <td width="6%"><img class="view_img" src="{{$data->image_url}}" width="100%"></td>
                        </tr>

                    </tbody>  
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>

        </div>

    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

