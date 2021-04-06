@extends('layouts.user')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">User Profile</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">AFG</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div>
        <!-- end page-title -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.updateUserProfile') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{$data->first_name}}" required autocomplete="first_name" autofocus placeholder="Your Answer">
                                    <small id="emailHelp" class="form-text text-muted">As in Aadhar or Passport or PAN</small>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="middle_name" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                                <div class="col-md-6">
                                    <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{$data->middle_name }}" required autocomplete="name" autofocus placeholder="Your Answer">
                                    <small id="emailHelp" class="form-text text-muted">As in Aadhar or Passport or PAN</small>
                                    @error('middle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{$data->last_name}}" required autocomplete="last_name" autofocus placeholder="Your Answer">
                                    <small id="emailHelp" class="form-text text-muted">As in Aadhar or Passport or PAN</small>
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                <div class="col-md-6">
                                    <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{$data->date_of_birth}}" required autocomplete="date_of_birth" autofocus placeholder="Your Answer">
                                    <small id="emailHelp" class="form-text text-muted">As in Aadhar or Passport or PAN</small>
                                    @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="qualification" class="col-md-4 col-form-label text-md-right">{{ __('Qualification') }}</label>

                                <div class="col-md-6">
                                    <input id="qualification" type="text" class="form-control @error('qualification') is-invalid @enderror" name="qualification" value="{{$data->qualification}}" required autocomplete="last_name" autofocus placeholder="Your Answer">

                                    @error('qualification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mci_registration_state" class="col-md-4 col-form-label text-md-right">{{ __('MCI Registration State') }}</label>

                                <div class="col-md-6">
                                    <input id="mci_registration_state" type="text" class="form-control @error('mci_registration_state') is-invalid @enderror" name="mci_registration_state" value="{{$data->mci_registration_state}}" required autocomplete="mci_registration_state" autofocus placeholder="Your Answer">

                                    @error('mci_registration_state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mmc_registration" class="col-md-4 col-form-label text-md-right">{{ __('MMC Registration') }}</label>

                                <div class="col-md-6">
                                    <input id="mmc_registration" type="text" class="form-control @error('mmc_registration') is-invalid @enderror" name="mmc_registration" value="{{$data->mmc_registration}}" required autocomplete="mmc_registration" autofocus placeholder="Your Answer">

                                    @error('mmc_registration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                                <div class="col-md-6">
                                    <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{$data->mobile}}" required autocomplete="mobile" autofocus placeholder="Your Answer">

                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile_2" class="col-md-4 col-form-label text-md-right">{{ __('Mobile2') }}</label>

                                <div class="col-md-6">
                                    <input id="mobile_2" type="number" class="form-control" name="mobile_2" value="{{$data->mobile_2}}" autocomplete="mobile_2" autofocus placeholder="Your Answer">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address_res" class="col-md-4 col-form-label text-md-right">{{ __('Address (Res)') }}</label>

                                <div class="col-md-6">
                                    <input id="address_res" type="text" class="form-control @error('address_res') is-invalid @enderror" name="address_res" value="{{$data->address_res}}" required autocomplete="address_res" autofocus placeholder="Your Answer">

                                    @error('address_res')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address_clinic" class="col-md-4 col-form-label text-md-right">{{ __('Address (Clinic)') }}</label>

                                <div class="col-md-6">
                                    <input id="address_clinic" type="text" class="form-control @error('address_clinic') is-invalid @enderror" name="address_clinic" value="{{$data->address_clinic}}" required autocomplete="address_clinic" autofocus placeholder="Your Answer">

                                    @error('address_clinic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address_correspondence" class="col-md-4 col-form-label text-md-right">{{ __('Address of Correspondence') }}</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="address_correspondence" id="flexRadioDefault1" value="residence"  {{($data->address_correspondence == 'residence') ? "checked" : ""}}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Residence
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="address_correspondence" id="flexRadioDefault2" value="clinic" {{($data->address_correspondence == 'clinic') ? "checked" : ""}}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Clinic
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="landline" class="col-md-4 col-form-label text-md-right">{{ __('Landline') }}</label>

                                <div class="col-md-6">
                                    <input id="landline" type="text" class="form-control @error('landline') is-invalid @enderror" name="landline" value="{{$data->landline}}" autocomplete="landline" autofocus placeholder="Your Answer">

                                    @error('landline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="academic_interest" class="col-md-4 col-form-label text-md-right">{{ __('Academic Interest') }}</label>

                                <div class="col-md-6">
                                    <input id="academic_interest" type="text" class="form-control @error('academic_interest') is-invalid @enderror" name="academic_interest" value="{{$data->academic_interest}}" autocomplete="academic_interest" autofocus placeholder="Your Answer">

                                    @error('academic_interest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!--
                                                                    <h6>I AM A PRACTISING GYNAECOLOGIST IN THE SUBURBS OF MUMBAI. ALL THE INFORMATION GIVEN BY ME IS TRUE TO MY KNOWLEDGE.</h6>
                                                                    <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
                            
                                                                    <div>
                                                                        <button id="save">Save</button>
                                                                        <button id="clear">Clear</button>
                                                                    </div>-->


                            <div class="form-group row">
                                <label for="proposed_by" class="col-md-4 col-form-label text-md-right">{{ __('Proposed by') }}</label>

                                <div class="col-md-6">
                                    <input id="proposed_by" type="text" class="form-control @error('proposed_by') is-invalid @enderror" name="proposed_by" value="{{$data->proposed_by}}" autocomplete="proposed_by" autofocus placeholder="Your Answer">
                                    <small id="emailHelp" class="form-text text-muted">Should be an existing life member of AFG</small>
                                    @error('proposed_by')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="seconded_by" class="col-md-4 col-form-label text-md-right">{{ __('Seconded by') }}</label>

                                <div class="col-md-6">
                                    <input id="seconded_by" type="text" class="form-control @error('seconded_by') is-invalid @enderror" name="seconded_by" value="{{$data->seconded_by}}" autocomplete="seconded_by" autofocus placeholder="Your Answer">
                                    <small id="emailHelp" class="form-text text-muted">Should be an existing life member of AFG and CANNOT BE THE SAME AS PROPOSED</small>
                                    @error('seconded_by')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


<!--                            <div class="form-group row">
                                <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>

                                <div class="col-md-6">
                                    <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" autocomplete="photo" autofocus>

                                    @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mmc_certificate" class="col-md-4 col-form-label text-md-right">{{ __('MMC Certificate') }}</label>

                                <div class="col-md-6">
                                    <input id="mmc_certificate" type="file" class="form-control @error('mmc_certificate') is-invalid @enderror" name="mmc_certificate" value="{{ old('mmc_certificate') }}" autocomplete="mmc_certificate" autofocus>

                                    @error('mmc_certificate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="mmc_renewal" class="col-md-4 col-form-label text-md-right">{{ __('MMC Renewal') }}</label>

                                <div class="col-md-6">
                                    <input id="mmc_renewal" type="file" class="form-control @error('mmc_renewal') is-invalid @enderror" name="mmc_renewal" value="{{ old('mmc_renewal') }}" autocomplete="mmc_renewal" autofocus>

                                    @error('mmc_renewal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="educational_certificates" class="col-md-4 col-form-label text-md-right">{{ __('Educational Certificates') }}</label>

                                <div class="col-md-6">
                                    <input id="educational_certificates" type="file" class="form-control @error('educational_certificates') is-invalid @enderror" name="educational_certificates" value="{{ old('educational_certificates') }}" autocomplete="educational_certificates" autofocus>

                                    @error('educational_certificates')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name_change_proof" class="col-md-4 col-form-label text-md-right">{{ __('Name Change Proof') }}</label>

                                <div class="col-md-6">
                                    <input id="name_change_proof" type="file" class="form-control @error('name_change_proof') is-invalid @enderror" name="name_change_proof" value="{{ old('name_change_proof') }}" autocomplete="name_change_proof" autofocus>
                                    <small id="emailHelp" class="form-text text-muted">(if required)</small>
                                    @error('name_change_proof')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="adhar" class="col-md-4 col-form-label text-md-right">{{ __('Aadhar') }}</label>

                                <div class="col-md-6">
                                    <input id="adhar" type="file" class="form-control @error('adhar') is-invalid @enderror" name="adhar" value="{{ old('adhar') }}" autocomplete="adhar" autofocus>
                                    <small id="emailHelp" class="form-text text-muted">Aadhar Front & Back</small>
                                    @error('adhar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>-->






                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Update Profile
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->      


    </div>
    <!-- container-fluid -->

</div>
@endsection
