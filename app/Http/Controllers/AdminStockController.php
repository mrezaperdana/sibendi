<?php

namespace App\Http\Controllers;

use App\Models\AdminStock;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\BarangRusak;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $result = BarangMasuk::join('barangs', 'barang_masuks.kode_barang', '=', 'barangs.kode_barang')
            ->select('barangs.nama_barang', 'barang_masuks.tanggal', 'barang_masuks.no_nota', 'barang_masuks.kode_barang', 'barang_masuks.satuan', 'barang_masuks.harga_satuan', 'barang_masuks.qty')
            ->get();
        // pass the values to the view
        return view('admins.transaksis.barang-masuk', [
            'barangmasuk' => $result
        ]);
    }
    public function getBarangKeluar()
    {
        $result = BarangKeluar::join('barangs', 'barang_keluars.kode_barang', '=', 'barangs.kode_barang')
            ->select('barangs.nama_barang', 'barang_keluars.tanggal', 'barang_keluars.no_nota', 'barang_keluars.kode_barang', 'barang_keluars.satuan', 'barang_keluars.harga_satuan', 'barang_keluars.qty')
            ->get();

        // Pass the values to the view
        return view('admins.transaksis.barang-keluar', [
            'barangkeluar' => $result
        ]);
    }
    public function getBarangRusak()
    {
        $result = BarangRusak::join('barangs', 'barang_rusaks.kode_barang', '=', 'barangs.kode_barang')
            ->select('barangs.nama_barang', 'barang_rusaks.tanggal', 'barang_rusaks.no_nota', 'barang_rusaks.kode_barang', 'barang_rusaks.satuan', 'barang_rusaks.harga_satuan', 'barang_rusaks.qty')
            ->get();
        // pass the values to the view
        return view('admins.transaksis.barang-rusak', [
            'barangrusak' => $result
        ]);
    }
    public function getStokBarang()
    {
        $result = Barang::leftJoin('barang_rusaks', 'barang_rusaks.kode_barang', '=', 'barangs.kode_barang')
            ->leftJoin('barang_masuks', 'barang_masuks.kode_barang', '=', 'barangs.kode_barang')
            ->leftJoin('barang_keluars', 'barang_keluars.kode_barang', '=', 'barangs.kode_barang')
            ->select(
                'barangs.nama_barang',
                'barangs.kode_barang',
                'barangs.kategori',
                'barangs.satuan',
                'barangs.harga_satuan',
                DB::raw('COALESCE(barang_masuks.qty, 0) as masuk_qty'),
                DB::raw('COALESCE(barang_rusaks.qty, 0) as rusak_qty'),
                DB::raw('COALESCE(barang_keluars.qty, 0) as keluar_qty')
            )
            ->get();


        // Calculate 'total' based on the quantities
        $result->transform(function ($item) {
            $item->total = $item->masuk_qty - $item->rusak_qty - $item->keluar_qty;
            return $item;
        });

        return view('admins.master-barangs.stok-barang', [
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
