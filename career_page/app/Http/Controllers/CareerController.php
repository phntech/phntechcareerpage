<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    private $x;

    public function __construct(Request $request)
    {
        $this->x = $request->first_name;
    }

    public function submitApplication(Request $request)
    {
        // return "formsubmitted";
        // $this->x ='22';
        $mobile_no = $request->wtsp_mob_no;

        $otp = random_int(100000, 999999);

        $msg = $otp . " is the OTP to login to your PHN Career account. DO NOT share the OTP with anyone. - PHN Technology";
        // Account details
        $apiKey = urlencode('NTM0ZjM5NDI3NTdhNjgzNjU4NDg1MTY3NTQ3MjZmNzE=');

        // Message details
        $numbers = array("91" . $mobile_no);
        $sender = urlencode('PHNTEC');
        $message = rawurlencode($msg);

        $numbers = implode(',', $numbers);

        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        // Process your response here
        // echo $response.balance;
        $data = json_decode($response, true);

        $status= $data['status'];

        //     // Applicant::create(array_merge(
        //     //     $request->all(),
        //     // )
        //     // );

        return $request->all();

        //     Session::put('user', $request->all());
        //     // $request->session()->put('User', $request->all());

    }

    public function submitOTP(Request $request)
    {
        $name = $this->x;

        return $name;
        //    Session::get('user');
    }
}
