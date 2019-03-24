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

Route::get('clinic',  ['as' => 'clinic.index',    'uses' => 'ClinicController@index']);
Route::get('clinics/{id}',  ['as' => 'clinic.information',    'uses' => 'ClinicController@information']);
Route::get('reservation/{id}',  ['as' => 'reservation.index',    'uses' => 'ReservationController@index']);
Route::get('section/{id}',  ['as' => 'section.index',    'uses' => 'SectionController@index']);
//搜尋
Route::get('/search', ['as' => 'clinic.search'  , 'uses' => 'ClinicController@search']);

Route::get('clinic/advance_search/create', ['as' => 'clinic.advance_search.create'  , 'uses' => 'ClinicsController@advance_search_create']);
Route::get('clinic/advance_search', ['as' => 'clinic.advance_search'  , 'uses' => 'ClinicsController@advance_search']);



//會員資料
Route::get('member', ['as' => 'member.information'  , 'uses' => 'MemberController@information']);