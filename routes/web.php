<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CMSController;
use App\Http\Controllers\Admin\HomeSliderController;


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
	Route::group(['prefix' => 'admin'], function() {
		Route::get('/status/update/brand', [BrandController::class, 'updateStatus'])->name('update_brand_status');

		Route::resource('user', 'App\Http\Controllers\Admin\UserController');
		Route::resource('product', 'App\Http\Controllers\Admin\ProductController');
		Route::resource('brand', 'App\Http\Controllers\Admin\BrandController');
		Route::resource('product_category', 'App\Http\Controllers\Admin\ProductCategoryController');
		Route::resource('contact', 'App\Http\Controllers\Admin\ContactController');
		Route::resource('cms_pages', 'App\Http\Controllers\Admin\CMSController');
		Route::resource('home_slider', 'App\Http\Controllers\Admin\HomeSliderController');


	});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

