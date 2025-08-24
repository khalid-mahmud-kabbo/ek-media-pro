<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Advertiser\AdvertiserProfileController;


Route::group(['middleware' => ['is_user']], function () {


  Route::group(['prefix' => 'advertiser/'], function () {
        Route::group(['middleware' => 'auth'], function () {
            Route::get('profile', [AdvertiserProfileController::class, 'advertiserProfile'])->name('advertiser.profile');
            Route::get('profile-edit', [AdvertiserProfileController::class, 'advertiserProfileEdit'])->name('advertiser.profile.edit');
            Route::post('profile-update', [AdvertiserProfileController::class, 'advertiserProfileUpdate'])->name('advertiser.profile.update');

    });
    });


});
