<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Backend\KasirController;
use App\Http\Controllers\Backend\HasilHarianController;
use App\Http\Controllers\Backend\HasilBulananController;
use App\Http\Controllers\Backend\Master_Data\PegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

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

Route::prefix('admin')->group(function () {
    // example
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard.index');
    Route::get('/dashboard/bulanan', [DashboardController::class,'bulanan'])->name('dashboard.bulanan');

    // end example
    //do coding
    Route::resource('kasir', KasirController::class);
    Route::resource('pegawai', PegawaiController::class);
    Route::get('hasil-harian', [HasilHarianController::class,'index'])->name('hasil-harian.index');
    Route::get('hasil-harian/print', [HasilHarianController::class, 'print'])->name('hasil-harian.print');
    Route::get('hasil-bulanan', [HasilBulananController::class,'index'])->name('hasil-bulanan.index');
    Route::get('hasil-bulanan/print', [HasilBulananController::class, 'print'])->name('hasil-bulanan.print');
});

Route::get('/dashboard', function () {
    return view('example.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('',function () {
    return view('frontend.home.index');
});

require __DIR__.'/auth.php';
