<?php

namespace App\Http\Controllers;

use App\Tovar;

class BasketController extends Controller
{
    public function getAdd($id=null){
    	//echo $id;
    	//echo 'Ok';
    	setcookie($id,1,time()+3600,'/');
    	return redirect()->back();
    }

    public function getAll(){
    	$arr = [];
    	$products = [];
    	foreach ($_COOKIE as $key => $value) {
    		$id=(int)$key;//переводим все id в числа, если нето то 0
    		if($id>0){
    			$arr[$id]=$value;//ключ - id товара, значение - кол-во товаров
    			$products[$id]=Tovar::find($id);//ключ - id товара, значение - объект товара
    		}
    	}

    	return view('basket', compact('arr', 'products'));
    }

    public function getDelete($id){
    	setcookie($id,'',time()-1,'/');
    	return redirect()->back();
    }

    public function getClearAll(){
        foreach ($_COOKIE as $key => $value) {
            $id=(int)$key;//переводим все id в числа, если нето то 0
            if($id>0){
               setcookie($id,'',time()-1,'/');
            }
        }
        return redirect()->back();
    }

}
