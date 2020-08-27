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

//Auth::routes(['verify'=>true]);
//HOME
Route::get('/', function () {return view('index');});
//LOGIN
Route::get('register-page', function () {return view('register-page');});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
