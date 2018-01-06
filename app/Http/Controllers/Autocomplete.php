<?php

namespace App\Http\Controllers;
use App\UniversityModels;
use DB;

use Illuminate\Http\Request;

class Autocomplete extends Controller
{
    public function OneAutocomplete(Request $request)
    {

    $term= $request->term;

    $data = UniversityModels::where('university_name', 'LIKE', '%'.$term.'%')
    //$data = UniversityModels::
    		->take(5)

		    ->get();

    $result = array();

    foreach ($data as $key => $value) {
    	# code...
    	$result []= ['id' =>$value->id, 'value' => $value->university_name];
    }

   	
   	return response()->json($result);      	

    }
}
