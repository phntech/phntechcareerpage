<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Applicant;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class CareerController extends Controller
{
    
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

        // return $status;

        if($status==="success"){
            Session::put('status',$status);
            Session::put('otp',$otp);
            Session::put('first_name',$request->first_name);
            Session::put('last_name',$request->last_name);
            Session::put('wtsp_mob_no',$request->wtsp_mob_no);
            Session::put('email',$request->email);
            Session::put('state',$request->state);
            Session::put('district',$request->district);
            Session::put('taluka',$request->taluka);
            Session::put('qualification',$request->qualification);



            return redirect()->back()->with('status',$status);

      }




    // //   return $newotp;

    //     }else{
    //         return "wrong otpz";
    //     }

       
    }


public function submitOTP(Request $request){

    $num1=$request->num_one;
    $first_name= Session::get('first_name');
    $last_name= Session::get('last_name');
    $wtsp_mob_no= Session::get('wtsp_mob_no');
    $email= Session::get('email');
    $state= Session::get('state');
    $district= Session::get('district');
    $taluka= Session::get('taluka');
    $qualification= Session::get('qualification');


 $otp= Session::get('otp');

 $no1=$request->num_one;
 $no2=$request->num_two;
 $no3=$request->num_three;
 $no4=$request->num_four;
 $no5=$request->num_five;
 $no6=$request->num_six;
 $newotp=$no1.$no2.$no3.$no4.$no5.$no6;

if($otp==$newotp){
    DB::insert('insert into applicants (`first_name`, `last_name`, `wtsp_mob_no`, `email`, `state`, `district`, `taluka`, `qualification`) values (?, ?,?,?,?,?,?,?)', [$first_name,$last_name,$wtsp_mob_no,$email,$state,$district,$taluka,$qualification]);
    return redirect()->back()->with('otpcorrect',"Thanks we will contact you soon");

}else{
    return redirect()->back()->with('otpincorrect',"OTP is incorrect");
} 

   return $otp;
}

   
}
