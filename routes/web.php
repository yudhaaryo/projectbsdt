<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\KomputerController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;


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

Route::get('/', function () {
    return view('app');
});

// Route::get('/transaksi', function() {
//     return view('page.transaksi');
// });

// Route::get('pelanggan', [PelangganController::class, 'index']);
// Route::post('create', [PelangganController::class, 'store']);
// Route::get('create', [PelangganController::class, 'create']);

Route::resource('pelanggan',PelangganController::class);
Route::resource('billing',BillingController::class);
Route::resource('transaksi',TransaksiController::class);
Route::resource('komputer',KomputerController::class);
Route::get('/login',[LoginController::class, 'index']);
