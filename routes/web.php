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
/*
Route::get('/', function () {
    return view('newhome');
});
*/
Route::get('/home', function () {
    return view('home.home');
});
//網站首頁
Route::get('/',  ['as' => 'home.index',    'uses' => 'HomeController@index']);

//診所列表(按鈕)
Route::get('clinic',  ['as' => 'clinic.index',    'uses' => 'ClinicController@index']);
//某診所資訊
Route::get('clinics/{clinic}/show',  ['as' => 'clinic.show',    'uses' => 'ClinicController@show']);
//某醫生資訊
Route::get('doctor/{doctor}/show',  ['as' => 'doctor.show',    'uses' => 'DoctorController@show']);
//加入我的醫生
Route::get('doctor/{doctor}/favorite',  ['as' => 'member.favoritedoctor',    'uses' => 'MemberController@favoritedoctor']);
//取消我的醫生
Route::get('doctor/{doctor}/delete',  ['as' => 'member.favoritedoctor.delete',    'uses' => 'MemberController@favoritedoctordelete']);

//根據診所預約
Route::get('reservation/{clinic}',  ['as' => 'reservation.index',    'uses' => 'ReservationController@index']);
//根據醫生預約
Route::get('reservation_doctor/{doctor}',  ['as' => 'reservation.index_doctor',    'uses' => 'ReservationController@index_doctor']);
//儲存預約
Route::get('section/{section}/store', ['as' => 'section.reservations.store',     'uses' => 'SectionReservationController@store']);
//確認預約
Route::get('section/{section}/reserveation/generate', ['as' => 'section.reservation.generate',     'uses' => 'SectionReservationController@generate']);


//簡易搜尋結果
Route::get('/search', ['as' => 'clinic.search'  , 'uses' => 'ClinicController@search']);
//進階搜尋選單
Route::get('clinic/advance_search/create', ['as' => 'clinic.advance_search.create'  , 'uses' => 'ClinicController@advance_search_create']);
//進階搜尋結果
Route::get('clinic/advance_search', ['as' => 'clinic.advance_search'  , 'uses' => 'ClinicController@advance_search']);
//診所類別
Route::get('clinic/category/{category}', ['as' => 'clinic.category.index'  , 'uses' => 'CategoryClinicController@index']);


//會員資料(就醫紀錄)
Route::get('member', ['as' => 'member.information'  , 'uses' => 'MemberController@information']);


//我的診所/醫生
Route::get('favorite_clinic',  ['as' => 'favorite_clinic',    'uses' => 'FavoriteClinicController@index']);
//加入我的診所
Route::get('clinic/{clinic}/create',    ['as' => 'favorite_clinic.create' , 'uses' => 'FavoriteClinicController@create']);
//取消我的診所
Route::get('clinic/{clinic}/delete',    ['as' => 'favorite_clinic.delete' , 'uses' => 'FavoriteClinicController@delete']);


//查看我的預約列表
Route::get('myreservationlist', ['as' => 'reservation.myreservationlist'  , 'uses' => 'ReservationController@myreservationlist']);
//查看我的預約
Route::get('myreservation/{register}', ['as' => 'reservation.myreservation'  , 'uses' => 'ReservationController@myreservation']);
//修改預約提醒
Route::get('myreservation/{register}/revisereminding', ['as' => 'reservation.revisereminding'  , 'uses' => 'ReservationController@revisereminding']);
//儲存預約提醒
Route::get('myreservation/{register}/storereminding', ['as' => 'reservation.storereminding'  , 'uses' => 'ReservationController@storereminding']);

//Route::get('myreservations/{id}/torereminding', ['as' => 'reservation.storereminding'  , 'uses' => 'ReservationController@storereminding']);

//刪除預約
Route::get('myreservation/{register}/delete', ['as' => 'reservation.delete'  , 'uses' => 'ReservationController@delete']);

//firebase測試
Route::get('/fire',  ['as' => 'fire.fire',    'uses' => 'ReservationController@fire']);
Route::get('/fire2',  ['as' => 'fire.fire2',    'uses' => 'ReservationController@fire2']);
Route::get('/fire3',  ['as' => 'fire.fire3',    'uses' => 'ReservationController@fire3']);
