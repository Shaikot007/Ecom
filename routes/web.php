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

//=============================Ecom route start============================

Route::get('/', [
    'uses'          => 'App\Http\Controllers\EcomController@index',
    'as'            => 'home',
]);

Route::get('/about-us', [
    'uses'          => 'App\Http\Controllers\EcomController@about',
    'as'            => 'about'
]);

Route::get('/story', [
    'uses'          => 'App\Http\Controllers\EcomController@story',
    'as'            => 'story'
]);

Route::get('/our-team', [
    'uses'          => 'App\Http\Controllers\EcomController@team',
    'as'            => 'team'
]);

Route::get('/gallery', [
    'uses'          => 'App\Http\Controllers\EcomController@gallery',
    'as'            => 'gallery'
]);

Route::get('/faq', [
    'uses'          => 'App\Http\Controllers\EcomController@faq',
    'as'            => 'faq'
]);

Route::get('/sub-category-product/{id}', [
    'uses'          => 'App\Http\Controllers\EcomController@subCategoryProduct',
    'as'            => 'sub-category-product'
]);

Route::get('/brand-product/{id}', [
    'uses'          => 'App\Http\Controllers\EcomController@brandProduct',
    'as'            => 'brand-product'
]);

Route::get('/product-details/{id}', [
    'uses'          => 'App\Http\Controllers\EcomController@productDetails',
    'as'            => 'product-details'
]);

Route::get('/search', [
    'uses'          => 'App\Http\Controllers\EcomController@search',
    'as'            => 'search'
]);

//==============================Ecom route end=============================

//=============================Cart route start============================

Route::post('/add-to-cart/{id}', [
    'uses'          => 'App\Http\Controllers\CartController@add',
    'as'            => 'cart.add'
]);

Route::get('/show-cart', [
    'uses'          => 'App\Http\Controllers\CartController@show',
    'as'            => 'cart.show'
]);

Route::post('/update-cart/{id}', [
    'uses'          => 'App\Http\Controllers\CartController@update',
    'as'            => 'cart.update'
]);

Route::get('/delete-cart/{id}', [
    'uses'          => 'App\Http\Controllers\CartController@delete',
    'as'            => 'cart.delete'
]);

//==============================Cart route end=============================

//===========================Checkout route start==========================

Route::get('/checkout', [
    'uses'          => 'App\Http\Controllers\CheckoutController@index',
    'as'            => 'checkout'
]);

Route::post('/new-order', [
    'uses'          => 'App\Http\Controllers\CheckoutController@newOrder',
    'as'            => 'order.new'
]);

Route::get('/complete-order', [
    'uses'          => 'App\Http\Controllers\CheckoutController@completeOrder',
    'as'            => 'order.complete'
]);

Route::get('/customer-logout', [
    'uses'          => 'App\Http\Controllers\CheckoutController@customerLogout',
    'as'            => 'customer.logout'
]);

//===========================Checkout route end============================

//==========================Dashboard route start==========================

Route::get('/dashboard', [
    'uses'          => 'App\Http\Controllers\DashboardController@index',
    'as'            => 'dashboard',
    'middleware'    => ['auth:sanctum', 'verified']
]);

//===========================Dashboard route end===========================

//==========================Category route start===========================

Route::get('/add-category', [
    'uses'          => 'App\Http\Controllers\CategoryController@index',
    'as'            => 'category.add',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/manage-category', [
    'uses'          => 'App\Http\Controllers\CategoryController@manage',
    'as'            => 'category.manage',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/new-category', [
    'uses'          => 'App\Http\Controllers\CategoryController@create',
    'as'            => 'category.new',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/edit-category/{id}', [
    'uses'          => 'App\Http\Controllers\CategoryController@edit',
    'as'            => 'category.edit',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/update-category/{id}', [
    'uses'          => 'App\Http\Controllers\CategoryController@update',
    'as'            => 'category.update',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/delete-category/{id}', [
    'uses'          => 'App\Http\Controllers\CategoryController@delete',
    'as'            => 'category.delete',
    'middleware'    => ['auth:sanctum', 'verified']
]);

//===========================Category route end============================

//========================Sub category route start=========================

Route::get('/add-sub-category', [
    'uses'          => 'App\Http\Controllers\SubCategoryController@index',
    'as'            => 'subcategory.add',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/manage-sub-category', [
    'uses'          => 'App\Http\Controllers\SubCategoryController@manage',
    'as'            => 'subcategory.manage',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/new-sub-category', [
    'uses'          => 'App\Http\Controllers\SubCategoryController@create',
    'as'            => 'subcategory.new',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/edit-sub-category/{id}', [
    'uses'          => 'App\Http\Controllers\SubCategoryController@edit',
    'as'            => 'subcategory.edit',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/update-sub-category/{id}', [
    'uses'          => 'App\Http\Controllers\SubCategoryController@update',
    'as'            => 'subcategory.update',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/delete-sub-category/{id}', [
    'uses'          => 'App\Http\Controllers\SubCategoryController@delete',
    'as'            => 'subcategory.delete',
    'middleware'    => ['auth:sanctum', 'verified']
]);

//=========================Sub category route end==========================

//============================Brand route start============================

Route::get('/add-brand', [
    'uses'          => 'App\Http\Controllers\BrandController@index',
    'as'            => 'brand.add',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/manage-brand', [
    'uses'          => 'App\Http\Controllers\BrandController@manage',
    'as'            => 'brand.manage',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/new-brand', [
    'uses'          => 'App\Http\Controllers\BrandController@create',
    'as'            => 'brand.new',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/edit-brand/{id}', [
    'uses'          => 'App\Http\Controllers\BrandController@edit',
    'as'            => 'brand.edit',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/update-brand/{id}', [
    'uses'          => 'App\Http\Controllers\BrandController@update',
    'as'            => 'brand.update',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/delete-brand/{id}', [
    'uses'          => 'App\Http\Controllers\BrandController@delete',
    'as'            => 'brand.delete',
    'middleware'    => ['auth:sanctum', 'verified']
]);

//=============================Brand route end=============================

//============================Unit route start=============================

Route::get('/add-unit', [
    'uses'          => 'App\Http\Controllers\UnitController@index',
    'as'            => 'unit.add',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/manage-unit', [
    'uses'          => 'App\Http\Controllers\UnitController@manage',
    'as'            => 'unit.manage',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/new-unit', [
    'uses'          => 'App\Http\Controllers\UnitController@create',
    'as'            => 'unit.new',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/edit-unit/{id}', [
    'uses'          => 'App\Http\Controllers\UnitController@edit',
    'as'            => 'unit.edit',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/update-unit/{id}', [
    'uses'          => 'App\Http\Controllers\UnitController@update',
    'as'            => 'unit.update',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/delete-unit/{id}', [
    'uses'          => 'App\Http\Controllers\UnitController@delete',
    'as'            => 'unit.delete',
    'middleware'    => ['auth:sanctum', 'verified']
]);

//=============================Unit route end==============================

//===========================Product route start===========================

Route::get('/add-product', [
    'uses'          => 'App\Http\Controllers\ProductController@index',
    'as'            => 'product.add',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/manage-product', [
    'uses'          => 'App\Http\Controllers\ProductController@manage',
    'as'            => 'product.manage',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/new-product', [
    'uses'          => 'App\Http\Controllers\ProductController@create',
    'as'            => 'product.new',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/edit-product/{id}', [
    'uses'          => 'App\Http\Controllers\ProductController@edit',
    'as'            => 'product.edit',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/update-product/{id}', [
    'uses'          => 'App\Http\Controllers\ProductController@update',
    'as'            => 'product.update',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/delete-product/{id}', [
    'uses'          => 'App\Http\Controllers\ProductController@delete',
    'as'            => 'product.delete',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/get-sub-category-by-id', [
    'uses'          => 'App\Http\Controllers\ProductController@getSubCategory',
    'as'            => 'product.get-sub-category',
    'middleware'    => ['auth:sanctum', 'verified']
]);

//============================Product route end============================

//============================Order route start============================

Route::get('/manage-order', [
    'uses'          => 'App\Http\Controllers\OrderController@manage',
    'as'            => 'order.manage',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/details-order/{id}', [
    'uses'          => 'App\Http\Controllers\OrderController@details',
    'as'            => 'order.details',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/invoice/{id}', [
    'uses'          => 'App\Http\Controllers\OrderDetailController@invoice',
    'as'            => 'invoice',
    'middleware'    => ['auth:sanctum', 'verified']
]);

//=============================Order route end=============================

//=============================User route start============================

Route::get('/add-user', [
    'uses'          => 'App\Http\Controllers\UserController@index',
    'as'            => 'user.add',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/manage-user', [
    'uses'          => 'App\Http\Controllers\UserController@manage',
    'as'            => 'user.manage',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/new-user', [
    'uses'          => 'App\Http\Controllers\UserController@create',
    'as'            => 'user.new',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/edit-user/{id}', [
    'uses'          => 'App\Http\Controllers\UserController@edit',
    'as'            => 'user.edit',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/update-user/{id}', [
    'uses'          => 'App\Http\Controllers\UserController@update',
    'as'            => 'user.update',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/delete-user/{id}', [
    'uses'          => 'App\Http\Controllers\UserController@delete',
    'as'            => 'user.delete',
    'middleware'    => ['auth:sanctum', 'verified']
]);

//==============================User route end=============================
