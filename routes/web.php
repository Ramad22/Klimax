<?php

use App\Http\Controllers\SigninController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\AdminController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

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

    // Route Landing-Page
    Route::get('/landing-page', [WargaController::class,'landingPage'])->middleware('auth');
    Route::get('/profile', [WargaController::class,'profile'])->middleware('auth');
    
    // Route Login
    Route::get('/sign-in', [SigninController::class,'sign_in'])->name('sign-in')->middleware('guest');
    Route::post('/progresLogin', [SigninController::class,'progresLogin'])->name('progresLogin');
    Route::get('/logout', [SigninController::class,'logout'])->name('logout');
    
    // Route Send-Notif
    Route::post('send-wa', [WargaController::class, 'store'])->name('send-wa');

    // Route Admin-Dashboard
    Route::get('/Admin/dashboard', [AdminController::class, 'dashboard'])->name('Admin/dashboard')->middleware('auth');

    // Route Data-Warga
    Route::get('/Admin/data-warga', [AdminController::class, 'dataWarga'])->name('Admin/data-warga')->middleware('auth');
    Route::post('/addWarga', [AdminController::class, 'storeWarga'])->name('addWarga');
    Route::post('/editWarga/{id_warga}', [AdminController::class, 'updateWarga'])->name('editWarga');
    Route::get('/hapusWarga/{id_warga}', [AdminController::class, 'deleteWarga'])->name('hapusWarga');
    
    // Route Jadwal-Ronda
    Route::get('/Admin/jadwal-ronda', [AdminController::class, 'jadwalRonda'])->name('Admin/jadwal-ronda')->middleware('auth');
    Route::post('/addJadwal', [AdminController::class, 'storeJadwal'])->name('addJadwal');
    Route::post('/editJadwal/{id_jadwal}', [AdminController::class, 'updateJadwal'])->name('editJadwal');
    Route::get('/hapusJadwal/{id_jadwal}', [AdminController::class, 'deleteJadwal'])->name('hapusJadwal');

    // Route Data-Pengguna
    Route::get('/Admin/data-pengguna', [AdminController::class, 'jadwalPengguna'])->name('Admin/data-pengguna')->middleware('auth');
    Route::post('/addUser', [AdminController::class, 'storeUser'])->name('addUser');
    Route::get('/hapusUser/{id}', [AdminController::class, 'deleteUser'])->name('hapusUser');
    Route::post('/editUser/{id}', [AdminController::class, 'updateUser'])->name('editUser');

    // Route Lapor-Warga
    Route::get('/Admin/data-pelapor', [AdminController::class, 'dataPelapor'])->name('Admin/data-pelapor')->middleware('auth');

    // Route Search
    Route::get('result', [AdminController::class, 'resultWarga'])->name('resultWarga');
    Route::get('resultUser', [AdminController::class, 'resultUser'])->name('resultUser');
    Route::get('resultJadwal', [AdminController::class, 'resultJadwal'])->name('resultJadwal');

    



