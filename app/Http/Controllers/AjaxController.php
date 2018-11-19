<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar;

class AjaxController extends Controller
{
    public function postIndex(){
    	$dataId = (int)$_POST["id"];
    	$obj = Tovar::find($dataId);
    	return view('includes.ajax', compact('obj'));//папка includes
    }
}
