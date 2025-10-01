<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\IframeController;
use App\Http\Controllers\Frontend\BlogCommentController;


Route::group(['middleware' => ['is_user']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('front');


 Route::group(['prefix' => 'auth/'], function () {
        Route::get('sign-in', [AuthController::class, 'SignIn'])->name('login');
        Route::post('sign-in', [AuthController::class, 'SignInPost'])->name('sign.in.post');
        Route::get('sign-up', [AuthController::class, 'SignUp'])->name('sign.up');
        Route::post('sign-up', [AuthController::class, 'SignUpPost'])->name('sign.up.post');
        Route::get('logout', [AuthController::class, 'Logout'])->name('logout');
        Route::post('change-password', [AuthController::class, 'ChangePassword'])->name('change.password');
        Route::get('forget-password', [AuthController::class, 'ForgetPasswordGet'])->name('forget.password.get');
        Route::post('forget-password', [AuthController::class, 'ForgetPasswordPost'])->name('forget.password.post');
        Route::get('reset-password/{token}', [AuthController::class, 'ShowResetPasswordForm'])->name('reset.password.get');
        Route::post('reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');
    });


    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('blog');
        Route::get('/blog-details/{id}', [BlogController::class, 'blogDetails'])->name('blog.details');
        Route::post('/blog-comment', [BlogCommentController::class, 'blogComment'])->name('user.blog.comment')->middleware(['isDemo']);
    });


});

Route::get('/live-offers', [IframeController::class, 'index'])->name('iframe');
Route::get('/live-offers/filter', [IframeController::class, 'filter']);
