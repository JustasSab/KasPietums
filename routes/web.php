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

Auth::routes();
Route::group(['middleware' => 'is_admin'], function() {
    Route::get('admin/home', 'App\Http\Controllers\HomeController@adminHome')->name('admin.home');
    Route::get('admin/profile', 'App\Http\Controllers\AdminController@profile')->name('admin.profile');
});

Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('profile', 'App\Http\Controllers\UserController@profile')->name('profile');
