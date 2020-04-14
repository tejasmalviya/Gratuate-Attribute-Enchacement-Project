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

Auth::routes();

Route::get('/home', 'HomeController@index');

  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/viewupload', 'AdminController@viewUploads');
    Route::get('/approve/{aid}', 'AdminController@approve');
    Route::get('/approve/grade/{aid}', 'AdminController@grade');
    Route::get('/reject/{aid}', 'AdminController@reject');
    Route::post('/approve/grade/update/{id}', 'AdminController@update');
    
  });

Route::get('/studentprofile/{id}', 'AdminUserController@profile');
Route::get('/studentperformance/{id}', 'AdminUserController@performance');
Route::get('/studentupload/{id}','AdminUserController@upload');
Route::get('/studentupdates','AdminUserController@timeline');



Route::get('/fill_details', function () {
    return view('studentDetails');
});
// Route::get('/performance', function () {
//     return view('performance');
// });
Route::get('/notifications', function () {
    return view('notifications');
});
// Route::get('/upload', function () {
//     return view('uploads');
// });


// Route::get('test', function () {
//     return view('test');
// });

Route::get('/home/editprofile', function () {
    return view('usereditprofile');
});


Route::get('fill_initail_details','StudentController@insertform');
Route::post('fill_initail_details/create','StudentController@insert');


Route::get('addcertificate','ActitvityController@index');
Route::post('addcertificate/create','ActitvityController@insert')->name('addimage');
Route::get('upload','ActitvityController@upload');
Route::get('upload/viewcertificate/{aid}','ActitvityController@viewcertificate');
Route::get('performance','StudentController@performance');
Route::get('events','StudentController@recommend');
Route::get('updates','ActitvityController@timeline');
