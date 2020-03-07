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
    return view('landing');
});

Auth::routes();

Route::get('/certification','CertificationController@index');
Route::get('/certification/{url}','CertificationController@show');

Route::get('/connection', function () {
    return view('connection');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/update-profile', function () {
    return view('update-profile');
});
Route::get('/article', function () {
    return view('article');
});
Route::get('/article-pick', function () {
    return view('article-pick');
});
