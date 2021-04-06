<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Blog;
use App\Event;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    }

    public function aboutus() {
        return view('aboutus');
    }

    public function team() {
        return view('team');
    }

    public function blog() {
        $blogs = Blog::where('is_active', 1)->latest()->limit(10)->get();

        return view('blog', ['blogs' => $blogs]);
    }

    public function blogDetail($slug) {
        $blogDetail = Blog::where('is_active', 1)->where('slug', $slug)->first();

        return view('blogDetail', ['blogDetail' => $blogDetail]);
    }

    public function contact() {
        return view('contact');
    }

    public function commite_emembers() {
        return view('commite_emembers');
    }

    public function cme_photos() {
        return view('cme_photos');
    }

    public function agenda_for_meeting() {
        return view('agenda_for_meeting');
    }

    public function press_release() {
        return view('press_release');
    }

    public function constitution() {
        return view('constitution');
    }

    public function events() {
        $events = Event::where('is_active', 1)->whereDate('date', '>=', date('Y-m-d'))->latest()->limit(10)->get();

        return view('events', ['events' => $events]);
    }

    public function eventDetail($slug) {
        $eventDetail = Event::where('is_active', 1)->where('slug', $slug)->first();

        return view('eventDetail', ['eventDetail' => $eventDetail]);
    }

}
