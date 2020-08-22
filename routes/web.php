<?php

use Illuminate\Support\Facades\Route;

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


//dashboard
Route::get('/admin/dashboard',"Auth\ProductController@index")->name("admin.dashboard");
Route::get('/admin/dashboard/user',"User\LoginController@index");
Route::delete('/admin/{id}/user', "User\LoginController@destroy");
// comment
Route::get('/admin/dashboard/comments',"User\CommentController@dashboard");
Route::delete('/admin/{id}/comments', "User\CommentController@destroy");
// order
Route::get('/admin/dashboard/orders',"User\OrderController@index");
Route::delete('/admin/{id}/orders', "User\OrderController@destroy");

// sortBy
Route::get('/sortBy/image',"Auth\ProductController@sortBy");
Route::get('/sortByDesc/image',"Auth\ProductController@sortByDesc");

Route::get('/sortBy/video',"Auth\VideoController@sortBy");
Route::get('/sortByDesc/video',"Auth\VideoController@sortByDesc");

//products
Route::get('/insert/image',"Auth\ProductController@index")->name("insert.image");

// insert
Route::post('/products/insert/image',"Auth\ProductController@store" );

//EDIT
Route::get('/index/{id}/edit/image', "Auth\ProductController@edit");

Route::patch('/index/{id}/image',"Auth\ProductController@update");

//DELETE products
Route::delete('/products/{id}/image', "Auth\ProductController@destroy");

// VIDEO----------------------------------------------------------------------------
Route::get('/insert/Video',"Auth\VideoController@index")->name("insert.video");

// insert
Route::post('/products/insert/video',"Auth\VideoController@store" );

//EDIT
Route::get('/index/{id}/edit/Video', "Auth\VideoController@edit");

Route::patch('/index/{id}/Video',"Auth\VideoController@update");

//DELETE video
Route::delete('/products/{id}/Video', "Auth\VideoController@destroy");

// CATEGORY----------------------------------------------------------------------------------------
Route::get('/insert/Categories',"Auth\CategoryController@index")->name("insert.Categories");

// insert
Route::post('/products/insert/Categories',"Auth\CategoryController@store" );

//EDIT
Route::get('/index/{id}/edit/Categories', "Auth\CategoryController@edit");

Route::patch('/index/{id}/Categories',"Auth\CategoryController@update");

//DELETE Categories
Route::delete('/products/{id}/Categories', "Auth\CategoryController@destroy");