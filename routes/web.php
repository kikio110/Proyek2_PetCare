<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminKlinikAuthController;
use App\Http\Controllers\PetOwnerAuthController;

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

Route::get('/healthypet', function () {
    return view('landing-page.landing-page');
});

Route::get('/mitra_healthypet', function () {
    return view('landingpage-mitra.landingpage-mitra');
});

Route::get('/menu',function () {
    return view('landing-page.menu');
});

Route::get('/kontak',function () {
    return view('landing-page.kontak');
});

Route::get('/tentang',function () {
    return view('landing-page.tentang');
});


Route::get('/login/admin', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login/admin', [AdminAuthController::class, 'login']);
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

Route::get('/login/admin_klinik', [AdminKlinikAuthController::class, 'showLoginForm'])->name('login_klinik');
Route::post('/login/admin_klinik', [AdminKlinikAuthController::class, 'login']);
Route::get('/register/admin_klinik', [AdminKlinikAuthController::class, 'showRegistrationForm'])->name('register_klinik');
Route::post('/register/admin_klinik', [AdminKlinikAuthController::class, 'register']);
Route::post('/logout/admin_klinik', [AdminKlinikAuthController::class, 'logout'])->name('logout');

Route::get('/login/petowner', [PetOwnerAuthController::class, 'showLoginForm'])->name('login_petowner');
Route::post('/login/petowner', [PetOwnerAuthController::class, 'login']);
Route::get('/register/petowner', [PetOwnerAuthController::class, 'showRegistrationForm'])->name('register_petowner');
Route::post('/register/petowner', [PetOwnerAuthController::class, 'register']);
Route::post('/logout/petowner', [AdminKlinikAuthController::class, 'logout'])->name('logout');

Route::get('/login/dokter', [AdminAuthController::class, 'showLoginForm'])->name('login_dokter');
Route::post('/login/dokter', [AdminAuthController::class, 'login']);
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');