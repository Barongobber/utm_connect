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

//client
Route::get('/user', function () {
    return view('client.index');
});
Route::get('/user/home', function () {
    return view('client.index');
});

Route::get('/user/news', function(){
    return view('client.news');
});
Route::get('/user/view-news', function(){
    return view('client.view-news');
});
Route::get('/user/events', function(){
    return view('client.events');
});
Route::get('/user/view-event', function(){
    return view('client.view-event');
});
Route::get('/user/academic', function(){
    return view('client.academic');
});
Route::get('/user/elibrary', function(){
    return view('client.elibrary');
});
Route::get('/user/about', function(){
    return view('client.about');
});
Route::get('/user/aspiration', function(){
    return view('client.aspiration');
});
Route::get('/user/profile', function(){
    return view('client.profile');
});
Route::get('/user/editprofile', function(){
    return view('client.editprofile');
});
Route::get('/user/signup', function(){
    return view('client.signup');
});

