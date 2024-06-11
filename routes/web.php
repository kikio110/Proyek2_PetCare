<?php

use App\Http\Controllers\Admin\AdminController as AdminAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminKlinikAuthController;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\PetOwnerAuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminKlinikController;
use App\Http\Controllers\PemeriksaanController;

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

//otentikasi login
Route::get('/login/admin', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login/admin', [AdminAuthController::class, 'login']);
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

//otentikasi klinik
Route::get('/login/admin_klinik', [AdminKlinikAuthController::class, 'showLoginForm'])->name('login_klinik');
Route::post('/login/admin_klinik', [AdminKlinikAuthController::class, 'login']);
Route::get('/register/admin_klinik', [AdminKlinikAuthController::class, 'showRegistrationForm'])->name('register_klinik');
Route::post('/register/admin_klinik', [AdminKlinikAuthController::class, 'register']);
Route::post('/logout/admin_klinik', [AdminKlinikAuthController::class, 'logout'])->name('logout');

//otentikasi petowner
Route::get('/login/petowner', [PetOwnerAuthController::class, 'showLoginForm'])->name('login_petowner');
Route::post('/login/petowner', [PetOwnerAuthController::class, 'login']);
Route::get('/register/petowner', [PetOwnerAuthController::class, 'showRegistrationForm'])->name('register_petowner');
Route::post('/register/petowner', [PetOwnerAuthController::class, 'register']);
Route::post('/logout/petowner', [PetOwnerAuthController::class, 'logout'])->name('logout_petowner');

//otentikasi dokter
Route::get('/login/dokter', [AdminAuthController::class, 'showLoginForm'])->name('login_dokter');
Route::post('/login/dokter', [AdminAuthController::class, 'login']);
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

//dashboard
Route::get('/dashboard_admin', [dashboardcontroller::class, 'dashboard_admin'])->name('dashboard_admin');
Route::get('/dashboard_petowner', [dashboardcontroller::class, 'dashboard_petowner'])->name('dashboard_petowner');
Route::get('/dashboard_klinik', [AdminKlinikController::class, 'tampilkan_dashboard_klinik'])->name('dashboard_klinik');
Route::get('/dashboard_dokter', [dashboardcontroller::class, 'dashboard_dokter'])->name('dashboard_dokter');

//landingpage
Route::get('/landingpage', [LandingPageController::class, 'show_landingpage'])->name('landingpage');
Route::get('/mitra', [LandingPageController::class, 'show_mitra'])->name('landingpage.mitra');
Route::get('/tentang', [LandingPageController::class, 'show_tentang'])->name('landingpage.tentang');
Route::get('/menu', [LandingPageController::class, 'show_menu'])->name('landingpage.menu');
Route::get('/kontak', [LandingPageController::class, 'show_kontak'])->name('landingpage.kontak');

//pemeriksaan
Route::get('/pemeriksaans', [PemeriksaanController::class, 'index'])->name('pemeriksaan.index');

//setting data klinik
Route::get('/data/admin_klinik', [AdminKlinikController::class, 'create'])->name('data_klinik');
Route::post('/data/admin_klinik', [AdminKlinikController::class, 'store']);
