<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class AdminPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    // Fetch unique No_Nota values with associated Kode_Barang and Tanggal
    //    $pengajuan = Transaksi::with('barang')
    //    ->select('No_Nota', 'Penerima', 'Status', 'Tanggal', 'Jumlah', DB::raw('GROUP_CONCAT(Kode_Barang) as Kode_Barang'))
    //    ->groupBy('No_Nota', 'Penerima', 'Status', 'Tanggal', 'Jumlah')
    //    ->get();

        // // Organize data into a structure based on No_Nota
        // $groupedPengajuan = $pengajuan->groupBy('No_Nota');
        // $select_barang = Barang::select('Kode_Barang', 'Nama_Barang', 'Kategori', 'Unit')->get();
        // // dd($groupedPengajuan);
        return view('admins.pengguna');
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
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengguna $pengguna)
    {
        //
    }
}
