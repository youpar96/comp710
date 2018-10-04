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
    $images=DB::table('images')->where('img_carousel', 1)->orderByRaw('created_at DESC')->get();
    return view('main', compact('images'));
});

//Auth functionality
Auth::routes();

//Join Boss Cuts - get a job Routes
Route::resource('/jobs','JobsController');          //the public part
Route::resource('/jobsAD','JobsADController')->middleware('is_admin');
Route::get('/jobsAD/filter/{filter}','JobsADController@filter')->middleware('is_admin');
Route::post('downloadCV/{filename}', 'JobsADController@downloadCV')->middleware('is_admin');
Route::post('statusChange/{id}', 'JobsADController@statusChange')->middleware('is_admin');

//Styles /Cut Types Routes
Route::resource('/styles','StylesController');          //the public part
Route::resource('/stylesAD','StylesADController')->middleware('is_admin');

// Kenneth
Route::get('/gallery', 'ImageController@index');


/************************************
 *              ADMIN               *
 ************************************/
 
/* the old one that was crashing ...
Route::get('/admin/home', function () {
    return view('/admin/home');
});
*/

Route::get('/admin/home', 'AdminController@admin')  //this is the flash new one
    ->middleware('is_admin')
    ->name('admin');

Route::get('/admin/gallery', 'ImageController@indexForAdmin')->name('admin.gallery')->middleware('is_admin');
Route::post('/admin/gallery/upload', 'ImageController@uploadImages')->middleware('is_admin');
Route::get('/admin/gallery/update/{id}', 'ImageController@updateImage')->middleware('is_admin');
Route::get('/admin/gallery/delete/{id}', 'ImageController@deleteImage')->middleware('is_admin');

Route::get('/admin/staff', 'StaffController@indexForAdmin')->name('admin.staff')->middleware('is_admin');
Route::post('/admin/staff/insert', 'StaffController@insertStaff')->middleware('is_admin');
Route::post('/admin/staff/update/{id}', 'StaffController@updateStaff')->middleware('is_admin');
Route::post('/admin/staff/delete/{id}', 'StaffController@deleteStaff')->middleware('is_admin');

// Barber
Route::get('/admin/barber', 'BarberController@index')->middleware('is_admin');
Route::get('/admin/barber/detailStyles/{id}', 'BarberController@detailStyles')->middleware('is_admin');
Route::post('/admin/barber/joinStyle', 'BarberController@joinBarberStyle')->middleware('is_admin');
Route::post('/admin/barber/removeStyle', 'BarberController@removeStyle')->middleware('is_admin');
Route::get('/admin/barber/new', 'BarberController@new')->middleware('is_admin');
Route::post('/admin/barber/save', 'BarberController@saveAdd')->middleware('is_admin');
Route::get('/admin/barber/edit/{id}', 'BarberController@edit')->middleware('is_admin');
Route::post('/admin/barber/update', 'BarberController@update')->middleware('is_admin');
Route::get('/admin/barber/delete/{id}', 'BarberController@delete')->middleware('is_admin');
Route::post('/admin/barber/confirmDelete', 'BarberController@confirmDelete')->middleware('is_admin');

// Appointment
// Route::get('/appointments', 'AppointmentController@appointments');
// Route::post('/appointment/client', 'AppointmentController@clientAppointment');

// Route::get('/clientAppointment', 'AppointmentController@clientAppointment');

// Rota para escolher Guest ou se logar
// /appointment
Route::get('/appointment', 'AppointmentController@appointment');

// Guest
// /appointment/guest
Route::get('/appointment/guest', 'AppointmentController@appointmentGuest');

// Client
// /appointment/client
Route::get('/appointment/client/{id}', 'AppointmentController@appointmentClient');

// Book - appointment Post
// /appointment/book
Route::post('/appointment/book', 'AppointmentController@appointmentBook');

// Chamada para buscar barbers
//Route::get('findBarberByStyle', 'AppointmentController@findBarberByStyle');
Route::post('findBarberByStyle', 'AppointmentController@findBarberByStyle');
Route::post('/checkAvailabilityByClient', 'AppointmentController@checkAvailabilityByClient');