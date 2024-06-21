<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminSatuanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminStockController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\AdminPengajuanController;
use App\Http\Controllers\AdminPenggunaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('admins/dashboards.index');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/barang-masuk', function () {
    return view('admins.stocks.status-barang');
});
Route::get('/stok-barang', function () {
    return view('admins.stocks.stok-barang');
});

Route::get('login', [LoginController::class, 'index'])->name('site.login');
Route::get('send', [PengajuanController::class, 'sendNotification']);

Route::group(['prefix' => 'admin',], function () {

    Route::post('admins.stocks.status-barang', [AdminController::class, 'changePassword'])->name('AdminChangePassword');
    Route::post('admins.stocks.stok-barang', [AdminController::class, 'index'])->name('AdminChangePassword');


    Route::get('dashboards', [AdminController::class, 'index'])->name('admins.dashboards');

    Route::get('/admin-satuan-barang', function () {
        return view('admins.master-barangs.satuan');
    });

    Route::get('/admin-stok-barang', function () {
        return view('admins.master-barangs.stok-barang');
    });

    Route::get('/master-barang/kategori-barang', [AdminKategoriController::class, 'index'])->name('admins.kategoris');
    Route::get('/master-barang/kategori-barang/{id}/edit', [AdminKategoriController::class, 'update'])->name('kategori.edit');
    
    
    Route::get('/master-barang/satuan-barang', [AdminSatuanController::class, 'index'])->name('admins.satuans');
    Route::get('/master-barang/satuan-barang/{id}/edit', [AdminSatuanController::class, 'update'])->name('satuan.edit');



    // Route::get('/master-barang/stok-barang', [AdminKategoriController::class, 'index'])->name('admins.stoks');
    Route::get('/master-barang/stok-barang', [AdminStockController::class, 'getStokBarang'])->name('admins.master-barangs.stok-barang');

    Route::get('/transaksi/barang-keluar', [AdminStockController::class, 'getBarangKeluar'])->name('admins.transaksis.barang-keluar');
    Route::get('/transaksi/barang-rusak', [AdminStockController::class, 'getBarangRusak'])->name('admins.transaksis.barang-rusak');
    Route::get('/transaksi/barang-masuk', [AdminStockController::class, 'getBarangMasuk'])->name('admins.transaksis.barang-masuk');
    // Route::get('tambah-barang', [AdminStockController::class, 'getTambahBarang'])->name('admins.stocks.tambah-barang');
    Route::get('add-product', [AdminStockController::class, 'addProduct'])->name('admins.add.add-product');
    Route::post('post-product', [AdminStockController::class, 'postProduct'])->name('admins.post.post-product');
    // Route::resource('dashboards', AdminController::class);
    Route::resource('stocks', AdminStockController::class);


    Route::get('/barangs', [BarangController::class, 'index'])->name('barangs.index');
    Route::get('/barangs/create', [BarangController::class, 'create'])->name('admins.barangs.create');
    Route::post('/barangs', [BarangController::class, 'store'])->name('barangs.store');
    Route::post('/barangs-excel', [BarangController::class, 'storeExcel'])->name('barangs.excel-store');
    Route::get('/barangs/{barang}/edit', [BarangController::class, 'edit'])->name('barangs.edit');
    Route::patch('/barangs/{barang}', [BarangController::class, 'update'])->name('barangs.update');
    Route::delete('/barangs/{barang}', [BarangController::class, 'destroy'])->name('barangs.destroy');

    Route::get('/pengajuan/daftar-pengajuan', [AdminPengajuanController::class, 'index'])->name('admins.pengajuans');
    Route::get('/pengajuan/{noNota}/verifikasi', [AdminPengajuanController::class, 'edit'])->name('pengajuan.edit');
    Route::patch('/confirm/{noNota}', [AdminPengajuanController::class, 'confirm'])->name('pengajuan.confirm');
    Route::patch('/reject/{noNota}', [AdminPengajuanController::class, 'tolak'])->name('pengajuan.tolak');
    // Route::get('/pengajuan/{totalPriceSum}', [AdminPengajuanController::class, 'setuju'])->name('pengajuan.setuju');

    Route::get('/daftar-pengguna', [AdminPenggunaController::class, 'index'])->name('admins.penggunas');
});



Route::group(['prefix' => 'user',], function () {

    Route::post('admins.stocks.status-barang', [AdminController::class, 'changePassword'])->name('AdminChangePassword');
    Route::post('admins.stocks.stok-barang', [AdminController::class, 'index'])->name('AdminChangePassword');
    Route::get('dashboards', [UserController::class, 'index'])->name('users.dashboards');


    Route::get('pengajuan-saya', [PengajuanController::class, 'index'])->name('users.pengajuans');
    Route::get('/pengajuan/baru', [PengajuanController::class, 'create'])->name('users.pengajuans.create');
    Route::post('/pengajuans', [PengajuanController::class, 'store'])->name('pengajuans.store');
    Route::get('/barangs/{barang}/edit', [BarangController::class, 'edit'])->name('barangs.edit');
    Route::patch('/barangs/{barang}', [BarangController::class, 'update'])->name('barangs.update');
    Route::delete('/barangs/{barang}', [BarangController::class, 'destroy'])->name('barangs.destroy');
});
