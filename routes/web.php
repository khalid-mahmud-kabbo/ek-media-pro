<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BlogCommentController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\AuthController;


Route::group(['middleware' => ['is_user']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('front');







    Route::group(['prefix' => 'user/'], function () {
        //User Sign-in and Sign-up
        Route::get('sign-in', [AuthController::class, 'userSignIn'])->name('login');
        Route::post('sign-in', [AuthController::class, 'userSignInPost'])->name('user.sign.in.post');
        Route::post('login-modal', [AuthController::class, 'loginModal'])->name('user.sign.modal');
        Route::get('sign-up', [AuthController::class, 'userSignUp'])->name('user.sign.up');
        Route::post('sign-up', [AuthController::class, 'userSignUpPost'])->name('user.sign.up.post');
        Route::get('auth/google', [AuthController::class, 'redirectToGoogle'])->name('user.redirect_google');
        Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('user.handle_google_callback');
        Route::get('auth/facebook', [AuthController::class, 'redirectToFacebook'])->name('user.redirect_facebook');
        Route::get('auth/facebook/callback', [AuthController::class, 'handleFacebookCallback'])->name('user.handle_facebook_callback');
        Route::get('logout', [AuthController::class, 'userLogout'])->name('user.logout');
        Route::post('change-password', [AuthController::class, 'userChangePassword'])->name('user.profile.change.password')->middleware(['isDemo']);
        //forget password
        Route::get('forget-password', [AuthController::class, 'userForgetPasswordGet'])->name('forget.password.get');
        Route::post('forget-password', [AuthController::class, 'userForgetPasswordPost'])->name('forget.password.post')->middleware(['isDemo']);
        Route::get('reset-password/{token}', [AuthController::class, 'userShowResetPasswordForm'])->name('reset.password.get');
        Route::post('reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post')->middleware(['isDemo']);

        //User Profile

        Route::group(['middleware' => 'auth'], function () {
            Route::get('profile', [UserProfileController::class, 'userProfile'])->name('user.profile');
            Route::get('profile-edit', [UserProfileController::class, 'userProfileEdit'])->name('user.profile.edit');
            Route::post('profile-update', [UserProfileController::class, 'userProfileUpdate'])->name('user.profile.update')->middleware(['isDemo']);

    });
    });




    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('blog');
        Route::get('/blog-details/{id}', [BlogController::class, 'blogDetails'])->name('blog.details');
        Route::post('/blog-comment', [BlogCommentController::class, 'blogComment'])->name('user.blog.comment')->middleware(['isDemo']);
    });


});
