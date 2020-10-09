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

Route::get('/','LandingController@index');
// Auth part
Route::get('/login','AuthController@loginPage');
Route::post('/user-register','AuthController@UserRegister');

Route::get('/vendorList','VendorListController@StaticPage');
Route::get('/allstore','VendorListController@AllStore');
Route::get('/store-detail','VendorListController@storeDetail');
Route::get('/product-fashion','ProductController@showFashion');
Route::get('/help-cashback','HelpController@showData');


// admin part

Route::get('/admin/login','AuthController@adminLoginPage');

Route::get('/admin/dashboard','admin\DashboardController@index');
Route::get('/admin/userlist','admin\UserController@UserList');

// store
Route::get('/admin/storelist','admin\StoreController@StoreList');
Route::get('/admin/addStore','admin\StoreController@StoreAdd');
Route::get('/admin/storeEdit','admin\StoreController@StoreEdit');

// order
Route::get('/admin/orderlist','admin\OrderController@OrderList');
Route::get('/admin/orderView','admin\OrderController@OrderView');

// Transaction 
Route::get('/admin/transactionlist','admin\TransactionController@index');
