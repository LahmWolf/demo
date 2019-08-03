<?php

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

Route::get('/admin', function(){
    return view('admin.index');
});

Route::get('/admin/product', 'Admin\ProductController@list_product')->name('list_product');
Route::get('/admin/user', 'Admin\HomeController@list_user')->name('list_user');
Route::get('/admin/category', 'Admin\HomeController@list_category')->name('list_category');
Route::get('/admin/orderdetail', 'Admin\HomeController@list_orderdetail')->name('list_orderdetail');
Route::get('/admin/customer', 'Admin\CustomerController@list_customer')->name('list_customer');
Route::get('/admin/slide', 'Admin\HomeController@list_slide')->name('list_slide');
