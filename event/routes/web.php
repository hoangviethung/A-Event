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
use Symfony\Component\Routing\Annotation\Route;
*/




// pages website
Route::group(['prefix'=>'pages'], function(){
    Route::get('index', 'PagesController@getIndex');

    Route::get('sreach', 'PagesController@getSreach');

    Route::get('addevent', 'PagesController@getAddevent');

    Route::get('login', 'PagesController@getLogin');
    Route::post('login', 'PagesController@postLogin');

    Route::get('register', 'PagesController@getRegister');
    Route::post('/register', 'PagesController@postRegister');

    Route::get('dangxuat', 'PagesController@getDangxuat');

    Route::get('login/facebook', 'Auth\SocialController@redirectToProvider');
    Route::get('login/facebook/callback', 'Auth\SocialController@handleProviderCallback');


});

// pages website

// admin

Route::get('admin/login', 'PagesController@getLoginAdmin');
Route::post('admin/login', 'PagesController@postLoginAdmin');
Route::get('admin/logout', 'PagesController@getLogoutAdmin');


Route::group(['prefix'=>'admin'], function(){
    // slider
    Route::group(['prefix' => 'slider'], function () {
        // hướng đi admin/slider/danhsach
        Route::get('slider','SliderController@getDanhsach');

        Route::get('sua', 'SliderController@getSua');
        Route::post('sua', 'SliderController@postSua');

        Route::get('them', 'SliderController@getThem');
        Route::post('them', 'SliderController@postThem');

        Route::get('xoa', 'SliderController@getXoa');
    });
    // slider
    // danhmuc
    Route::group(['prefix' => 'danhmuc'], function () {
        // hướng đi admin/slider/danhsach
        Route::get('danhsach','DanhmucController@getDanhsach');

        Route::get('sua/{id}', 'DanhmucController@getSua');
        Route::post('sua/{id}', 'DanhmucController@postSua');


        Route::get('them', 'DanhmucController@getThem');
        Route::post('them', 'DanhmucController@postThem');
        // Hàm post nhận dữ liệu về và lưu vào cơ sở dữ liệu
        Route::get('xoa', 'DanhmucController@getXoa');
    }); 
    // danhmuc

    // Sự kiện
    Route::group(['prefix' => 'event'], function () {
        // hướng đi admin/slider/danhsach
        Route::get('danhsach','EventController@getDanhsach');

        Route::get('sua/{id}', 'EventController@getSua');
        Route::post('sua/{id}', 'EventController@postSua');


        Route::get('them', 'EventController@getThem');
        Route::post('them', 'EventController@postThem');
        // Hàm post nhận dữ liệu về và lưu vào cơ sở dữ liệu
        Route::get('xoa/{id}', 'EventController@getXoa');

    });

    // Accounts
    Route::group(['prefix' => 'user'], function () {
        Route::get('danhsach','PagesController@getDanhsach');

        Route::get('sua/{id}', 'PagesController@getSua');
        Route::post('sua/{id}', 'PagesController@postSua');

        Route::get('them', 'PagesController@getThem');
        Route::post('them', 'PagesController@postThem');

        Route::get('xoa/{id}', 'PagesController@getXoa');
    });
    // Accounts
});

// admin
