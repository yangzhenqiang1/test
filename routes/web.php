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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/redirect', function () {
//    return redirect()->route('home');
    print_r('1'.PHP_EOL);
    return "路由是：" . route('home');
});
//android推送
Route::get('/push', 'Push\IndexController@index')->name('push');
Route::group(['middleware'=>'request'],function (){
});

Route::get('/test', 'Test\IndexController@index')->name('test');
Route::get('/test1', 'Test\IndexController@index1')->name('test');
