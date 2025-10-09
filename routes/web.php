<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\IframeController;
use App\Http\Controllers\Frontend\BlogCommentController;
use App\Http\Controllers\Frontend\DocumentationController;


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
        Route::post('/toggle-2fa', [AuthController::class, 'toggle2FA'])->name('toggle.2fa');
        Route::post('/verify-disable-2fa', [AuthController::class, 'verifyDisable2FA'])->name('verify.disable.2fa');
        Route::get('/2fa-verify', [AuthController::class, 'show2FAVerify'])->name('login.2fa.verify');
        Route::post('/2fa-verify', [AuthController::class, 'verify2FA'])->name('login.2fa.verify.post');

    });


    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('blog');
        Route::get('/blog-details/{id}', [BlogController::class, 'blogDetails'])->name('blog.details');
        Route::post('/blog-comment', [BlogCommentController::class, 'blogComment'])->name('user.blog.comment')->middleware(['isDemo']);
    });


});

Route::get('/live-offers', [IframeController::class, 'index'])->name('iframe');
Route::get('/live-offers/filter', [IframeController::class, 'filter']);

 Route::group(['prefix' => 'documentation/'], function () {
Route::get('/all-offers-api', [DocumentationController::class, 'allOffersApi'])->name('documentation.all-offers-api');
Route::get('/filtered-offers-api', [DocumentationController::class, 'filteredOffersApi'])->name('documentation.filtered-offers-api');
Route::get('/postback-intrigation', [DocumentationController::class, 'postbackDetails'])->name('documentation.postback-integration');
Route::get('/iframe-intrigation', [DocumentationController::class, 'iframeDetails'])->name('documentation.iframe-integration');
Route::get('/top-conversion-offers-api', [DocumentationController::class, 'topConversionOffersApi'])->name('documentation.top-conversion-offers-api');
Route::get('/user-based-offers-api', [DocumentationController::class, 'userBasedOffers'])->name('documentation.user-based-offers-api');


});
