<?php

namespace App\Http\Controllers;

use QuestionViews;

use Illuminate\Http\Request;

class PageViewsController extends Controller
{
    function UserIP()
		{
		    $client  = @$_SERVER['HTTP_CLIENT_IP'];
		    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		    $remote  = $_SERVER['REMOTE_ADDR'];

		    if(filter_var($client, FILTER_VALIDATE_IP))
		    {
		        $ip = $client;
		    }
		    elseif(filter_var($forward, FILTER_VALIDATE_IP))
		    {
		        $ip = $forward;
		    }
		    else
		    {
		        $ip = $remote;
		    }

		    return $ip;
		}


		$user_ip = getUserIP();

		echo $user_ip; // Output IP address [Ex: 177.87.193.134]


}
