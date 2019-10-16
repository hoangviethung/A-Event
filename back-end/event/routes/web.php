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




// pages website
// Route::get('/', function () {
//     return view('pages.body');
// });
// Route::get('login', function () {
//     return view('pages.login');
// });
// Route::get('register', function () {
//     return view('pages.register');
// });



Route::group(['prefix'=>'pages'], function(){
    Route::get('index', 'PagesController@getIndex');
    Route::get('sreach', 'PagesController@getSreach');


    Route::get('login', 'PagesController@getLogin');
    Route::post('login', 'PagesController@postLogin');
    
    Route::get('register', 'PagesController@getRegister');

    Route::get('dangxuat', 'PagesController@getDangxuat');
});
// pages website