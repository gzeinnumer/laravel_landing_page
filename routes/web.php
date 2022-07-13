<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelompokController;
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

use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing.index');

Route::prefix('dashboardv2')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboardv2.index');

    Route::prefix('kelompok')->group(function () {

        Route::get('/', [KelompokController::class, 'index'])->name('kelompok.index');

        Route::get('/getdata', [KelompokController::class, 'getData'])->name('kelompok.getdata');

        Route::post('/create', [KelompokController::class, 'create'])->name('kelompok.create');

        Route::get('/delete/{id}', [KelompokController::class, 'delete'])->name('kelompok.delete');

        Route::get('/detailinfo/{id}', [KelompokController::class, 'detailInfo'])->name('kelompok.detailinfo');

        Route::get('/detailedit/{id}', [KelompokController::class, 'detailEdit'])->name('kelompok.detailedit');

        Route::post('/edit/{id}', [KelompokController::class, 'edit'])->name('kelompok.edit');
    });
});
