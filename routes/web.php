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
use App\Http\Middleware\CheckAge;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/test', 'Test\IndexController@index',function (){

    var_dump(\Illuminate\Support\Facades\Route::currentRouteAction());
    return false;
})->name('test');
Route::get('/redirect', function () {
//    return redirect()->route('home');
    print_r('1'.PHP_EOL);
    print_r(\Illuminate\Support\Facades\Route::currentRouteName());
    var_dump(\Illuminate\Support\Facades\Route::currentRouteAction());

//    return "路由是：" . route('redirecta',['id'=>1]);
})->name('redirecta')->middleware('yang');
Route::group(['middleware'=>'zhen'],function (){

});
Route::get('now', function () {
    return date("Y-m-d H:i:s");
});
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
//    Route::get('article', 'ArticleController@index');
    Route::resource('articles', 'ArticleController');
});
Route::resource('photo', 'PhotoController');

Route::get('article/{id}','ArticleController@show');