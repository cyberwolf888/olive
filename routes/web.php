<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::any('/rbac', function(){
    $user = App\User::where('name', '=', 'admin')->first();

// or eloquent's original technique
    $user->roles()->attach(1); // id only
});

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/test',function (){
   return view('frontend/register');
});


// Route master
Route::group(['prefix' => 'master', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'Master\DashboardController@index');
});
