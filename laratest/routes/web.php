<?php

/* use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\logoutController; */


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

Route::get('/', function(){
	echo "index page";
});

Route::get('/login', 'loginController@index');
//Route::get('/login', [loginController::class, 'index']);
Route::post('/login', 'loginController@verify');
//Route::post('/login', [loginController::class, 'verify']);


Route::get('/home', 'homeController@index');
//Route::get('/home', [homeController::class, 'index']);
Route::get('/logout', 'logoutController@index');
//Route::get('/logout', [logoutController::class, 'index']);

Route::get('/create', 'homeController@create');
//Route::get('/create', [homeController::class, 'create']);
Route::post('/create', 'homeController@insert');
//Route::post('/create', [homeController::class, 'insert']);

Route::get('/stdlist', 'homeController@stdlist');
//Route::get('/stdlist', [homeController::class, 'stdlist']);
Route::get('/details/{id}', 'homeController@details');
//Route::get('/details/{id}', [homeController::class, 'details']);

Route::get('/edit/{id}', 'homeController@edit');
//Route::get('/edit/{id}', [homeController::class, 'edit']);
Route::post('/edit/{id}', 'homeController@update');
//Route::post('/edit/{id}', [homeController::class, 'update']);

Route::get('/delete/{id}', 'homeController@delete');
//Route::get('/delete/{id}', [homeController::class, 'delete']);
Route::post('/delete/{id}', 'homeController@destroy');
//Route::post('/delete/{id}', [homeController::class, 'destroy']);
