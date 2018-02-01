<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Activity;

class OnlineUsers extends Controller
{

	public function OnlineActivity(){

		// Find latest users
		//$activities = Activity::users()->get();
		/*
		$activities = Activity::users(10)->get();  // Last 10 minutes
		$activities = Activity::users(60)->get();  // Last 60 minutes
		//You have other methods for your convenience to grab the latest activities by seconds or even hours.

		$activities = Activity::usersBySeconds(30)->get();  // Get active users within the last 30 seconds
		$activities = Activity::usersByMinutes(10)->get();  // Get active users within the last 10 minutes
		$activities = Activity::usersByHours(1)->get();     // Get active users within the last 1 hour

		$numberOfUsers = Activity::users()->count();        // Count the number of active users

		$activities = Activity::users()->mostRecent()->get();   // Get active users and sort them by most recent
		$activities = Activity::users()->leastRecent()->get();  // Get active users and sort them by least recent

		$activities = Activity::users()->orderByUsers('email')->get();

		*/

		$numberOfGuests = Activity::guests()->count();      // Count the number of active guests

		$activities = Activity::users(1)->get();
		// Loop through and echo user's name
		foreach ($activities as $activity) {

		    echo $activity->user->name . '<br>';
		}

	}
   



}
