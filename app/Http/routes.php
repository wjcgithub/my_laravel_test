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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return redirect('/blog');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');

//路由分组
//Route::group(['middleware' => 'auth'], function () {
//    Route::get('/', function ()    {
//        // 使用 Auth 中间件
//    });
//
//    Route::get('user/profile', function () {
//        // 使用 Auth 中间件
//    });
//});

Route::get('/hello/laravelacademy',['as'=>'academy',function(){
    return 'Hello LaravelAcademy！';
}]);

Route::get('/test/customfacade',['as'=>'cf','uses'=>'TestController@customfacade']);

Route::get('/member/index', 'MemberController@index');


Route::get('test1', ['uses'=>'StudentController@test1']);
Route::get('querybuilderinsert', ['uses'=>'StudentController@querybuilderinsert']);
Route::get('querybuilderupdate', ['uses'=>'StudentController@querybuilderupdate']);
Route::get('querybuilderdelete', ['uses'=>'StudentController@querybuilderdelete']);
Route::get('querybuilderselect', ['uses'=>'StudentController@querybuilderselect']);
Route::get('querybuilderjuhe', ['uses'=>'StudentController@querybuilderjuhe']);

    Route::get('ormselect', ['uses'=>'StudentController@ormselect']);  //查询
    Route::get('orminsert', ['uses'=>'StudentController@orminsert']);  //新增
    Route::get('ormupdate', ['uses'=>'StudentController@ormupdate']);  //更新


