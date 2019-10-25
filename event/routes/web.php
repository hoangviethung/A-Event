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

Route::group(['prefix'=>'pages'], function(){
    Route::get('index', 'PagesController@getIndex');

    Route::get('sreach', 'PagesController@getSreach');

    Route::get('addevent', 'PagesController@getAddevent');

    Route::get('login', 'PagesController@getLogin');
    Route::post('login', 'PagesController@postLogin');

    Route::get('register', 'PagesController@getRegister');
    Route::post('/register', 'PagesController@postRegister');

    Route::get('dangxuat', 'PagesController@getDangxuat');
});
// pages website

// admin
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
    // end danhmuc
    // event
    Route::group(['prefix' => 'events'], function () {
        // hướng đi admin/slider/danhsach
        Route::get('events','EventsController@getDanhsach');

        Route::get('sua', 'EventsController@getSua');
        Route::post('sua', 'EventsController@postSua');

        Route::get('them', 'EventsController@getThem');
        Route::post('them', 'EventsController@postThem');

        Route::get('xoa', 'EventsController@getXoa');
    });
    // end event
});
// admin
