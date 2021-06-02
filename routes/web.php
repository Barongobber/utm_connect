<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use Illuminate\Auth\Events\Logout;
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

Auth::routes();

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/check_user', [LoginController::class, 'check_user'])->name('check_user');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //client
    Route::get('/user', function () {
        return view('client.index');
    });
    Route::get('/user-home', [MemberController::class, 'index'])->name('user-home');

    Route::get('/user-news', function(){
        return view('client.news');
    });
    Route::get('/user-view-news', function(){
        return view('client.view-news');
    });

    Route::get('/user-events', [EventController::class, 'allEvent'])->name('user-events');
    Route::get('/user-view-event/{id}', [EventController::class, 'anEvent'])->name('user-view-event');

    Route::get('/user-academic', function(){
        return view('client.academic');
    });
    Route::get('/user-elibrary', function(){
        return view('client.elibrary');
    });
    Route::get('/user-about', function(){
        return view('client.about');
    });
    Route::get('/user-aspiration', function(){
        return view('client.aspiration');
    });

    Route::get('/user-profile', function(){
        return view('client.profile');
    })->name('user-profile');
    Route::get('/user-editprofile', function(){
        return view('client.editprofile');
    });
    Route::post('/updateProfile', [MemberController::class, 'updateProfile'])->name('updateProfile');

    Route::get('/user-signup', function(){
        return view('client.signup');
    });

    //This exclusive for ADMIN
    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index'])->name('home');
    });

    //This exclusive for MANAGEMENT
    Route::middleware(['management'])->group(function () {
        Route::get('management', [ManagementController::class, 'index'])->name('home');

        Route::get('/profile', [ManagementController::class, 'profilePage'])->name('profile');

        //Academic Library
        Route::get('/academic', function () {
            return view('academic');
        });

        //upload library
        Route::post('/uploadLib', [App\Http\Controllers\AcademicLibController::class, 'upload'])->name('upload');

        //forms
        Route::get('/register', function () {
            return view('register');
        })->name('register');

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
    });

    //This exclusive for MEMBER
    Route::middleware(['member'])->group(function () {
        Route::get('member', [MemberController::class, 'index'])->name('home');
    });

    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

});

