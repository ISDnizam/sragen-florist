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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('homepage');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/product/detail/{id}', 'HomeController@detail')->name('detailProduct');


Route::get('/admin', 'admin\DashboardController@index')->name('contact');
Route::get('/admin/product', 'admin\ProductController@index');

Route::get('admin/product/add', 'admin\ProductController@add');
Route::post('admin/product/action_add', 'admin\ProductController@action_add');
Route::get('admin/product/edit/{id}', 'admin\ProductController@edit');
Route::post('admin/product/action_edit/{id}', 'admin\ProductController@action_edit')->name('product.edit');
Route::get('admin/product/delete/{id}', 'admin\ProductController@delete');
Route::get('admin/product/images/{id}', 'admin\ProductController@images');
Route::get('admin/product/delete_image/{id}', 'admin\ProductController@delete_image');
Route::post('admin/product/action_add_images', 'admin\ProductController@action_add_images');