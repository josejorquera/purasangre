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

Route::get('/', 'ClientController@index')->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'client','middleware' => 'auth' ], function() {

	Route::get('/', 'ClientController@index');
	Route::get('/add', 'ClientController@add');
	Route::get('/show/{id}', 'ClientController@show');
	Route::get('/edit/{id}', 'ClientController@edit');
	Route::get('/delete/{id}', 'ClientController@delete');
	
	Route::post('/filter', 'ClientController@indexFilter');
	Route::post('/create', 'ClientController@create');
	Route::post('/update', 'ClientController@update');
	Route::post('/delete', 'ClientController@delete');

});
// el prefijo es payment?? o payments??
Route::group(['prefix' => 'payment', 'middleware' => 'auth'], function(){

	Route::get('/', 'PaymentController@index');
	Route::get('/add/client/{client_id}', 'PaymentController@add');
	Route::get('/show/{id}', 'PaymentController@show');
	Route::get('/edit/{id}', 'PaymentController@edit');
	Route::get('/delete/{id}', 'PaymentController@delete');
	

	Route::post('/create', 'PaymentController@create');
	Route::post('/update', 'PaymentController@update');
	Route::post('/delete', 'PaymentController@delete');
});