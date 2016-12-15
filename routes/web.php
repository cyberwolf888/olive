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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index');

Route::get('/product/{id}', 'ProductController@show')->name('front_product');

Route::get('/category/{id}', 'CategoryController@index')->name('category');

Route::get('/sale', 'HomeController@sale');

Route::get('/newitem', 'HomeController@newitem');

Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@contact');

Route::post('/subscribe', 'HomeController@subscribe');

Route::post('/cart/insert', 'CartController@insert')->name('cart.insert');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/clear', 'CartController@clear')->name('cart.clear');
Route::post('/delete', 'CartController@delete')->name('cart.delete');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::get('/checkout', 'CartController@checkout')->name('cart.checkout');
Route::post('/checkout', 'CartController@processCheckout')->name('cart.checkout.process');
Route::get('/invoice/{id}', 'CartController@invoice')->name('cart.invoice');
Route::get('/payment', 'CartController@payment')->name('cart.payment');
Route::post('/payment', 'CartController@prosesPayment')->name('cart.payment.proses');


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

    //admin route
    Route::group(['prefix' => 'admin', 'as'=>'admin'], function() {
        Route::get('/', 'Master\AdminController@index')->name('.manage');
        Route::get('/create', 'Master\AdminController@create')->name('.create');
        Route::post('/create', 'Master\AdminController@store')->name('.store');
        Route::get('/edit/{id}', 'Master\AdminController@edit')->name('.edit');
        Route::post('/edit/{id}', 'Master\AdminController@update')->name('.update');
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

    //product route
    Route::group(['prefix' => 'product', 'as'=>'product'], function() {
        Route::get('/', 'Master\ProductController@index')->name('.manage');
        Route::get('/create', 'Master\ProductController@create')->name('.create');
        Route::post('/create', 'Master\ProductController@store')->name('.store');
        Route::get('/edit/{id}', 'Master\ProductController@edit')->name('.edit');
        Route::post('/edit/{id}', 'Master\ProductController@update')->name('.update');
        Route::get('/gallery/manage/{id}', 'Master\ProductController@manage_gallery')->name('.gallery.manage');
        Route::get('/gallery/create/{id}', 'Master\ProductController@create_gallery')->name('.gallery.create');
        Route::post('/gallery/create/{id}', 'Master\ProductController@store_gallery')->name('.gallery.store');
        Route::get('/gallery/delete/{id}', 'Master\ProductController@destroy_gallery')->name('.gallery.destroy');
        Route::get('/detail/{id}', 'Master\ProductController@show')->name('.show');
    });

    Route::group(['prefix' => 'transaction', 'as'=>'transaction'], function() {
        Route::get('/', 'Master\TransactionController@index')->name('.manage');
        Route::get('/detail/{id}', 'Master\TransactionController@show')->name('.show');
        Route::post('/approve', 'Master\TransactionController@approve')->name('.approve');
        Route::post('/decline', 'Master\TransactionController@decline')->name('.decline');
        Route::post('/cancel', 'Master\TransactionController@cancel')->name('.cancel');
    });

    Route::group(['prefix' => 'report', 'as'=>'report'], function() {
        Route::get('/', 'Master\ReportController@index')->name('.index');
        Route::post('/transaction', 'Master\ReportController@transaction')->name('.transaction');
    });

    Route::group(['prefix' => 'profile', 'as'=>'profile'], function() {
        Route::get('/', 'Master\ProfileController@index')->name('.index');
        Route::post('/edit/{id}', 'Master\ProfileController@update')->name('.update');
    });
});

//Route Member
Route::group(['prefix' => 'member', 'middleware' => ['auth','role:member']], function() {
    Route::get('/', 'Member\DashboardController@index');
});

