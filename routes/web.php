<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'BaseController@getIndex');

Route::get('product/{id}', 'TovarController@getOne');// one tovar page

Route::get('basket/add/{id}', 'BasketController@getAdd');

Route::get('basket/delete/all/', 'BasketController@getClearAll');//clear basket

Route::get('basket/delete/{id}', 'BasketController@getDelete');

Route::post('order', 'OrderController@postIndex');// link in basket.blade.php <form method="post" action="{{asset('order')}}">

Route::get('search', 'SearchController@getIndex');

Route::post('/ajax', 'AjaxController@postIndex');

Route::get('/filter', 'FilterController@getFilter');

Route::group(['middleware' => ['lang']], function(){
	Route::get('/', 'BaseController@getIndex');
	Route::get('categories', 'TovarController@getAll');
	Route::get('basket', 'BasketController@getAll');
});// middleware Lang

Route::group(['middleware' =>['no_user']], function(){ //ограничения для гостей 
	Route::post('order', 'OrderController@postIndex');
	Route::get('search', 'SearchController@getIndex');
});

Route::group(['middleware' =>['user']], function(){ //ограничения для пользователей
    
});

Route::group(['middleware' =>['admin']], function(){ //ограничения для админа
    
});

Route::get('/{url}', 'PageController@getIndex');