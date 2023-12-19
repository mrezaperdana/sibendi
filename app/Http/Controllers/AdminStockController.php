<?php

namespace App\Http\Controllers;

use App\Models\AdminStock;
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
        // Pass the values to the view
        return view('admins.stocks.barang-masuk', [
        ]);
    }
    public function getBarangKeluar()
    {
        // Pass the values to the view
        return view('admins.stocks.barang-keluar', [
        ]);
    }
    public function getBarangRusak()
    {
        // Pass the values to the view
        return view('admins.stocks.barang-rusak', [
        ]);
    }
    public function getStokBarang()
    {
        // Pass the values to the view
        return view('admins.stocks.stok-barang', [
        ]);
    }
    
    
    
    public function addProduct()
    {
        // Pass the values to the view
        return view('admins.add.add-product', [
        ]);
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
