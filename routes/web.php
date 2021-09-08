<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    AdminController,
    UserController,
    CategoryController,
};
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
    Route::get('admin/home', 'HomeController@adminHome')->name('admin.home');
    Route::get('admin/profile', 'AdminController@profile')->name('admin.profile');
});

Route::get('home', 'HomeController@index')->name('home');
Route::get('profile', 'UserController@profile')->name('profile');
Route::get('category/{slug}', 'CategoryController@viewCategory')->name('viewcategory');

//Route::get('recipes/{recipe:name}') //Route Model Biding for recipes, URL'e rodys recepto pavadinima (slug)