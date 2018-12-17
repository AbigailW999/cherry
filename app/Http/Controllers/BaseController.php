<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App;

class BaseController extends Controller
{
    public function getIndex(Request $request){
    	//$request->lang;
    	//App::getLocale();
  
//    	$obj = Maintext::where('url', 'index')
//    					->where('lang', $request->lang)
//   					->first();
//    	$obj->name;
    	return view('welcome');
    }

}
