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


Route::get('/admin/index','Admin\IndexsController@index');  //后台登陆页面
Route::resource('/admin/admin','Admin\AdminsController',['only' => ['index', 'create', 'store', 'update', 'edit']]); //管理员


