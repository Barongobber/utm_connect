<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('main_dashboard');
});
Route::get('/profile', function () {
    return view('profile');
});

//forms
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

//Posts
Route::get('/addNews', function () {
    return view('layouts.post.add_news');
});
Route::get('/addPost', function () {
    return view('layouts.post.add_post');
});
Route::get('/contentList', function () {
    return view('layouts.post.content_list');
});
Route::get('/table', function () {
    return view('layouts.post.table');
});


//blasting
Route::get('/chooseRecipients', function () {
    return view('layouts.blasting.choose_recipients');
});
Route::get('/listBlasting', function () {
    return view('layouts.blasting.list_blasting');
});
Route::get('/makeTemplate', function () {
    return view('layouts.blasting.make_template');
});
Route::get('/manageBlast', function () {
    return view('layouts.blasting.manage_blast');
});


//feedback
Route::get('/feedbackDetails', function () {
    return view('layouts.feedback.feedback_details');
});
Route::get('/feedback', function () {
    return view('layouts.feedback.feedback');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
