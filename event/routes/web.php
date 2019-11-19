<?php
use Carbon\Carbon;
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

    Route::get('search', 'PagesController@getSearch');
    Route::post('search', 'PagesController@postSearch');

    Route::get('addevent', 'AddeventController@getAddevent')->middleware('check_addevent');
    Route::post('addevent', 'AddeventController@postAddevent');

    Route::get('chitiet/{id}',[
        'as' =>'chitiet',
        'uses'=>'PagesController@getChitiet',
    ]);

    Route::get('bookingone/{id}',[
        'as' => 'bookingone',
        'uses' => 'PagesController@getBookingone',
    ]);

    Route::get('bookingone','BookingController@getBookingone');
    Route::post('bookingone','BookingController@postBookingone');

    Route::get('bookingtwo','BookingController@getBookingtwo');
    Route::post('bookingtwo','BookingController@postBookingtwo');

    Route::get('login', 'PagesController@getLogin');
    Route::post('login', 'PagesController@postLogin');

    Route::get('register', 'PagesController@getRegister');
    Route::post('/register', 'PagesController@postRegister');

    Route::get('dangxuat', 'PagesController@getDangxuat');

    Route::get('login/facebook', 'Auth\SocialController@redirectToProvider');
    Route::get('login/facebook/callback', 'Auth\SocialController@handleProviderCallback');


    Route::get('login/google', 'Auth\SocialController@redirectToProvider');
    Route::get('login/google/callback', 'Auth\SocialController@handleProviderCallback');

    Route::get('login/loginsuccess', 'Auth\SocialController@loginsuccess');

});
// pages website

// admin

Route::get('admin/login', 'PagesController@getLoginAdmin');
Route::post('admin/login', 'PagesController@postLoginAdmin');
Route::get('admin/logout', 'PagesController@getLogoutAdmin');


Route::group(['prefix'=>'admin','middleware'=>'checklogin'], function(){
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

        // Phê duyệt
        Route::get('pheduyet/{id}', 'EventController@getDuyet');
        Route::post('pheduyet/{id}', 'EventController@postDuyet');
    });
    // Addevent
    Route::group(['prefix' => 'new'], function () {

        Route::get('danhsach','NewController@getDanhsach');

        Route::get('sua', 'NewController@getSua');
        Route::post('sua', 'NewController@postSua');

        Route::get('them', 'NewController@getThem');
        Route::post('them', 'NewController@postThem');

        Route::get('xoa', 'NewController@getXoa');
    });
    // Addevent
    // Accounts
    Route::group(['prefix' => 'user'], function () {
        Route::get('danhsach','UserController@getDanhsach');

        Route::get('sua/{id}', 'UserController@getSua');
        Route::post('sua/{id}', 'UserController@postSua');

        Route::get('them', 'UserController@getThem');
        Route::post('them', 'UserController@postThem');

        Route::get('xoa/{id}', 'UserController@getXoa');
    });
    // Accounts
    // Seenmail
    Route::group(['prefix' => 'seenmail'], function () {

        Route::get('danhsach','SeenmailController@getDanhsach');

        Route::get('getmail','SeenmailController@getThongbao');
        Route::post('postmail', 'SeenmailController@postThongbao');
    });
    // Seenmail
    Route::get('dashboard', 'PagesController@getDashboard');
});

// admin
