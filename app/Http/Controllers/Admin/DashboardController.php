<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp;

class DashboardController extends Controller {

    public function index() {


//        try {
//            $client = new GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);
//
//            $response = $client->request('POST', '/oauth/token', [
//                "headers" => [
//                    "Authorization" => "Basic " . base64_encode('gf_HNLFPSzaU_7RCK46Krg' . ':' . 'iV0RkoYhLvZyuEHyyDCdz8KxUpfEL2Nr')
//                ],
//                'form_params' => [
//                    "grant_type" => "client_credentials",
////                    "code" => '',
////                    "redirect_uri" => 'http://somillo.com'
//                ],
//            ]);
//
//            $token = json_decode($response->getBody()->getContents(), true);
//
//            $MEETING_ID = 'asdsad';
//            $response_past_meetings = $client->request('GET', '/v2/past_meetings/'.$MEETING_ID.'/participants', [
//                "headers" => [
//                    "Authorization" => "Bearer " . $token['access_token']
//                ]
//            ]);
//
//            $data = json_decode($response_past_meetings->getBody());
//            
//            echo "<pre>";
//            print_r($data);
//            exit;
//            if (!empty($data)) {
//                
////                foreach ($data->participants as $p) {
////                    $name = $p->name;
////                    $email = $p->user_email;
////                    echo "Name: $name";
////                    echo "Email: $email";
////                }
//            }
//            echo "<pre>";
//            print_r($token);
//            exit;
//        } catch (Exception $e) {
//            echo $e->getMessage();
//        }

        return view('admin.dashboard.index');
    }

}
