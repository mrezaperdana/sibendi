<?php
use App\Http\Controllers\AdminController;
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
    return view('welcome');
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
    Route::resource('dashboards', AdminController::class);
});