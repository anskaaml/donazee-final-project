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
Route::get('/home', 'App\Http\Controllers\HomeController@index')
        ->name('home');

Route::get('/donation-detail/{id}', 'App\Http\Controllers\DonationDetailController@index')
        ->name('donation-detail');

/* Fundraise */
Route::get('/fundraise/create', 'App\Http\Controllers\FundraiseController@create')
        ->middleware(['auth:sanctum', 'verified'])
        ->name('fundraise-create');

Route::post('/fundraise/store', 'App\Http\Controllers\FundraiseController@store')
        ->name('fundraise-store');

/* Image Upload */
Route::get('/commitment/{id}', 'App\Http\Controllers\ImageUploadController@process')
        ->name('commitment');

Route::post('/image/upload/{id}', 'App\Http\Controllers\ImageUploadController@upload')
        ->name('image-upload');

/* Transaction */
Route::get('/transaction/{id}', 'App\Http\Controllers\DonateController@process')
        ->middleware(['auth:sanctum', 'verified'])
        ->name('transaction-process');

Route::post('/transaction/donate/{id}', 'App\Http\Controllers\DonateController@donate')
        ->middleware(['auth:sanctum', 'verified'])
        ->name('transaction-donate');

/* Admin */
Route::get('/admin/dashboard', 'App\Http\Controllers\DashboardController@index')
        ->middleware(['auth:sanctum', 'verified'])
        ->name('admin-dashboard');

Route::resource('/admin/donation-campaign', 'App\Http\Controllers\DonationCampaignController');
        
Route::resource('/admin/gallery', 'App\Http\Controllers\GalleryController');
        
Route::resource('/admin/transaction', 'App\Http\Controllers\TransactionController');

Route::resource('/admin/fund', 'App\Http\Controllers\FundController');
       
/* Auth */
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


/* Midtrans */
Route::post('/payment/callback', 'App\Http\Controllers\MidtransController@notificationHandler');
Route::get('/payment/finish', 'App\Http\Controllers\MidtransController@finishRedirect');
Route::get('/payment/unfinish', 'App\Http\Controllers\MidtransController@unfinishRedirect');
Route::get('/payment/error', 'App\Http\Controllers\MidtransController@errorRedirect');