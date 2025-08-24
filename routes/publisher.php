<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Publisher\PublisherProfileController;


Route::group(['middleware' => ['is_user']], function () {


  Route::group(['prefix' => 'publisher/'], function () {
        Route::group(['middleware' => 'auth'], function () {
            Route::get('profile', [PublisherProfileController::class, 'publisherProfile'])->name('publisher.profile');
            Route::get('profile-edit', [PublisherProfileController::class, 'publisherProfileEdit'])->name('publisher.profile.edit');
            Route::post('profile-update', [PublisherProfileController::class, 'publisherProfileUpdate'])->name('publisher.profile.update');

    });
    });


});
