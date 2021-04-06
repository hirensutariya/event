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

class EventsController extends Controller {

    public function __construct() {
        $this->general = new GeneralComponent();
    }

    public function index() {

        return view('admin.events.index');
    }

    public function data() {

        $data = Event::query();

        return DataTables::of($data)
                        ->addColumn('active', function ($data) {
                            if ($data->is_active == 1) {
                                return '<span class="label label-success">Active</span>';
                            } else {
                                return '<span class="label label-default">Inactive</span>';
                            }
                        })
                        ->addColumn('image', function ($data) {

                            return '<img class="blog_img" width="50%" src="' . $data->image_url . '"  >';
                        })
                        ->addColumn('action', function ($data) {
                            return '<a class="ajaxviewmodel" href="' . route('admin.events.edit', ['id' => $data->id]) . '"  title="Update"><i class="fa fa-edit"></i></a>
                                       <a class = "ajaxviewmodel" href = "' . route('admin.events.view', ['id' => $data->id]) . '" title = "View"><i class = "fa fa-eye"></i></a>
                              <a class = "delete_record" data-value = "' . route('admin.events.delete', ['id' => $data->id]) . '" title = "Delete"><i class="fa fa-trash"></i></a>';
                        })
                        ->rawColumns(['active', 'action', 'image'])
                        ->toJson();
    }

    public function create(Request $request) {

        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                        'poster' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
                            ], $messages = [
                        'mimes' => 'Please insert jpeg,png,jpg,gif,svg  only',
            ]);

            if ($validator->fails()) {
                $error = $validator->errors()->first();
                return redirect()->route('admin.events.index')->with('error', $error);
            }

            $user_login = Auth::guard('admin')->user();

            $data = $request->all();

            if ($request->hasFile('poster')) {
                $image_data = $request->file('poster');

                $name = time() . '.' . $image_data->getClientOriginalExtension();
                $destinationPath = public_path('/images/events');
                $image_data->move($destinationPath, $name);



//                $filename = $this->general->imageResize($image_data, "blogs", 660, 275);

                $data['poster'] = $name;
            }

            $data['is_active'] = (isset($request->is_active) ? 1 : 0);
            $data['slug'] = Str::slug($request->name, '-');

            $status = Event::create($data);
            if (isset($status) & !empty($status)) {
                return redirect()->route('admin.events.index')->with('success', 'Event is successfully saved');
            } else {
                return redirect()->route('admin.events.index')->with('error', 'something went wrong.');
            }
        }

        return view('admin.events.create');
    }

    public function edit(Request $request, $id) {
        $edit_data = Event::findOrFail($id);
        $user_login = Auth::guard('admin')->user();

        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                        'poster' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
                            ], $messages = [
                        'mimes' => 'Please insert jpeg,png,jpg,gif,svg  only',
            ]);

            if ($validator->fails()) {
                $error = $validator->errors()->first();
                return redirect()->route('admin.events.index')->with('error', $error);
            }
            $data = $request->all();

            if ($request->hasFile('poster')) {
                $image_data = $request->file('poster');
                $name = time() . '.' . $image_data->getClientOriginalExtension();
                $destinationPath = public_path('/images/events');
                $image_data->move($destinationPath, $name);

                unlink(public_path('images/events/' . $edit_data->image_name));

                $data['poster'] = $name;
            }

            unset($data['_token']);

//            $data['user_id'] = $user_login->id;
            $data['is_active'] = (isset($request->is_active) ? 1 : 0);
            $data['slug'] = Str::slug($request->name, '-');
            $status = Event::whereId($id)->update($data);
            if (isset($status) & !empty($status)) {
                return redirect()->route('admin.events.index')->with('success', 'Event is successfully updated');
            } else {
                return redirect()->route('admin.events.index')->with('error', 'something went wrong.');
            }
        }
        return view('admin.events.edit', ['data' => $edit_data]);
    }

    public function delete($id) {

        $status = Event::where('id', $id)->delete();

        if ($status) {
            session()->put('success', 'Event has been successfully deleted.');
            echo 1;
        } else {
            session()->put('error', 'Something went wrong..');
            echo 0;
        }
    }

    public function view(Request $request, $id) {
        $data = Event::findOrFail($id);
        return view('admin.events.view', ['data' => $data]);
    }

}
