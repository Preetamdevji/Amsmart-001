<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\MainController;
use App\Http\Controllers\Admin\HomeController;
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
		Route::get('/status/update/product', [ProductController::class, 'updateStatus'])->name('update_product_status');
		Route::get('/status/update/banner_section', [BannerSectionController::class, 'updateStatus'])->name('update_banner_section_status');
		Route::get('/status/update/cms_pages', [CmsController::class, 'updateStatus'])->name('update_cms_status');
		Route::get('/status/update/product_category', [ProductCategoryController::class, 'updateStatus'])->name('update_Product_cat_status');
		Route::get('/status/update/user', [UserController::class, 'updateStatus'])->name('update_user_status');


		Route::resource('dashboard', 'App\Http\Controllers\Admin\DashboardController');
		Route::get('/dashboard',[DashboardController::class, 'dashboard']);


		Route::resource('user', 'App\Http\Controllers\Admin\UserController');
		Route::resource('product', 'App\Http\Controllers\Admin\ProductController');
		Route::resource('brand', 'App\Http\Controllers\Admin\BrandController');
		Route::resource('product_category', 'App\Http\Controllers\Admin\ProductCategoryController');
		Route::resource('contact', 'App\Http\Controllers\Admin\ContactController');
		Route::resource('cms_pages', 'App\Http\Controllers\Admin\CMSController');
		Route::resource('banner_section', 'App\Http\Controllers\Admin\BannerSectionController');



		Route::get('/profile', [HomeController::class, 'profile'])->name('profile.view');
		Route::post('/profile/update', [HomeController::class, 'profile_update'])->name('profile.update');
		Route::post('/update_password', [HomeController::class, 'update_password'])->name('update.password');


	});


/**** BEGIN FRONTEND ROUTES ****/
Route::get('/product-detail/{id}', [MainController::class, 'ProductDetail']);
Route::get('/products', [MainController::class, 'product']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/', [MainController::class, 'index']);

Route::get('/search',[MainController::class, 'product'])->name('search');

Route::get('/shopbycategory/{id}', [MainController::class, 'shopby']);



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

