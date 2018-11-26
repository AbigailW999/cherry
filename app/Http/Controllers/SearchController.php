<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar;

class SearchController extends Controller
{
	public function getIndex(){
	    $search = $_GET['search'];
	    $products = Tovar::where('name', 'LIKE', "%$search%")->get();
	    $products_more = Tovar::where('body', 'LIKE', "%$search%")->get();
	 //   $maintexts = Maintext::where('name', 'LIKE', "%$search%")->get();
	//    $maintexts_more = Maintext::where('body', 'LIKE', "%$search%")->get();
	    return view('search', compact('products', 'products_more'));
	}
}
