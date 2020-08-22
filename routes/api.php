<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// User
Route::post('/auth/register',"User\RegisterController@register");
Route::post('/auth/login',"User\LoginController@login");

Route::get('/profile',"User\LoginController@getProfile");

// Product
Route::get('/home/image',"User\HomeController@index");
Route::get('/home/video',"User\HomeController@indexvideo");

Route::get('/type/{id}',"User\HomeController@getId");
Route::get('/home/categories',"User\HomeController@category");

Route::get('/image/{id}/detail',"User\HomeController@getIdImage");
Route::get('/video/{id}/detail',"User\HomeController@getIdVideo");

Route::get('/home/color',"User\ColorController@index");
Route::get('/home/size',"User\SizeController@index");

// Comment
Route::post('/image/comments',"User\CommentController@comment");
Route::get('/image/{id}/comments',"User\CommentController@index");

Route::get('/video/{id}/comments',"User\CommentController@indexvideo");
Route::post('/video/comments',"User\CommentController@comment_videos");

// Category
Route::get('/home/{id}',"User\HomeController@getCategory");

// order
Route::post('/image/book',"User\OrderController@orders");
Route::get('/order',"User\OrderController@dashboard");
Route::get('/order/{id}',"User\OrderController@product");

//loves
Route::post('/image/loves',"User\LoveController@loves");
Route::get('/image/{id}/loves',"User\LoveController@dashboard");

Route::post('/video/loves',"User\LoveController@videos");
Route::get('/video/{id}/loves',"User\LoveController@index");

// search
Route::post('/image/search',"User\HomeController@search");
