<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\UserDetail;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {

    public function __construct() {
//        $this->general = new GeneralComponent();
    }

//    public function index() {
//
//        return view('user.events.index');
//    }

    public function getUserProfile() {

        $user = Auth::user();

        $data = UserDetail::where('user_id', $user->id)->first();

        return view('user.user.getUserProfile', ['data' => $data]);
    }

    public function updateUserProfile(Request $request) {
        $user = Auth::user();
        $data = $request->all();
        
        DB::table('user_details')->where('user_id', $user->id)->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'middle_name' => $data['middle_name'],
            'date_of_birth' => $data['date_of_birth'],
            'qualification' => $data['qualification'],
            'mci_registration_state' => $data['mci_registration_state'],
            'mmc_registration' => $data['mmc_registration'],
            'mobile' => $data['mobile'],
            'mobile_2' => $data['mobile_2'],
            'address_res' => $data['address_res'],
            'address_clinic' => $data['address_clinic'],
            'address_correspondence' => $data['address_correspondence'],
            'landline' => $data['landline'],
            'academic_interest' => $data['academic_interest'],
            'proposed_by' => $data['proposed_by'],
            'seconded_by' => $data['seconded_by'],
//            'photo' => $data['photo'],
//            'mmc_certificate' => $data['mmc_certificate'],
//            'mmc_renewal' => $data['mmc_renewal'],
//            'educational_certificates' => $data['educational_certificates'],
//            'name_change_proof' => $data['name_change_proof'],
//            'adhar' => $data['adhar'],
        ]);
        
        return redirect()->route('user.getUserProfile')->with('success', 'Update Profile Successfully');
    }

}
