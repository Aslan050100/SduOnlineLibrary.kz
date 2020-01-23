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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get','post'],'/',['uses'=>'BookController@index','as'=>'book.index']);

Route::match(['get','post'],'/download/{id}',['uses'=>'FileDownloadController@download','as'=>'book.download']);
Route::match(['post'],'/addBook',['uses'=>'AddBook2Controller@addBook','as'=>'book.addBook']);
Route::match(['get','post'],'/searchBook',['uses'=>'SearchController@search','as'=>'book.search']);