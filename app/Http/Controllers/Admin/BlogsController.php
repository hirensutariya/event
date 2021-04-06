<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Common\GeneralComponent;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Config;

class BlogsController extends Controller {

    public function __construct() {
        $this->general = new GeneralComponent();
    }

    public function index() {

        return view('admin.blogs.index');
    }

    public function data() {

        $data = Blog::with('users');

        return DataTables::of($data)
                        ->addColumn('active', function ($data) {
                            if ($data->is_active == 1) {
                                return '<span class="label label-success">Active</span>';
                            } else {
                                return '<span class="label label-default">Inactive</span>';
                            }
                        })
                        ->addColumn('image', function ($data) {

                            return '<img class="blog_img" width="100%" src="' . $data->image_url . '"  >';
                        })
                        ->addColumn('action', function ($data) {
                            return '<a class="ajaxviewmodel" href="' . route('admin.blogs.edit', ['id' => $data->id]) . '"  title="Update"><i class="fa fa-edit"></i></a>
                                       <a class = "ajaxviewmodel" href = "' . route('admin.blogs.view', ['id' => $data->id]) . '" title = "View"><i class = "fa fa-eye"></i></a>
                              <a class = "delete_blog" data-value = "' . route('admin.blogs.delete', ['id' => $data->id]) . '" title = "Delete"><i class="fa fa-trash"></i></a>';
                        })
                        ->rawColumns(['active', 'action', 'image'])
                        ->toJson();
    }

    public function create(Request $request) {

        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                        'image_url' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
                            ], $messages = [
                        'mimes' => 'Please insert jpeg,png,jpg,gif,svg  only',
            ]);

            if ($validator->fails()) {
                $error = $validator->errors()->first();
                return redirect()->route('admin.blogs.index')->with('error', $error);
            }

            $user_login = Auth::guard('admin')->user();

            $data = $request->all();

            if ($request->hasFile('image_url')) {
                $image_data = $request->file('image_url');

                $name = time() . '.' . $image_data->getClientOriginalExtension();
                $destinationPath = public_path('/images/blogs');
                $image_data->move($destinationPath, $name);



//                $filename = $this->general->imageResize($image_data, "blogs", 660, 275);

                $data['image_url'] = $name;
            }

            $data['user_id'] = $user_login->id;
            $data['is_active'] = (isset($request->is_active) ? 1 : 0);
            $data['slug'] = Str::slug($request->name, '-');

            $status = Blog::create($data);
            if (isset($status) & !empty($status)) {
                return redirect()->route('admin.blogs.index')->with('success', 'Blog is successfully saved');
            } else {
                return redirect()->route('admin.blogs.index')->with('error', 'something went wrong.');
            }
        }

        return view('admin.blogs.create');
    }

    public function edit(Request $request, $id) {
        $blog = Blog::findOrFail($id);
        $user_login = Auth::guard('admin')->user();

        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                        'image_url' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
                            ], $messages = [
                        'mimes' => 'Please insert jpeg,png,jpg,gif,svg  only',
            ]);

            if ($validator->fails()) {
                $error = $validator->errors()->first();
                return redirect()->route('admin.blogs.index')->with('error', $error);
            }
            $data = $request->all();

            if ($request->hasFile('image_url')) {
                $image_data = $request->file('image_url');
                $name = time() . '.' . $image_data->getClientOriginalExtension();
                $destinationPath = public_path('/images/blogs');
                $image_data->move($destinationPath, $name);

                unlink(public_path('images/blogs/' . $blog->image_name));

                $data['image_url'] = $name;
            }

            unset($data['_token']);

            $data['user_id'] = $user_login->id;
            $data['is_active'] = (isset($request->is_active) ? 1 : 0);
            $data['slug'] = Str::slug($request->name, '-');
            $status = Blog::whereId($id)->update($data);
            if (isset($status) & !empty($status)) {
                return redirect()->route('admin.blogs.index')->with('success', 'Blog is successfully updated');
            } else {
                return redirect()->route('admin.blogs.index')->with('error', 'something went wrong.');
            }
        }
        return view('admin.blogs.edit', ['blog' => $blog]);
    }

    public function delete($id) {

        $status = Blog::where('id', $id)->delete();

        if ($status) {
            session()->put('success', 'Blog has been successfully deleted.');
            echo 1;
        } else {
            session()->put('error', 'Something went wrong..');
            echo 0;
        }
    }

    public function view(Request $request, $id) {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.view', ['blog' => $blog]);
    }

}
