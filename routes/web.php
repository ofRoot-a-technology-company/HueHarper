<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnlineBookingController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PressureWashingController;
use App\Http\Controllers\LawnCareController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('mainPages.about');
});

Route::get('/pricing', function() {
    return view('mainPages.pricing');
});

Route::get('/services', function() {
    return view('mainPages.services');
});

Route::get('/process', function() {
    return view('mainPages.process');
});

Route::get('/how-it-works', function() {
    return view('mainPages.how-it-works');
});

// Choose Service type
Route::get('/online-booking/service-selection', function(){
    return view('onlineBooking.serviceSelection.choose-service');
});

// Service type 1: Removal-services.
Route::post('/online-booking/removal-services', [OnlineBookingController::class, 'removalService']);

// Service type 2: lawn-services
Route::post('/online-booking/lawn-services', [OnlineBookingController::class, 'lawnService']);

// Begin OnlineBooking Process
Route::get('online-booking/step-one', function() {
    return view('onlineBooking.step-one');
});

Route::post('online-booking/step-two', [OnlineBookingController::class, 'checkZipCode']);
Route::post('online-booking/step-three', [OnlineBookingController::class, 'storeDateData'])->name('step-three');
Route::get('online-booking/edit-information', function(){ return view('onlineBooking.step-three'); });
Route::post('online-booking/step-four', [OnlineBookingController::class, 'submitCustomerData']);
Route::post('online-booking/submit-details', [OnlineBookingController::class, 'sendEmail']);


