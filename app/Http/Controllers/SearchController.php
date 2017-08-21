<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;

class SearchController extends Controller

{

    public function index(){
        return view('part.sample');
    }

    public function autoComplete(Request $request) {

        $query = $request->get('term','');

        $products=User::where('name','LIKE','%'.$query.'%')->get();

        $data=array();

        foreach ($products as $product) {

            $data[]=array('name'=>$product->name);
        }
        if(count($data))

            return $data;

        else
            return ['value'=>'No Result Found','id'=>''];
    }

}