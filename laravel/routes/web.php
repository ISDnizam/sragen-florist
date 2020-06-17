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


// Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('homepage');
Route::get('/tentang-toko-bunga-sragen', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/product/detail/{id}', 'HomeController@detail')->name('detailProduct');


Route::get('/admin', 'admin\DashboardController@index')->name('contact');

Route::get('/admin/product', 'admin\ProductController@index');
Route::get('admin/product/add', 'admin\ProductController@add');
Route::post('admin/product/action_add', 'admin\ProductController@action_add');
Route::get('admin/product/edit/{id}', 'admin\ProductController@edit');
Route::post('admin/product/action_edit/{id}', 'admin\ProductController@action_edit')->name('product.edit');
Route::get('admin/product/delete/{id}', 'admin\ProductController@delete');



Route::get('/admin/settings', 'admin\SettingsController@index');
Route::get('admin/settings/edit/{id}', 'admin\SettingsController@edit');
Route::post('admin/settings/action_edit/{id}', 'admin\SettingsController@action_edit')->name('settings.edit');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
