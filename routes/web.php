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
Route::get('/register/details', function (){
    return view('auth/registerDetail');
})->middleware('auth');
Route::post('/register/details', 'RegisterDetailController@userDetails');

//certification route
Route::get('/certification','CertificationController@index');
Route::get('/certification/{url}','CertificationController@show');
Route::post('/certification/{url}','CertificationController@userGotCertif');

Route::get('/connection', 'ConnectionController@showPeople');

Route::get('/article', 'ArticleController@index');
Route::get('/article/{url}', 'ArticleController@showArticle');

//profile route
Route::get('/profile/{username}', 'ProfileController@showProfileData');
Route::get('/profile/edit', function () {
    return view('update-profile');
});

//admin route sementara
//certification input
Route::get('/9798',function(){
    return view('certif-input');
});
Route::post('/9798', 'CertifInputController@input');

//article input
Route::get('/9796' ,function(){
    return view('article-input');
});
Route::post('/9796', 'ArticleInputController@input');