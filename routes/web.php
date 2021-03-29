<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/upload', function () {
    return view('upload');
});

Route::name('admin.')->prefix('admin')->namespace("App\Http\Controllers\Admin")->group(function(){ 
    Route::get('', 'DashboardController@index')->name('dashboard');
    Route::get('config', 'ConfigController@index')->name('config');
    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryCotroller');
    Route::resource('brands', 'BrandController');

    Route::resource('products', 'ProductController');
    
});

Route::name('site.')->prefix('site')->namespace("App\Http\Controllers")->group(function(){ 
    Route::get('', 'HomeController@index')->name('home');
    Route::get('about', 'AboutController@index')->name('about');
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::get('shop', 'ShopController@index')->name('shop');

    Route::get('shop/{id}', 'ShopController@show')->name('shop.product');
    Route::get('catalog', function () {
        return view('web.catalog');
    });    
});

Route::fallback(function(){
    return view('errors.404');
});