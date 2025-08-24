<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Advertiser\ProfileController;


Route::group(['middleware' => 'auth', 'prefix' => 'advertiser'], function () {


    Route::get('profile', [ProfileController::class, 'Profile'])->name('advertiser.profile');
    Route::get('profile-edit', [ProfileController::class, 'ProfileEdit'])->name('advertiser.profile.edit');
    Route::post('profile-update', [ProfileController::class, 'ProfileUpdate'])->name('advertiser.profile.update');




});
