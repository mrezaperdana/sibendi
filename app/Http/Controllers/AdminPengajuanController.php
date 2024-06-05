<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class AdminPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch unique no_nota values with associated kode_barang and tanggal
        $pengajuan = Transaksi::with('barang')
            ->select('no_nota', 'penerima', 'status', 'tanggal', 'jumlah', DB::raw('GROUP_CONCAT(kode_barang) as kode_barang'))
            ->groupBy('no_nota', 'penerima', 'status', 'tanggal', 'jumlah')
            ->get();

        // Organize data into a structure based on no_nota
        $groupedPengajuan = $pengajuan->groupBy('no_nota');
        $select_barang = Barang::select('kode_barang', 'nama_barang', 'kategori', 'Unit')->get();
        // dd($groupedPengajuan);
        return view('admins.pengajuans.index', compact('groupedPengajuan', 'select_barang'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $noNota)
    {
        $result = Transaksi::select(
            'transaksis.no_nota',
            'transaksis.penerima',
            'transaksis.kode_barang',
            'transaksis.tanggal',
            'transaksis.jumlah',
            'barangs.nama_barang',
            'barangs.harga_satuan',
            'barangs.kategori'
        )
            ->where('transaksis.no_nota', $noNota)
            ->leftJoin('barangs', 'transaksis.kode_barang', '=', 'barangs.kode_barang')
            ->get(); // Assuming you expect only one result

        // Calculate the new column and sum
        $totalPriceSum = 0;
        foreach ($result as $item) {
            $item->totalPrice = $item->jumlah * $item->harga_satuan;
            $totalPriceSum += $item->totalPrice;
        }

        $noNota = $noNota;
        return view('admins.pengajuans.verifikasi', compact('result', 'totalPriceSum', 'noNota'));
    }

    public function confirm($noNota)
    {
        // Update the status to 1 for all rows where no_nota matches $noNota
        Transaksi::where('no_nota', $noNota)->update(['status' => 1]);

        return redirect()->route('admins.pengajuans');
    }

    public function tolak($noNota)
    {
        // Update the status to 1 for all rows where no_nota matches $noNota
        Transaksi::where('no_nota', $noNota)->update(['status' => 2]);

        return redirect()->route('admins.pengajuans');
    }






    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
