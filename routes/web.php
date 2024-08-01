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
use App\Http\Controllers\AdminUserController;
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
    return redirect('/login');
});

Route::middleware('guest')->get('/login', [LoginController::class, 'index'])->name('site.login');
Route::middleware('guest')->post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('site.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','check.admin.sibendi','PreventBackHistory']], function () {

    Route::post('admins.stocks.status-barang', [AdminController::class, 'changePassword'])->name('AdminChangePassword');
    Route::post('admins.stocks.stok-barang', [AdminController::class, 'index'])->name('AdminChangePassword');

    Route::get('dashboards', [AdminController::class, 'index'])->name('admins.dashboards');

    Route::resource('master-barang/satuan-barang', AdminSatuanController::class)->parameters([
        'satuan-barang' => 'kode_satuan',
    ])->names([
        'index' => 'admin.satuan.index',
        'create' => 'admin.satuan.create',
        'store' => 'admin.satuan.store',
        'edit' => 'admin.satuan.edit',
        'update' => 'admin.satuan.update',
        'destroy' => 'admin.satuan.destroy',
    ]);

    Route::resource('master-barang/kategori-barang', AdminKategoriController::class)->parameters([
        'kategori-barang' => 'kode_kategori',
    ])->names([
        'index' => 'admin.kategori.index',
        'create' => 'admin.kategori.create',
        'store' => 'admin.kategori.store',
        'edit' => 'admin.kategori.edit',
        'update' => 'admin.kategori.update',
        'destroy' => 'admin.kategori.destroy',
    ]);
    Route::resource('master-barang/stok-barang', BarangController::class)->parameters([
        'stok-barang' => 'kode_barang',
    ])->names([
        'index' => 'admin.barang.index',
        'create' => 'admin.barang.create',
        'store' => 'admin.barang.store',
        'edit' => 'admin.barang.edit',
        'update' => 'admin.barang.update',
        'destroy' => 'admin.barang.destroy',
    ]);
    Route::get('/generate-document', [BarangController::class, 'generateDocument'])->name('admins.cetak');
    
    Route::get('/pengajuan/daftar-pengajuan', [AdminPengajuanController::class, 'index'])->name('admins.pengajuans');
    Route::get('/pengajuan/{noNota}/verifikasi', [AdminPengajuanController::class, 'edit'])->name('pengajuan.edit');
    Route::patch('/confirm/{noNota}', [AdminPengajuanController::class, 'confirm'])->name('pengajuan.confirm');
    Route::patch('/reject/{noNota}', [AdminPengajuanController::class, 'tolak'])->name('pengajuan.tolak');
    
    Route::get('/transaksi/barang-keluar', [AdminStockController::class, 'getBarangKeluar'])->name('admins.transaksis.barang-keluar');
    Route::get('/transaksi/barang-rusak', [AdminStockController::class, 'getBarangRusak'])->name('admins.transaksis.barang-rusak');
    Route::get('/transaksi/barang-masuk', [AdminStockController::class, 'getBarangMasuk'])->name('admins.transaksis.barang-masuk');
    
    Route::get('/barangs/create', [BarangController::class, 'create'])->name('admins.barangs.create');
    Route::post('/barangs', [BarangController::class, 'store'])->name('barangs.store');
    Route::post('/barangs-excel', [BarangController::class, 'storeExcel'])->name('barangs.excel-store');
    Route::get('/barangs/{barang}/edit', [BarangController::class, 'edit'])->name('barangs.edit');
    Route::patch('/barangs/{barang}', [BarangController::class, 'update'])->name('barangs.update');
    Route::delete('/barangs/{barang}', [BarangController::class, 'destroy'])->name('barangs.destroy');

    Route::get('/daftar-pengguna', [AdminUserController::class, 'index'])->name('admins.penggunas.index');


    Route::get('add-product', [AdminStockController::class, 'addProduct'])->name('admins.add.add-product');
    Route::post('post-product', [AdminStockController::class, 'postProduct'])->name('admins.post.post-product');
 
    
    Route::resource('stocks', AdminStockController::class);


});



Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {

    Route::post('admins.stocks.status-barang', [AdminController::class, 'changePassword'])->name('AdminChangePassword');
    Route::post('admins.stocks.stok-barang', [AdminController::class, 'index'])->name('AdminChangePassword');
    Route::get('dashboards', [UserController::class, 'index'])->name('users.dashboards');

    Route::get('profile', [PengajuanController::class, 'index'])->name('users.profile');

    Route::get('pengajuan-saya', [PengajuanController::class, 'index'])->name('users.pengajuans');
    Route::get('/pengajuan/baru', [PengajuanController::class, 'create'])->name('users.pengajuans.create');
    Route::post('/pengajuans', [PengajuanController::class, 'store'])->name('pengajuans.store');
    Route::get('/barangs/{barang}/edit', [BarangController::class, 'edit'])->name('barangs.edit');
    Route::patch('/barangs/{barang}', [BarangController::class, 'update'])->name('barangs.update');
    Route::delete('/barangs/{barang}', [BarangController::class, 'destroy'])->name('barangs.destroy');
});
