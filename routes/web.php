<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@indexindex');

Route::get('/about', 'PagesController@indexabout');

Route::get('/owner', 'PagesController@indexowner');

Route::get('/user', 'PagesController@indexuser');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
