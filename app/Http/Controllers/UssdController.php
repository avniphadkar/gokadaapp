<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UssdController extends Controller
{
    //Static Session funciton to create and respond according to user request for USSD token 
	public static funciton session(Request $reuest)
	{
		$text=$request->input('text');
        $session_id = $request->input('sessionId');
        $phone_number = $request->input('phoneNumber');
        $service_code = $request->input('serviceCode');
        $network_code = $request->input('networkCode');
        $level = explode("*", $text);
		
		//Do the logics and send responses in $response
		
		header('Content-type: text/plain');
        echo $response;
	}
}
