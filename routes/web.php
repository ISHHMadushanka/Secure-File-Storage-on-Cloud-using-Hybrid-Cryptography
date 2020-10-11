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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'PagesController@indexabout');

Route::get('/owner', 'PagesController@indexowner');

Route::get('/user', 'PagesController@indexuser');

Route::get('/home', 'PagesController@indexhome');






Auth::routes();

Route::get('/owner', 'HomeController@index')->name('owner');
Route::get('/user', 'HomeController@index')->name('user');

