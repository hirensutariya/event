<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="myModalLabel">View User Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body ">
            <div class="table-responsive">
                <table class="table">

                    <tbody>
                        <tr>
                            <td width="4%">Email</td>
                            <td width="6%">{{$data->email}}</td>
                        </tr>
                        <tr>
                            <td width="4%">First Name</td>
                            <td width="6%"><?php echo $data->user_detail->first_name; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Middle Name</td>
                            <td width="6%"><?php echo $data->user_detail->middle_name; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Last Name</td>
                            <td width="6%"><?php echo $data->user_detail->last_name; ?></td>
                        </tr>

                        <tr>
                            <td width="4%">Date Of Birth</td>
                            <td width="6%"><?php echo $data->user_detail->date_of_birth; ?></td>
                        </tr>

                        <tr>
                            <td width="4%">Qualification</td>
                            <td width="6%"><?php echo $data->user_detail->qualification; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">MCI Registration State</td>
                            <td width="6%"><?php echo $data->user_detail->mci_registration_state; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">MMC Registration</td>
                            <td width="6%"><?php echo $data->user_detail->mmc_registration; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Mobile</td>
                            <td width="6%"><?php echo $data->user_detail->mobile; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Mobile 2</td>
                            <td width="6%"><?php echo $data->user_detail->mobile_2; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Address (Res)</td>
                            <td width="6%"><?php echo $data->user_detail->address_res; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Address (Clinic)</td>
                            <td width="6%"><?php echo $data->user_detail->address_clinic; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Address of Correspondence</td>
                            <td width="6%"><?php echo $data->user_detail->address_correspondence; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Landline</td>
                            <td width="6%"><?php echo $data->user_detail->landline; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Academic Interest</td>
                            <td width="6%"><?php echo $data->user_detail->academic_interest; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Declaration</td>
                            <td width="6%"><?php echo $data->user_detail->declaration; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Proposed by</td>
                            <td width="6%"><?php echo $data->user_detail->proposed_by; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Seconded by</td>
                            <td width="6%"><?php echo $data->user_detail->seconded_by; ?></td>
                        </tr>
                        <tr>
                            <td width="4%">Photo</td>
                            <td width="6%"><img src="<?php echo $data->user_detail->photo; ?>" width="50%" alt="N/A"/></td>
                        </tr>
                        <tr>
                            <td width="4%">MMC Certificate</td>
                            <td width="6%"><img src="<?php echo $data->user_detail->mmc_certificate; ?>" width="50%" alt="N/A"/></td>
                        </tr>
                        <tr>
                            <td width="4%">MMC Renewal</td>
                            <td width="6%"><img src="<?php echo $data->user_detail->mmc_renewal; ?>" width="50%" alt="N/A"/></td>
                        </tr>
                        <tr>
                            <td width="4%">Educational Certificates</td>
                            <td width="6%"><img src="<?php echo $data->user_detail->educational_certificates; ?>" width="50%" alt="N/A"/></td>
                        </tr>
                        <tr>
                            <td width="4%">Name Change Proof</td>
                            <td width="6%"><img src="<?php echo $data->user_detail->name_change_proof; ?>" width="50%" alt="N/A"/></td>
                        </tr>
                        <tr>
                            <td width="4%">Aadhar</td>
                            <td width="6%"><img src="<?php echo $data->user_detail->adhar; ?>" width="50%" alt="N/A"/></td>
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

