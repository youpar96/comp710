<?php

use App\Post;


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
    return redirect('posts/welcome');
});

// Lab 2

Route::get('posts/welcome', function () {
    $name='Kenneth';
	return view('posts/welcome', compact('name'));
});

Route::get('posts/viewallposts', function () { 
    //$posts = Post::all();
    $posts=DB::table('posts')->get();
    return view('posts/viewallposts', compact('posts'));
});

// week 4 - Lecture
/*
Route::get('/welcome', 'HomeController@index');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
*/

// week 4 - Lab
Route::get('/posts', 'PostsController@index');
Route::get('/posts/welcome', 'PostsController@index');

Route::get('posts/viewallposts', function () {
	$posts=DB::table('posts')->get();
	return view('posts/viewallposts', compact('posts'));
});

//to add route to “create new post form”
Route::get('posts/create', 'PostsController@create');
//to add route to store method
Route::post('posts/store', 'PostsController@store')->name('posts.store');
//to add route to view displaying specific post
Route::get('posts/viewpost/{id}/', 'PostsController@viewpost');
// to add route to "update form"
Route::get('posts/update/{id}/', 'PostsController@updateForm');
//to add route to update a selected post
Route::post('posts/update', 'PostsController@update')->name('posts.update');

//to add route to logout method
Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();
