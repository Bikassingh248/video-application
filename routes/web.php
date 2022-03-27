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




// For CRUD operation on video information with Videos table
Route::get('addvideoinformation','videocontroller@index');
Route::post('savevideo','videocontroller@savevideo')->name('video.save');
Route::get('displayvideoinformation','videocontroller@disp')->name('video.disp');
Route::get('editvideo/{id}','videocontroller@edit')->name('video.edit');
Route::post('updatevideo/{id}','videocontroller@update')->name('video.update');
Route::get('deletevideo/{id}','videocontroller@delete')->name('video.delete');


// For CRUD operation on videolink information with Videolinks table
Route::get('addvideolist','videolistcontroller@index');
Route::post('savevideolink','videolistcontroller@savevideolink')->name('videolink.save');
Route::get('displayvideolist','videolistcontroller@disp')->name('videolist.disp');
Route::get('editvideolist/{id}','videolistcontroller@edit')->name('videolist.edit');
Route::post('updatevideolist/{id}','videolistcontroller@update')->name('videolist.update');
Route::get('deletevideolist/{id}','videolistcontroller@delete')->name('videolist.delete');


// For fetching data form both videos and videolinks table using one-to-many relationship
Route::get('show','videocontroller@show')->name('videolink.show');
