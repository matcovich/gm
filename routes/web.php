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
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

///*adminRoute*/
// 'prefix' => 'admin',
//    'namespace' => 'Admin',
//    'middleware' => 'auth'],
//    function(){
//        Route::get('/', 'UserController@inicio')->name('inicio');
//        Route::get('/usuarios', 'UserController@index')->name('user.index');
//        Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');
//    });