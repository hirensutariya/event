<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use App\Common\GeneralComponent;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyUser;

class UsersController extends Controller {

    public function __construct() {
        $this->general = new GeneralComponent();
    }

    public function index() {

        return view('admin.users.index');
    }

    public function data() {

        $data = User::where('role_id', 2);

        return DataTables::of($data)
//                        ->addColumn('active', function ($data) {
//                            if ($data->is_active == 1) {
//                                return '<span class="label label-success">Active</span>';
//                            } else {
//                                return '<span class="label label-default">Inactive</span>';
//                            }
//                        })
                        ->addColumn('active', function ($data) {
                            if ($data->is_active == 1) {
                                return '<input type="checkbox" ' . (($data->is_active == 1) ? "checked" : "") . '  class="switchery customers_status"    data-size="small" data-value="' . $data->id . '"  >';
                            } else {
                                return '<input type="checkbox" ' . (($data->is_active == 1) ? "checked" : "") . '  class="switchery customers_status"    data-size="small" data-value="' . $data->id . '"  >';
                            }
                        })
                        ->addColumn('action', function ($data) {
                            return '<a class = "ajaxviewmodel" href = "' . route('admin.users.view', ['id' => $data->id]) . '" title = "View"><i class = "fa fa-eye"></i></a>';
                        })
                        ->rawColumns(['active', 'action'])
                        ->toJson();
    }

    public function view(Request $request, $id) {
        $data = User::with('user_detail')->findOrFail($id);
        return view('admin.users.view', ['data' => $data]);
    }

    public function active_inactive($id, $state) {
        $status = User::where('id', $id)->first();
        $status->is_active = $state;
        $status->save();
        if ($status) {
            if($state == 1){
                Mail::to($status->email)->send(new VerifyUser($status));
            }
            
            echo 1;
        } else {
            echo 0;
        }
    }

}
