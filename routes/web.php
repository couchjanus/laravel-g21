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

$router->get('/test', function () {
   
    return view('hello', ['message'=>"Hello from Route"]);
});

Route::post('/', function(){
    // 
});


Route::put('/', function(){
    // 
});


Route::patch('/', function(){
    // 
});


Route::match(['get', 'delete', 'options'], '/', function(){
    // 
});


Route::any('/', function(){
    // 
});


Route::get('/user/{id}/{name?}', function($id, $name="Jhon Doe"){
    return "This is User #: ".$id." User name:".$name;
})->where(['id' => '[0-9]+','name' => '[A-Za-z]+']);


// Route::get('/users/{id}/{name?}', function($id, $name="Jhon Doe"){
//     return "This is User #: ".$id." User name:".$name;
// })->whereNumber('id');

// Route::get('/users/{id}/{name}/profile', function($id, $name="Jhon Doe"){
//     return "This is Profile for User #: ".$id." User name:".$name;
// })->whereNumber('id')->name('profile');

// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home.index');

// Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');



Route::name('admin.')->prefix('admin')->namespace("App\Http\Controllers\Admin")->group(function(){ 
    Route::get('', 'DashboardController')->name('dashboard');
    Route::get('config', 'ConfigController@index')->name('config');
    Route::resource('users', 'UserController');
});

Route::name('site.')->prefix('site')->namespace("App\Http\Controllers")->group(function(){ 
    Route::get('', 'HomeController@index')->name('home');
        Route::get('about', 'AboutController@index')->name('about');
        Route::get('contact', 'ContactController@index')->name('contact');
});

// Route::group([
//     "namespace"=>"App\Http\Controllers",
//     'name'=>"site.", 
//     "prefix"=>"site",
//     ], function(){
//         Route::get('', 'HomeController@index')->name('home');
//         Route::get('about', 'AboutController@index')->name('about');
//         Route::get('contact', 'ContactController@index')->name('contact');
// });

// Route::group([
//     'name'=>"admin.", 
//     "prefix"=>"admin",
//     "namespace"=>"App\Http\Controllers\Admin"
//     ], function(){
//         Route::get('', 'DashboardController')->name('dashboard');
//         Route::get('config', 'ConfigController@index')->name('config');
//         Route::resource('users', 'UserController');
// });


Route::fallback(function(){
    return view('errors.404');
});