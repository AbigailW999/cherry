<?php

namespace App\Http\Controllers;

use App\Maintext;

class PageController extends Controller
{
    public function getIndex($url = null){

    	$obj=Maintext::where('url',$url)->first();
    	if(isset($_GET['print'])){
    		$temp = 'print';
    	} else {
    		$temp = 'base';
    	}
    	return view('page', compact('obj','temp'));
    }

}
