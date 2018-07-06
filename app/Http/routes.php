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
