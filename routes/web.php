<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\PenilaianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginIndexController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WowsiController;
use App\Http\Controllers\PenugasanController;
use App\Http\Controllers\EditAkunController;


Route::get('/', [WowsiController::class, 'index'])->name('wowsi.index');


Route::group(['middleware' => ['guest']], function () {
    
    Route::get('/loginmasuk', [LoginIndexController::class, 'index'])->name('login.index');
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/soon', [HomeController::class, 'index'])->name('soon');
    

    // WOWSI
    Route::get('/wowsisearch', [WowsiController::class, 'searchByNim'])->name('wowsi.search');
    // Penugasan WOWSI
    Route::get('/penugasan', [PenugasanController::class, 'index'])->name('wowsi-penugasan.index');
    // Edit AKun WOWSI
    Route::get('/editakun', [EditAkunController::class, 'index'])->name('wowsi-editakun.index');
    Route::post('/performeditakun', [EditAkunController::class, 'editdata'])->name('wowsi-editakun.perform');





    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

    Route::prefix('dashboardv2')->group(function () {


        Route::get('/', [DashboardController::class, 'index'])->name('dashboardv2.index');

        // Kelompok
        Route::prefix('kelompok')->group(function () {

            Route::get('/', [KelompokController::class, 'index'])->name('kelompok.index');

            Route::get('/getdata', [KelompokController::class, 'getData'])->name('kelompok.getdata');

            Route::post('/create', [KelompokController::class, 'create'])->name('kelompok.create');

            Route::get('/delete/{id}', [KelompokController::class, 'delete'])->name('kelompok.delete');

            Route::get('/detailinfo/{id}', [KelompokController::class, 'detailInfo'])->name('kelompok.detailinfo');

            Route::get('/detailedit/{id}', [KelompokController::class, 'detailEdit'])->name('kelompok.detailedit');

            Route::post('/edit/{id}', [KelompokController::class, 'edit'])->name('kelompok.edit');
        });

        // Tugas
        Route::prefix('tugas')->group(function () {

            Route::get('/', [TugasController::class, 'index'])->name('tugas.index');

            Route::get('/getdata', [TugasController::class, 'getData'])->name('tugas.getdata');

            Route::post('/create', [TugasController::class, 'create'])->name('tugas.create');

            Route::get('/delete/{id}', [TugasController::class, 'delete'])->name('tugas.delete');

            Route::get('/detailinfo/{id}', [TugasController::class, 'detailInfo'])->name('tugas.detailinfo');

            Route::get('/detailedit/{id}', [TugasController::class, 'detailEdit'])->name('tugas.detailedit');

            Route::post('/edit/{id}', [TugasController::class, 'edit'])->name('tugas.edit');
        });

        // User
        Route::prefix('user')->group(function () {

            Route::get('/', [UserController::class, 'index'])->name('user.index');

            Route::get('/getdata', [UserController::class, 'getData'])->name('user.getdata');

            Route::post('/create', [UserController::class, 'create'])->name('user.create');

            Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

            Route::get('/detailinfo/{id}', [UserController::class, 'detailInfo'])->name('user.detailinfo');

            Route::get('/detailedit/{id}', [UserController::class, 'detailEdit'])->name('user.detailedit');

            Route::post('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');


            // SEARCHUSER
            Route::get('/searchuser', [UserController::class, 'searchUser'])->name('user.search');

        });

        // Penilaian
        Route::prefix('penilaian')->group(function () {

            Route::get('/', [PenilaianController::class, 'index'])->name('penilaian.index');

            Route::get('/getdata', [PenilaianController::class, 'getData'])->name('penilaian.getdata');

            Route::post('/create', [PenilaianController::class, 'create'])->name('penilaian.create');

            Route::get('/delete/{id}', [PenilaianController::class, 'delete'])->name('penilaian.delete');

            Route::get('/detailinfo/{id}', [PenilaianController::class, 'detailInfo'])->name('penilaian.detailinfo');

            Route::get('/detailedit/{id}', [PenilaianController::class, 'detailEdit'])->name('penilaian.detailedit');

            Route::post('/edit/{id}', [PenilaianController::class, 'edit'])->name('penilaian.edit');
        });
    });
});
