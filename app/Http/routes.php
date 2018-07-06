<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/admin','Confcontroller@index')
//后台网站管理
Route::get('/admin/config/add','Confcontroller@create');
Route::get('/admin/config/index','Confcontroller@index');
Route::post('/admin/config/store','Confcontroller@store');



//后台Banner管理
Route::get('/admin/banner/add','Bannercontroller@create');
Route::post('/admin/banner/store','Bannercontroller@store');
Route::get('/admin/banner/index','Bannercontroller@index');
Route::get('/admin/banner/edit/{id}','Bannercontroller@edit');
Route::post('/admin/banner/update','Bannercontroller@update');
Route::get('/admin/banner/destroy/{id}','Bannercontroller@destroy');

/*------------------------------------------后台NAV------------------------------------------*/
//后台Nav添加
Route::get('/admin/nav/create','NavController@create');	

Route::get('/admin/nav/index','NavController@index');	

Route::post('/admin/nav/store','NavController@store');	

Route::get('/admin/nav/destroy/{id}','NavController@destroy');

Route::get('/admin/nav/edit/{id}','NavController@edit');

Route::post('/admin/nav/update/{id}','NavController@update');

/*------------------------------------------后台VIP------------------------------------------*/

Route::get('/admin/vip/create','VipController@create');

Route::get('/admin/vip/index','VipController@index');

Route::post('/admin/vip/store','VipController@store');

Route::get('/admin/vip/destroy/{id}','VipController@destroy');

Route::get('/admin/vip/edit/{id}','VipController@edit');

Route::post('/admin/vip/update/{id}','VipController@update');

/*----------------------------------------后台S_NAV------------------------------------------*/

Route::get('/admin/s_nav/create','S_navController@create');

Route::get('/admin/s_nav/index','S_navController@index');

Route::post('/admin/s_nav/store','S_navController@store');

Route::get('/admin/s_nav/destroy/{id}','S_navController@destroy');

Route::get('/admin/s_nav/edit/{id}','S_navController@edit');

Route::post('/admin/s_nav/update/{id}','S_navController@update');
