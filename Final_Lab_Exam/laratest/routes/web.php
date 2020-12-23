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

Route::get('/',  function () {
    return view('welcome');
});


Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');
Route::get('/logout', 'logoutController@index');


Route::group(['middleware'=>['sess']], function(){

	Route::get('/home', 'homeController@index')->middleware('sess')->name('home.index');
	//Route::get('/userlist', 'homeController@userlist')->name('home.userlist');
	Route::get('/userlist', ['uses'=> 'homeController@userlist', 'as'=>'home.userlist']);
	Route::get('/jobList', ['uses'=> 'homeController@jobList', 'as'=>'home.jobList']);
	Route::get('/details/{id}', 'homeController@show');


	Route::group(['middleware'=>['type']], function(){
		Route::get('/create', 'homeController@create')->name('home.create');
		Route::post('/create', 'homeController@store');
		Route::get('/createJob', 'homeController@createJob')->name('home.createJob');
		Route::get('/user/edit/{id}', 'homeController@edit')->name('home.edit');
		Route::post('/user/edit/{id}', 'homeController@update');
		Route::get('/delete/{id}', 'homeController@delete');
		Route::post('/delete/{id}', 'homeController@destroy');
	});

	
});



