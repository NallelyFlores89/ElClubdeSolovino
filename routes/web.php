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

Route::get('/', function () {
    return view('main');
});
Route::post('/login', 'UserController@authenticate');
Route::get('/logout', 'UserController@logout');


Route::group(['middleware' => 'auth'], function(){
	Route::get('/perfil', function () {
	    return view('profile');
	});

    Route::resource('pets', 'PetController');
});