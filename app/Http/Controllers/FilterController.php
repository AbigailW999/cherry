<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar;

class FilterController extends Controller
{
    public function getFilter(){
    	$id = (int)$_GET['id'];
    	if($id>0){
    		$products = Tovar::where('category_id', $id)->get();////error - $products = Tovar::
    	}else{
    		$products = Tovar::all();
    	}
    	return view('includes.filter', compact('products'));
    }

}
