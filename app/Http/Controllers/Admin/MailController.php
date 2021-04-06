<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Common\GeneralComponent;
use Illuminate\Http\Request;
use App\Mail\ComposeEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {

    public function __construct() {
        $this->general = new GeneralComponent();
    }

    public function index() {

        return view('admin.email.index');
    }

    public function postComposeEmail(Request $request) {
        if ($request->isMethod('post')) {

            $mail_content = $request->all();
            unset($mail_content['_token']);
            
            Mail::to($request->email)->send(new ComposeEmail($mail_content));
            
            return redirect()->route('admin.email.compose')->with('success', 'Email send success!.');
        }
    }

}
