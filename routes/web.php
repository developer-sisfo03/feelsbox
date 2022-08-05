<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\GoogleCalenderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesMentalController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PsikologController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HasilTesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalPsikologController;

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

Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google.login')->middleware('guest');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/token', function () {
    return csrf_token(); 
});

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('login');
Route::post('/login', [loginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->name('register')->middleware('guest');
Route::resource('/psikolog/jadwal', PsikologController::class);
Route::get('/booking', [jadwalPsikologController::class, 'schedule'])->name('booking');

// Route::get('/calender', [GoogleCalenderController::class, 'index'])->name('calender');

Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'admin'], function () {

        Route::get('/admin', function () {
            return view('admin.index');
        })->name('admin');
        
        Route::resource('/admin/landing-page', LandingPageController::class);
        
        Route::resource('/admin/partnership', PartnershipController::class);

        Route::resource('/admin/test-mental', TesMentalController::class);

        Route::resource('/admin/keluhan', KeluhanController::class);

        Route::resource('/admin/konsultasi', KonsultasiController::class);

        Route::resource('/admin/hasil-tes', HasilTesController::class);

        Route::get('/admin/google-calender', [GoogleCalenderController::class, 'index'])->name('google-calender');

        Route::resource('/admin/psikolog', PsikoLogController::class);
    });
    
    Route::group(['middleware' => 'user'], function () {
        Route::get('/partnership', function () {
            return view('partnership');
        })->name('partnership');

        Route::get('/user', function () {
            return view('user.index-user');
        })->name('user');

        Route::resource('/tes-mental', TesMentalController::class);
        Route::resource('/keluhan', KeluhanController::class);

        Route::get('/appointment/{slug}', [AppointmentController::class, 'index'])->name('appointment');
        Route::post('/appointment/{slug}', [AppointmentController::class, 'booking'])->name('appointment');

        Route::resource('/konsultasi', KonsultasiController::class);
        Route::resource('/appointment', PsikologController::class);

        Route::resource('/hasil-tes', HasilTesController::class);

        Route::get('/back-again', function () {
            return view('user.back-again');
        })->name('back-again');

    });

    Route::group(['middleware' => 'psikolog'], function () {
        Route::get('/psikolog', function () {
            return view('psikolog.index-psikolog');
        })->name('psikolog');

       Route::resource('/psikolog/jadwal', JadwalPsikologController::class);
    });
    
});

