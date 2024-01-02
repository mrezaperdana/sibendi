<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;
use App\Http\Requests\StorePengajuanRequest;
use App\Http\Requests\UpdatePengajuanRequest;
use Illuminate\Validation\Rules\Unique;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch unique No_Nota values with associated Kode_Barang and Tanggal
        $pengajuan = Transaksi::select('No_Nota', 'Tanggal', 'Jumlah', DB::raw('GROUP_CONCAT(Kode_Barang) as Kode_Barang'))
            ->groupBy('No_Nota', 'Tanggal', 'Jumlah')
            ->get();

        // Organize data into a structure based on No_Nota
        $groupedPengajuan = $pengajuan->groupBy('No_Nota');

        return view('users.pengajuans.index', compact('groupedPengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $result = Barang::select('Kode_Barang', 'Nama_Barang')->get();
        return view('users.pengajuans.create', [
            'select_barang'  => $result
        ]);
    }

    private function generateNoNota()
{
    // Get the last highest No_Nota with 'TU-' prefix from the database
    $lastHighestNoNota = Transaksi::where('No_Nota', 'like', 'TU-%')->max('No_Nota');

    // Extract the numeric part and increment it
    $numericPart = (int)substr($lastHighestNoNota, 3); // Assuming 'TU-' prefix
    $nextNumericPart = $numericPart + 1;

    // Generate the new No_Nota
    $newNoNota = 'TU-' . str_pad($nextNumericPart, 5, '0', STR_PAD_LEFT); // Assuming 5 digits

    return $newNoNota;
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request  $request)
    {
         // dd($request->all());
    $Tanggal = now()->toDateString(); // Using the current date
    // Generate a single No_Nota for all records
    $No_Nota = $this->generateNoNota();

    // Access the repeater array
    $repeaterData = $request->input('kt_docs_repeater_basic', []);

    // Loop through the repeater data
    foreach ($repeaterData as $data) {
        $datasave = [
            'Tanggal' => $Tanggal,
            'Kode_Barang' => $data['Kode_Barang'],
            'Jumlah' => $data['Jumlah'],
            'No_Nota' => $No_Nota,
            'Penerima' => 'UMUM',
        ];

        // Use Eloquent create method for model insert
        Transaksi::create($datasave);
    }

    // Additional logic as needed...

    return redirect()->route('users.pengajuans'); // Replace with your actual route

    }

    /**
     * Display the specified resource.
     */
    public function show(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $pengajuan)
    {
        //
    }
}
