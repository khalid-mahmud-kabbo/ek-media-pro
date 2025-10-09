<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Publisher\OfferGalleryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/v2/get-offers/all', [OfferGalleryController::class, 'allOffersviaApi'])->name('all-offers-via-api');
Route::get('/v2/get-offers/filtered', [OfferGalleryController::class, 'filteredOffersviaApi'])->name('filtered-offers-via-api');
Route::get('/v2/get-surveys/filtered', [OfferGalleryController::class, 'userBasedOffersviaApi'])->name('user-based-offers-via-api');
Route::get('/v2/get-top-converting-offers', [OfferGalleryController::class, 'topConversionOffersviaApi'])->name('top-converting-offers-via-api');


