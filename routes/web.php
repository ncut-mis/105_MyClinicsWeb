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
Route::auth();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home.home');
});
//診所列表(按鈕)
Route::get('clinic',  ['as' => 'clinic.index',    'uses' => 'ClinicController@index']);
//某診所資訊
Route::get('clinics/{id}',  ['as' => 'clinic.information',    'uses' => 'ClinicController@information']);
//根據診所預約
Route::get('reservation/{id}',  ['as' => 'reservation.index',    'uses' => 'ReservationController@index']);
//根據醫生預約
Route::get('reservation2/{id}',  ['as' => 'reservation.index2',    'uses' => 'ReservationController@index2']);
//儲存預約
Route::get('section/{id}/store', ['as' => 'reservation.store',     'uses' => 'ReservationController@store']);


//簡易搜尋結果
Route::get('/search', ['as' => 'clinic.search'  , 'uses' => 'ClinicController@search']);
//進階搜尋選單
Route::get('clinic/advance_search/create', ['as' => 'clinic.advance_search.create'  , 'uses' => 'ClinicController@advance_search_create']);
//進階搜尋結果
Route::get('clinic/advance_search', ['as' => 'clinic.advance_search'  , 'uses' => 'ClinicController@advance_search']);



//會員資料
Route::get('member', ['as' => 'member.information'  , 'uses' => 'MemberController@information']);


//我的診所
Route::get('favorite_clinic',  ['as' => 'favorite_clinic',    'uses' => 'FavoriteClinicController@index']);
Route::get('clinic/{id}',    ['as' => 'favorite_clinic.create' , 'uses' => 'FavoriteClinicController@create']);


//查看我的預約
Route::get('myreservation', ['as' => 'reservation.myreservation'  , 'uses' => 'ReservationController@myreservation']);

