<?php

namespace App\Http\Controllers;

use App\Category;

class TovarController extends Controller
{
    public function getAll(){
    	$cats = Category::all();
    	return view('categories', compact('cats'));
    }
}
