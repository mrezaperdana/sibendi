<?php

namespace App\Http\Controllers;

use App\Models\AdminStock;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\BarangRusak;
use App\Models\Barang;
use Illuminate\Http\Request;

class AdminStockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    /**
     * Display a listing of the resource.
     */
    public function getBarangMasuk()
    {
        $result = BarangMasuk::join('barangs', 'barang_masuks.Kode_Barang', '=', 'barangs.Kode_Barang')
            ->select('barangs.Nama_Barang', 'barang_masuks.Tanggal', 'barang_masuks.No_Nota', 'barang_masuks.Kode_Barang', 'barang_masuks.Sat', 'barang_masuks.Harga_Satuan', 'barang_masuks.Qty')
            ->get();
        // Pass the values to the view
        return view('admins.stocks.barang-masuk', [
            'barangmasuk' => $result
        ]);
    }
    public function getBarangKeluar()
    {
        $result = BarangKeluar::join('barangs', 'barang_keluars.Kode_Barang', '=', 'barangs.Kode_Barang')
            ->select('barangs.Nama_Barang', 'barang_keluars.Tanggal', 'barang_keluars.No_Nota', 'barang_keluars.Kode_Barang', 'barang_keluars.Sat', 'barang_keluars.Harga_Satuan', 'barang_keluars.Qty')
            ->get();

        // Pass the values to the view
        return view('admins.stocks.barang-keluar', [
            'barangkeluar' => $result
        ]);
    }
    public function getBarangRusak()
    {
        $result = BarangRusak::join('barangs', 'barang_rusaks.Kode_Barang', '=', 'barangs.Kode_Barang')
            ->select('barangs.Nama_Barang', 'barang_rusaks.Tanggal', 'barang_rusaks.No_Nota', 'barang_rusaks.Kode_Barang', 'barang_rusaks.Sat', 'barang_rusaks.Harga_Satuan', 'barang_rusaks.Qty')
            ->get();
        // Pass the values to the view
        return view('admins.stocks.barang-rusak', [
            'barangrusak' => $result
        ]);
    }
    public function getStokBarang()
    {
        // $result = Barang::join('barang_rusaks', 'barang_rusaks.Kode_Barang', '=', 'barangs.Kode_Barang')
        //     ->join('barang_masuks', 'barang_masuks.Kode_Barang', '=', 'barangs.Kode_Barang')
        //     ->join('barang_keluars', 'barang_keluars.Kode_Barang', '=', 'barangs.Kode_Barang')
        //     ->select(
        //         'barangs.Nama_Barang',
        //         'barangs.Kode_Barang',
        //         'barangs.Kategori',
        //         'barangs.Unit',
        //         'barangs.Harga_Satuan',
        //         'barang_masuks.Qty as masuk_qty',
        //         'barang_rusaks.Qty as rusak_qty',
        //         'barang_keluars.Qty as keluar_qty'
        //     )
        //     ->get();
        $result = Barang::all();
        // Calculate 'total' based on the quantities
        $result->transform(function ($item) {
            $item->total = $item->masuk_qty - $item->rusak_qty - $item->keluar_qty;
            return $item;
        });

        return view('admins.stocks.stok-barang', [
            'stokbarang' => $result
        ]);
    }

    public function getTambahBarang()
    {



        // Pass the values to the view

    }



    public function addProduct()
    {
        // Pass the values to the view
        return view('admins.add.add-product', []);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminStock $adminStock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminStock $adminStock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminStock $adminStock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminStock $adminStock)
    {
        //
    }
}
