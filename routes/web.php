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
    return view('welcome');
});


Route::get('/admin/notice', function () {
    return view('dashboard part-admin.send_notice');
});

Route::post('/notice/send','NotificationController@store');

Route::get('/admin_test', function () {
    return view('dashboard part-admin.project_students');
});
Route::get('/allNotices', 'NotificationController@allNotices')->name('allNotices');

Route::get('/newRemarks', 'RemarksController@newRemarks')->name('newRemarks');
Route::post('/remarks/save','RemarksController@store');
Route::get('/remarks','RemarksController@allRemarks');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'StudentsController@index')->name('dashboard');
Route::get('/yourProfile', 'HomeController@yourProfile')->name('yourProfile');
Route::post('/completeProfile', 'StudentsController@completeProfile');

