<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
//use App\Common\GeneralComponent;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\UserEvent;

class EventsController extends Controller {

    public function __construct() {
//        $this->general = new GeneralComponent();
    }

//    public function index() {
//
//        return view('user.events.index');
//    }

    public function upcomingEvents() {

        return view('user.events.upcomingEvents');
    }

    public function upcomingsData() {

        $user = Auth::user();

        $data = Event::with('user_event')->whereDate('date', '>=', date('Y-m-d'))->whereHas('user_event', function($q) use ($user) {
            $q->where('user_id', $user->id);
        });


        return DataTables::of($data)
                        ->addColumn('image', function ($data) {
                            return '<img class="blog_img" width="50%" src="' . $data->image_url . '"  >';
                        })
                        ->addColumn('action', function ($data) {
                            return '<a class = "ajaxviewmodel" href = "' . route('user.events.view', ['id' => $data->id]) . '" title = "View"><i class = "fa fa-eye"></i></a>';
                        })
                        ->rawColumns(['action', 'image'])
                        ->toJson();
    }

    public function pastEvents() {

        return view('user.events.pastEvents');
    }

    public function pastData() {

        $user = Auth::user();

        $data = Event::with('user_event')->whereDate('date', '<', date('Y-m-d'))->whereHas('user_event', function($q) use ($user) {
            $q->where('user_id', $user->id);
        });


        return DataTables::of($data)
                        ->addColumn('image', function ($data) {
                            return '<img class="blog_img" width="50%" src="' . $data->image_url . '"  >';
                        })
                        ->addColumn('action', function ($data) {
                            return '<a class = "ajaxviewmodel" href = "' . route('user.events.view', ['id' => $data->id]) . '" title = "View"><i class = "fa fa-eye"></i></a>';
                        })
                        ->rawColumns(['action', 'image'])
                        ->toJson();
    }

    public function view(Request $request, $id) {
        $user = Auth::user();

        $data = Event::with('user_event')->where('id', $id)->whereHas('user_event', function($q) use ($user) {
                    $q->where('user_id', $user->id);
                })->first();


        return view('user.events.view', ['data' => $data]);
    }

    public function saveUserEvent(Request $request, $event_id) {
        $user = Auth::user();

        $getuserevent = UserEvent::where('user_id', $user->id)->where('event_id', $event_id)->first();
        if ($getuserevent) {
            return redirect()->route('user.events.upcoming')->with('success', 'Already Apply this event!');
        } else {
            $saveeventobj = array();
            $saveeventobj['user_id'] = $user->id;
            $saveeventobj['event_id'] = $event_id;
            UserEvent::create($saveeventobj);
            return redirect()->route('user.events.upcoming')->with('success', 'Apply Event Successfully!');
        }
    }

}
