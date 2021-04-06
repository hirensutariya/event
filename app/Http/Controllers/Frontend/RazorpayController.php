<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Redirect;
use App\Http\Controllers\Controller;
use App\User;
use App\UserDetail;
use Illuminate\Support\Facades\Hash;

class RazorpayController extends Controller {

    public function razorpay() {

        return view('razorpay');
    }

    public function payment(Request $request) {
        $input = $request->all();
        $api = new Api(env('RAZOR_KEY', 'rzp_test_pc2FYh5B5hBzGQ'), env('RAZOR_SECRET', 'xZ793TP9urrTZWQr0lUS48VK'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));

                $data = json_decode(base64_decode(session('registerUserObj')), 1);


                $user = User::create([
                            'name' => $data['first_name'],
                            'email' => $data['email'],
                            'password' => Hash::make($data['password']),
                            'is_active' => 0
                ]);

                UserDetail::create([
                    'user_id' => $user->id,
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
//            'declaration'=>$data['declaration'],
                    'proposed_by' => $data['proposed_by'],
                    'seconded_by' => $data['seconded_by'],
                    'photo' => $data['photo'],
                    'mmc_certificate' => $data['mmc_certificate'],
                    'mmc_renewal' => $data['mmc_renewal'],
                    'educational_certificates' => $data['educational_certificates'],
                    'name_change_proof' => $data['name_change_proof'],
                    'adhar' => $data['adhar'],
                    'payment_response' => $response
                ]);
            } catch (\Exception $e) {
//                return $e->getMessage();
//                \Session::put('error', $e->getMessage());
//                return redirect()->back();
                return redirect()->route('home')->with('success',$e->getMessage());
            }
        }
        
        return redirect()->route('home')->with('success','Payment successful, your order will be despatched in the next 48 hours.');

//        \Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
//        return redirect()->back()->with('success', 'Payment successful, your order will be despatched in the next 48 hours.');
    }

}
