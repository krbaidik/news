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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category', 'newsController@category')->name('category');
Route::get('/news', 'newsController@news')->name('news');
Route::post('/insertcategory', 'newsController@insertcategory')->name('insertcategory');
Route::post('/insertnews', 'newsController@insertnews')->name('insertnews');
Route::get('/viewcategory', 'newsController@viewcategory')->name('viewcategory');
Route::get('/viewnews', 'newsController@viewnews')->name('viewnews');

Route::get('/editcategory/{id}', 'newsController@editcategory')->name('editcategory');
Route::get('/editnews/{id}', 'newsController@editnews')->name('editnews');

Route::post('/updatecategory/{id}', 'newsController@updatecategory')->name('updatecategory');
Route::post('/updatenews/{id}', 'newsController@updatenews')->name('updatenews');
Route::get('/deletecategory/{id}', 'newsController@deletecategory')->name('deletecategory');
Route::get('/deletenews/{id}', 'newsController@deletenews')->name('deletenews');


Route::get('/trash', 'newsController@trash')->name('trash');
Route::get('/restore/{id}', 'newsController@restore')->name('restore');
Route::get('/p_delete/{id}', 'newsController@p_delete')->name('p_delete');
