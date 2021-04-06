<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/razorpay';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }
    
    
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $data = $request->all();
        
        if (isset($data['photo']) && !empty($data['photo'])) {
            $photo = $data['photo'];
            $name = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/documents');
            $data['photo']->move($destinationPath, $name);
            $data['photo'] = $name;
        }
        
        if (isset($data['mmc_certificate']) && !empty($data['mmc_certificate'])) {
            $photo = $data['mmc_certificate'];
            $name = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/documents');
            $data['mmc_certificate']->move($destinationPath, $name);
            $data['mmc_certificate'] = $name;
        }
        
        if (isset($data['mmc_renewal']) && !empty($data['mmc_renewal'])) {
            $photo = $data['mmc_renewal'];
            $name = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/documents');
            $data['mmc_renewal']->move($destinationPath, $name);
            $data['mmc_renewal'] = $name;
        }
        
        if (isset($data['educational_certificates']) && !empty($data['educational_certificates'])) {
            $photo = $data['educational_certificates'];
            $name = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/documents');
            $data['educational_certificates']->move($destinationPath, $name);
            $data['educational_certificates'] = $name;
        }
        
        if (isset($data['name_change_proof']) && !empty($data['name_change_proof'])) {
            $photo = $data['name_change_proof'];
            $name = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/documents');
            $data['name_change_proof']->move($destinationPath, $name);
            $data['name_change_proof'] = $name;
        }
        
         if (isset($data['adhar']) && !empty($data['adhar'])) {
            $photo = $data['adhar'];
            $name = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/documents');
            $data['adhar']->move($destinationPath, $name);
            $data['adhar'] = $name;
        }
        
        $data_encode = base64_encode(json_encode($data));
        
        session(['registerUserObj' => $data_encode]);

//        event(new Registered($user = $this->create($request->all())));

//        $this->guard()->login($user);
        
        return redirect($this->redirectPath());

//        return $this->registered($request, $user)
//                        ?: redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'first_name' => ['required', 'string', 'max:255'],
                    'last_name' => ['required', 'string', 'max:255'],
                    'middle_name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'date_of_birth' => ['required', 'date'],
                    'qualification' => ['required', 'string', 'max:255'],
                    'mci_registration_state' => ['required', 'string', 'max:255'],
                    'mmc_registration' => ['required', 'string', 'max:255'],
                    'mobile' => ['required', 'numeric'],
//            'mobile_2' => ['required', 'numeric'],
                    'address_res' => ['required', 'string', 'max:255'],
                    'address_clinic' => ['required', 'string', 'max:255'],
                    'address_correspondence' => ['required', 'string', 'max:255'],
                    'landline' => ['required', 'string', 'max:255'],
                    'academic_interest' => ['required', 'string', 'max:255'],
//            'declaration' => ['required', 'string'],
                    'proposed_by' => ['required', 'string', 'max:255'],
                    'seconded_by' => ['required', 'string', 'max:255'],
                    'photo' => ['required'],
                    'mmc_certificate' => ['required'],
                    'mmc_renewal' => ['required'],
                    'educational_certificates' => ['required'],
                    'name_change_proof' => ['required'],
                    'adhar' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {
        
        $user = User::create([
                    'name' => $data['first_name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'is_active'=>0
        ]);
        

        if (isset($data['photo']) && !empty($data['photo'])) {
            $photo = $data['photo'];
            $name = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/documents');
            $data['photo']->move($destinationPath, $name);
            $data['photo'] = $name;
        }
        
        if (isset($data['mmc_certificate']) && !empty($data['mmc_certificate'])) {
            $photo = $data['mmc_certificate'];
            $name = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/documents');
            $data['mmc_certificate']->move($destinationPath, $name);
            $data['mmc_certificate'] = $name;
        }
        
        if (isset($data['mmc_renewal']) && !empty($data['mmc_renewal'])) {
            $photo = $data['mmc_renewal'];
            $name = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/documents');
            $data['mmc_renewal']->move($destinationPath, $name);
            $data['mmc_renewal'] = $name;
        }
        
        if (isset($data['educational_certificates']) && !empty($data['educational_certificates'])) {
            $photo = $data['educational_certificates'];
            $name = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/documents');
            $data['educational_certificates']->move($destinationPath, $name);
            $data['educational_certificates'] = $name;
        }
        
        if (isset($data['name_change_proof']) && !empty($data['name_change_proof'])) {
            $photo = $data['name_change_proof'];
            $name = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/documents');
            $data['name_change_proof']->move($destinationPath, $name);
            $data['name_change_proof'] = $name;
        }
        
         if (isset($data['adhar']) && !empty($data['adhar'])) {
            $photo = $data['adhar'];
            $name = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/documents');
            $data['adhar']->move($destinationPath, $name);
            $data['adhar'] = $name;
        }
        

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
        ]);

        return $user;
    }

}
