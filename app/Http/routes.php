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
//    return view('welcome');
    return "hello world";
});
//Route::get('pages',"PagesController@index");
//Route::get('pages',['middleware'=>'auth','use'=>'PageController@index']);
Route::get('pages',['middleware'=>'auth',function(){
    return "some test";
}]);
Route::get('contact',"PagesController@contact");
//Route::get('articles',"ArticleController@index");
//Route::get('articles/create',"ArticleController@create");
//Route::get('articles/{id}',"ArticleController@show");
//Route::post('articles/',"ArticleController@store");
//Route::get('articles/{id}/edit',"ArticleController@edit");
Route::resource('articles','ArticleController');

//Route::controller([
//    'auth'=>'Auth\AuthController',
//    'password'=>'Auth\PasswordController'
//]);
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('foo',['middleware'=>'manager',function(){
    return "this page may only viewed by manager";;
}]);
