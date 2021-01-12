<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

/* Donation Campaign */
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/donation-detail/{id}', 'App\Http\Controllers\DonationDetailController@index')->name('donation-detail');

/* Fundraise */
Route::resource('/fundraise', 'App\Http\Controllers\FundRaiseController');
Route::resource('/image-upload', 'App\Http\Controllers\ImageUploadController');



/* Payment */
Route::get('/payment/{id}', 'App\Http\Controllers\PaymentController@index')->name('payment');
Route::post('/payment/{id}', 'App\Http\Controllers\PaymentController@process')->name('payment-process');
Route::get('/payment/confirm/{id}', 'App\Http\Controllers\PaymentController@index')->name('payment-success');
// Route::post('/payment/create/{detail_id}', 'App\Http\Controllers\PaymentController@process')->name('payment-create');
// Route::get('/payment/remove/{detail_id}', 'App\Http\Controllers\PaymentController@index')->name('payment-remove');

/* Admin */
Route::get('/admin/dashboard', 'App\Http\Controllers\DashboardController@index')->name('admin-dashboard');
Route::resource('/admin/donation-campaign', 'App\Http\Controllers\DonationCampaignController');
Route::resource('/admin/gallery', 'App\Http\Controllers\GalleryController');
Route::resource('/admin/transaction', 'App\Http\Controllers\TransactionController');

/* Auth */
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
