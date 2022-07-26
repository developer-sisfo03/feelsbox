<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BookingController;
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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\voucherController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\UserController;

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

Route::resource('/booking', PsikologController::class);
Route::get('/jadwal-psikolog', [JadwalPsikologController::class, 'jadwal'])->name('jadwal-psikolog');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/teams', [HomeController::class, 'teams'])->name('teams');

// ==================== teams =-=======================

// paling atas
Route::get('/team/muhammad-fathi-rabbani', [HomeController::class, 'fathi']);

// ==== barisan pertama =====
Route::get('/team/irsa-pramesti', [HomeController::class, 'irsa']);
Route::get('/team/wahyudi-khoeris-salimi', [HomeController::class, 'wahyu']);
Route::get('/team/muhammad-nafianto', [HomeController::class, 'nafi']);
Route::get('/team/mahardika-maulana-al-mahdi-handoko', [HomeController::class, 'dika']);

// ==== barisan kedua =====
Route::get('/team/neta-aulya-kurnia-ningrum', [HomeController::class, 'neta']);
Route::get('/team/sultan-hafiz-alexander', [HomeController::class, 'sultan']);
Route::get('/team/rafly-yogaswara', [HomeController::class, 'rafly']);
Route::get('team/muhammad-zaidan-rafii', [HomeController::class, 'rafii']);

// ==== barisan ketiga =====
Route::get('/team/adib-muhyi-asa', [HomeController::class, 'adib']);
Route::get('/team/soya-karerra', [HomeController::class, 'soya']);
Route::get('/team/tasya-maeza-chiqamara', [HomeController::class, 'tasya']);
Route::get('/team/shah-jehan-basrul', [HomeController::class, 'jeje']);


Route::get('/token', function () {
    return csrf_token(); 
});

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('login');
Route::post('/login', [loginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->name('register')->middleware('guest');
Route::resource('/psikolog/jadwal', PsikologController::class);
// Route::get('/booking', [jadwalPsikologController::class, 'schedule'])->name('booking');

// Route::get('/calender', [GoogleCalenderController::class, 'index'])->name('calender');

Route::post('/convert', [TransaksiController::class, 'convertImage'])->name('convert');

Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'update']);
});

Route::group(['middleware' => 'auth'], function () {
    
    
    // =============================================================================================================
    // ============================================== admin =========================================================
    // =============================================================================================================
    
    Route::group(['middleware' => 'admin'], function () {
        
        Route::get('/admin', [IndexAdminController::class, 'index'])->name('admin');
        
        Route::resource('/admin/landing-page', LandingPageController::class);
        
        Route::resource('/admin/partnership', PartnershipController::class);
        
        Route::resource('/admin/test-mental', TesMentalController::class);
        
        Route::resource('/admin/keluhan', KeluhanController::class);
        
        Route::resource('/admin/konsultasi', KonsultasiController::class);
        
        Route::resource('/admin/hasil-tes', HasilTesController::class);
        
        Route::resource('/admin/voucher', VoucherController::class);

        Route::get('/admin/google-calender', [GoogleCalenderController::class, 'index'])->name('google-calender');

        Route::get('/admin/psikolog/verifikasi', [PsikoLogController::class, 'verifikasi']);
        
        Route::resource('/admin/psikolog', PsikoLogController::class);

        Route::get('/admin/psikolog/{id}/verifikasi', [PsikologController::class, 'verified']);

        Route::get('/admin/booking', [BookingController::class, 'index'])->name('booking-transaksi');

        Route::get('/admin/booking/{id}/verifikasi', [BookingController::class, 'verifikasi'])->name('booking-verifikasi');
        
        Route::get('/admin/booking/{id}/delete', [BookingController::class, 'destroy'])->name('booking-delete');

        Route::get('admin/review', [ReviewController::class, 'showReviewForAdmin'])->name('review-psikolog');

        Route::get('admin/teams', [TeamsController::class, 'index'])->name('teams');
    });
    

    // =============================================================================================================
    // ============================================== user =========================================================
    // =============================================================================================================
    Route::group(['middleware' => 'user'], function () {
        Route::get('/partnership', function () {
            return view('partnership');
        })->name('partnership');

        Route::get('/user', [UserController::class, 'index'])->name('user');

        Route::resource('/tes-mental', TesMentalController::class);
        Route::resource('/keluhan', KeluhanController::class);

        Route::resource('/appointment', AppointmentController::class);

        Route::resource('/konsultasi', KonsultasiController::class);

        Route::post('/pesan', [BookingController::class, 'booking'])->name('booking');

        Route::resource('/hasil-tes', HasilTesController::class);
                
        Route::get('/back-again', function () {
            return view('user.back-again');
        })->name('back-again');
        
        Route::get('/riwayat', [ReviewController::class, 'index'])->name('review');

        Route::post('/review/{id}/save', [ReviewController::class, 'saveReview']);
        
        Route::get('/data-review', [ReviewController::class, 'getReview']);
    });

    // =============================================================================================================
    // ============================================== psikolog =====================================================
    // =============================================================================================================
    
    Route::group(['middleware' => 'psikolog'], function () {
        Route::get('/psikolog', [PsikologController::class, 'home'])->name('psikolog');

        Route::resource('/psikolog/jadwal', JadwalPsikologController::class);

        Route::get('/psikolog/booking', [BookingController::class, 'index'])->name('booking');
        Route::get('/psikolog/booking/{id}/verifikasi', [BookingController::class, 'verifikasi'])->name('booking-verifikasi');
        Route::get('/psikolog/booking/{id}/delete', [BookingController::class, 'destroy'])->name('booking-delete');
        Route::get('psikolog/review', [ReviewController::class, 'showReview'])->name('review-psikolog');
    
        Route::resource('/psikolog/appointment', AppointmentController::class);
    });
    
});

