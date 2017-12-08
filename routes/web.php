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


Route::get('/admin/login','loginController@login');
Route::post('/admin/login','loginController@dologin');

//后台路由组
Route::group(['middleware'=>'login'], function(){

	//后台首页
	Route::get('/admin','AdminController@index');

	//用户管理
	Route::resource('user','UserController');

	//文章管理
	Route::resource('article','ArticleController');

	//分类管理
	Route::resource('cate','CateController');

	
	
});

//详情页内容
Route::get('xiangqing','XiangqingController@xiangqing');
Route::get('xiangqing1','Xiangqing1Controller@xiangqing1');
Route::get('xiangqing2','Xiangqing2Controller@xiangqing2');
Route::get('xiangqing3','Xiangqing3Controller@xiangqing3');











