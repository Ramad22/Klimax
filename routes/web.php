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

Route::get('/landing-page', [WargaController::class,'landingPage'])->middleware('auth');
Route::get('/profile', [WargaController::class,'profile'])->middleware('auth');
Route::post('sendWa', [WargaController::class, 'store'])->name('send-wa');

Route::get('/sign-in', [SigninController::class,'sign_in'])->name('sign-in')->middleware('guest');
Route::get('/sign-up', [SigninController::class,'register']);
Route::post('/progresRegister', [SigninController::class,'progresRegister'])->name('progresRegister');
Route::post('/progresLogin', [SigninController::class,'progresLogin'])->name('progresLogin');
Route::get('/logout', [SigninController::class,'logout'])->name('logout');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/sign-in');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::get('/Admin/dashboard', [AdminController::class, 'dashboard'])->name('Admin/dashboard');
Route::get('/Admin/data-warga', [AdminController::class, 'dataWarga'])->name('Admin/data-warga');
Route::post('/addWarga', [AdminController::class, 'storeWarga'])->name('addWarga');
Route::post('/editWarga/{id_warga}', [AdminController::class, 'updateWarga'])->name('editWarga');
Route::get('/hapusWarga/{id_warga}', [AdminController::class, 'deleteWarga'])->name('hapusWarga');

Route::get('/Admin/jadwal-ronda', [AdminController::class, 'jadwalRonda'])->name('Admin/jadwal-ronda');
Route::post('/addJadwal', [AdminController::class, 'storeJadwal'])->name('addJadwal');
Route::post('/editJadwal/{id_jadwal}', [AdminController::class, 'updateJadwal'])->name('editJadwal');
Route::get('/hapusJadwal/{id_jadwal}', [AdminController::class, 'deleteJadwal'])->name('hapusJadwal');

Route::get('/Admin/data-pengguna', [AdminController::class, 'jadwalPengguna'])->name('Admin/data-pengguna');
Route::post('/addUser', [AdminController::class, 'storeUser'])->name('addUser');
Route::get('/hapusUser/{id}', [AdminController::class, 'deleteUser'])->name('hapusUser');
Route::post('/editUser/{id}', [AdminController::class, 'updateUser'])->name('editUser');



