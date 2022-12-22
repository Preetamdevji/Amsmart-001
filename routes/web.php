<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\MainController;
use App\Http\Controllers\Admin\BannerSectionController;


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
		Route::resource('dashboard', 'App\Http\Controllers\Admin\DashboardController');
		Route::get('/status/user/brand', [BrandController::class, 'updateStatus'])->name('update_user_status');

		Route::resource('user', 'App\Http\Controllers\Admin\UserController');
		Route::resource('product', 'App\Http\Controllers\Admin\ProductController');
		Route::resource('brand', 'App\Http\Controllers\Admin\BrandController');
		Route::resource('product_category', 'App\Http\Controllers\Admin\ProductCategoryController');
		Route::resource('contact', 'App\Http\Controllers\Admin\ContactController');
		Route::resource('cms_pages', 'App\Http\Controllers\Admin\CMSController');
		Route::resource('home_slider', 'App\Http\Controllers\Admin\HomeSliderController');
		Route::resource('deal_banner', 'App\Http\Controllers\Admin\DealBannerController');
		// Route::resource('home_slider', 'App\Http\Controllers\Admin\HomeSliderController');
		Route::resource('banner_section', 'App\Http\Controllers\Admin\BannerSectionController');


	});


/**** BEGIN FRONTEND ROUTES ****/
Route::get('/products', [MainController::class, 'product']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/', [MainController::class, 'index']);
Route::get('/search',[MainController::class, 'product'])->name('search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

