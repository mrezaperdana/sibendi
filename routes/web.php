<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminStockController;
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


Route::group(['prefix' => 'admin',], function () {
    
    Route::post('admins.stocks.status-barang', [AdminController::class, 'changePassword'])->name('AdminChangePassword');
    Route::post('admins.stocks.stok-barang', [AdminController::class, 'index'])->name('AdminChangePassword');


    Route::get('dashboards', [AdminController::class, 'index'])->name('admins.dashboards');
    Route::get('barang-masuk', [AdminStockController::class, 'getBarangMasuk'])->name('admins.stocks.barang-masuk');
    Route::get('barang-keluar', [AdminStockController::class, 'getBarangKeluar'])->name('admins.stocks.barang-keluar');
    Route::get('barang-rusak', [AdminStockController::class, 'getBarangRusak'])->name('admins.stocks.barang-rusak');
    Route::get('stok-barang', [AdminStockController::class, 'getStokBarang'])->name('admins.stocks.stok-barang');
    Route::get('add-product', [AdminStockController::class, 'addProduct'])->name('admins.add.add-product');
    Route::post('post-product', [AdminStockController::class, 'postProduct'])->name('admins.post.post-product');
    // Route::resource('dashboards', AdminController::class);
    Route::resource('stocks', AdminStockController::class);
});