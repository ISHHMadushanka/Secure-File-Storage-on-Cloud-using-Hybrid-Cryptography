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

Route::get('/', 'PagesController@indexindex');

Route::get('/about', 'PagesController@indexabout');



// Route::view('/', 'welcome');

Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');

Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

Route::get('/fileupload', 'PagesController@indexfileupload');
Route::get('/viewfile', 'PagesController@indexviewfile');
Route::get('/viewsplitdata', 'PagesController@indexviewsplitdata');
Route::get('/viewrequest', 'PagesController@indexviewrequest');

Route::get('/viewfiles', 'PagesController@indexviewfiles');
Route::get('/verify', 'PagesController@indexverify');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin');

Route::post('/store', 'FileuploadController@store')->name('store');
Route::get('/viewfile','FileuploadController@index');
Route::get('/viewfiles','UserfileviewController@index');



Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
