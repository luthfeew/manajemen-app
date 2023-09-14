<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Akun;
use App\Livewire\Area;
use App\Livewire\Beranda;
use App\Livewire\Paket;
use App\Livewire\Pelanggan;
use App\Livewire\Pengguna;
use App\Livewire\Tagihan;
use App\Livewire\Transaksi;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', Beranda::class)->name('beranda');
Route::get('/akun', Akun::class)->name('akun');
Route::get('/area', Area::class)->name('area');
Route::get('/paket', Paket::class)->name('paket');
Route::get('/pelanggan', Pelanggan::class)->name('pelanggan');
Route::get('/pengguna', Pengguna::class)->name('pengguna');
Route::get('/tagihan', Tagihan::class)->name('tagihan');
Route::get('/transaksi', Transaksi::class)->name('transaksi');
