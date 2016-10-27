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

    //member route
    Route::group(['prefix' => 'member', 'as'=>'member'], function() {
        Route::get('/', 'Master\MemberController@index')->name('.manage');
        Route::get('/create', 'Master\MemberController@create')->name('.create');
        Route::post('/create', 'Master\MemberController@store')->name('.store');
        Route::get('/edit/{id}', 'Master\MemberController@edit')->name('.edit');
        Route::post('/edit/{id}', 'Master\MemberController@update')->name('.update');
        Route::get('/detail/{id}', 'Master\MemberController@show')->name('.show');
    });

    //category route
    Route::group(['prefix' => 'category', 'as'=>'category'], function() {
        Route::get('/', 'Master\CategoryController@index')->name('.manage');
        Route::get('/create', 'Master\CategoryController@create')->name('.create');
        Route::post('/create', 'Master\CategoryController@store')->name('.store');
        Route::get('/edit/{id}', 'Master\CategoryController@edit')->name('.edit');
        Route::post('/edit/{id}', 'Master\CategoryController@update')->name('.update');
        Route::get('/detail/{id}', 'Master\CategoryController@show')->name('.show');
    });
});
