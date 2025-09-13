<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Publisher\DashboardController;
use App\Http\Controllers\Publisher\ProfileController;
use App\Http\Controllers\Publisher\AccountSettingsController;
use App\Http\Controllers\Publisher\ConversionController;
use App\Http\Controllers\Publisher\DocumentationController;
use App\Http\Controllers\Publisher\OfferGalleryController;
use App\Http\Controllers\Publisher\PaymentsController;
use App\Http\Controllers\Publisher\PlacementsController;
use App\Http\Controllers\Publisher\ReportsController;
use App\Http\Controllers\Publisher\ReverseController;
use App\Http\Controllers\Publisher\PaymentProfileController;


Route::group(['middleware' => 'auth', 'prefix' => 'publisher'], function () {


    Route::get('dashboard', [DashboardController::class, 'Dashboard'])->name('publisher.dashboard');
    Route::get('profile', [ProfileController::class, 'Profile'])->name('publisher.profile');
    Route::get('profile-edit', [ProfileController::class, 'ProfileEdit'])->name('publisher.profile.edit');
    Route::post('profile-update', [ProfileController::class, 'ProfileUpdate'])->name('publisher.profile.update');
    Route::get('account-settings', [AccountSettingsController::class, 'AccountSettings'])->name('publisher.account-settings');
    Route::get('conversion', [ConversionController::class, 'Conversion'])->name('publisher.conversion');
    Route::get('documentation', [DocumentationController::class, 'Documentation'])->name('publisher.documentation');
    Route::get('offer-gallery', [OfferGalleryController::class, 'OfferGallery'])->name('publisher.offer-gallery');
    Route::get('payments', [PaymentsController::class, 'Payments'])->name('publisher.payments');
    Route::get('placements', [PlacementsController::class, 'Placements'])->name('publisher.placements');
    Route::get('placement/create', [PlacementsController::class, 'CreatePlacement'])->name('publisher.create-placement');
    Route::post('placement/store', [PlacementsController::class, 'StorePlacement'])->name('publisher.store-placement');
    Route::get('placement/edit/{appId}', [PlacementsController::class, 'EditPlacement'])->name('publisher.edit-placement');
    Route::post('placement/update', [PlacementsController::class, 'UpdatePlacement'])->name('publisher.update-placement');
    Route::get('placement/test-postback/{appId}', [PlacementsController::class, 'TestPostback'])->name('publisher.test-postback');
    Route::post('placement/send-test-postback', [PlacementsController::class, 'SendTestPostback'])->name('publisher.send-test-postback');
    Route::get('placement/{appId}', [PlacementsController::class, 'Placement'])->name('publisher.placement');
    Route::get('placement/delete/{appId}', [PlacementsController::class, 'delete'])->name('publisher.delete');
    Route::get('reports', [ReportsController::class, 'Reports'])->name('publisher.reports');
    Route::get('reverse', [ReverseController::class, 'Reverse'])->name('publisher.reverse');
    Route::post('payment/{pubId}', [PaymentProfileController::class, 'UpdatePaymentMethod'])->name('publisher.payment-update');


});
