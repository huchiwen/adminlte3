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



 Route::get('/index/index', 'Index\IndexController@index')->name('index.index');  //后台登陆页面
/*Route::get('/admin/create', 'Admin\AdminsController@create')->name('admin.create');//添加管理员
Route::get('/admin/index', 'Admin\AdminsController@index')->name('admin.index');//管理员列表
Route::post('/admin/store', 'Admin\AdminsController@store')->name('admin.store');//管理员列表
*/
Route::resource('admin','Admin\AdminsController');

//Route::get('/',function (){echo 'xx';});