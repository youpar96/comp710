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

/************************************
 *              FRONT               *
 ************************************/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    //return view('welcome');
    return view('main');
});

//Auth functionality
Auth::routes();

//Join Boss Cuts - get a job Routes
Route::resource('/jobs','JobsController');
Route::resource('/jobsAD','JobsADController')->middleware('is_admin');
Route::get('/jobsAD/filter/{filter}','JobsADController@filter')->middleware('is_admin');
Route::post('downloadCV/{filename}', 'JobsADController@downloadCV')->middleware('is_admin');
Route::post('statusChange/{id}', 'JobsADController@statusChange')->middleware('is_admin');

//Styles /Cut Types Routes
Route::resource('/styles','StylesController');
Route::resource('/stylesAD','StylesADController')->middleware('is_admin');

// Kenneth
Route::get('/gallery', 'ImageController@index');


/************************************
 *              ADMIN               *
 ************************************/
Route::get('/admin/home', function () {
    return view('/admin/home');
    //if(Auth::guest()) return redirect('login');
});

Route::get('/admin/gallery', 'ImageController@indexForAdmin')->name('admin.gallery')->middleware('is_admin');
Route::post('/admin/gallery/upload', 'ImageController@uploadImages')->middleware('is_admin');

