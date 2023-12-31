<?php

use App\Http\Middleware;
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

// Route::get('/hello', "HelloController@index")->name("hello")->middleware("hello");
// Route::get('/hello/other', "HelloController@other")->middleware("hello");
// Route::get('/hello/{id}', "HelloController@index")->where("id", "[0-9]+");
// Route::middleware([HelloMiddleware::class])->group(function () {
//     Route::get('/hello', "HelloController@index")->name("hello");
//     Route::get('/hello/other', "HelloController@other");
// });

// Route::namespace("Sample")->group(function (){
//     Route::get('/sample', "SampleController@index");
//     Route::get('/sample/other', "SampleController@other");
// });

// Route::get('/hello/{person}', "HelloController@index");

// 1-29
// Route::get('/hello', "HelloController@index");
// Route::get('/hello/other', "HelloController@other");
// Route::get('/sample', "Sample\SampleController@index")->name("sample");

// 1-34
Route::get('/hello', "HelloController@index")->name("hello");
// Route::get('/hello/{msg}', "HelloController@other");

// 1-45
Route::post("hello/other", "HelloController@other");