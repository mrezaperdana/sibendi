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
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;
use Carbon\Carbon;

class PengajuanController extends Controller
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
        $select_barang = Barang::select('kode_barang', 'nama_barang', 'kode_kategori', 'kode_satuan')->get();
        // dd($groupedPengajuan);
        return view('users.pengajuans.index', compact('groupedPengajuan', 'select_barang'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $result = Barang::select('kode_barang', 'nama_barang')->get();
        return view('users.pengajuans.create', [
            'select_barang'  => $result
        ]);
    }

    private function generateNoNota()
    {
        // Get the last highest no_nota with 'TU-' prefix from the database
        $lastHighestNoNota = Transaksi::where('no_nota', 'like', 'TU-%')->max('no_nota');

        // Extract the numeric part and increment it
        $numericPart = (int)substr($lastHighestNoNota, 3); // Assuming 'TU-' prefix
        $nextNumericPart = $numericPart + 1;

        // Generate the new no_nota
        $newNoNota = 'TU-' . str_pad($nextNumericPart, 5, '0', STR_PAD_LEFT); // Assuming 5 digits

        return $newNoNota;
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
    
        // Get the current date and time in the server's timezone (UTC)
        $tanggal = Carbon::now();

        // Convert the server's timezone to the user's timezone if needed
        // Replace 'Asia/Jakarta' with the appropriate timezone for your users
        $tanggal->setTimezone('Asia/Jakarta');

        // Generate a single no_nota for all records
        $no_nota = $this->generateNoNota();

        // Access the repeater array
        $repeaterData = $request->input('kt_docs_repeater_basic', []);

        // Loop through the repeater data
        foreach ($repeaterData as $data) {
            $datasave = [
                'tanggal' => $tanggal,
                'kode_barang' => $data['kode_barang'],
                'jumlah' => $data['jumlah'],
                'no_nota' => $no_nota,
                'penerima' => 'UMUM',
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
    public function sendNotification()
    {
        
        $details = [
            'greetings' => 'Halo!',
            'body' => 'This is the email body',
            'actiontext' => 'Link Persetujuan Permintaan Barang',
            'actionurl' => '/',
            'lastline' => 'End of last line',
        ];

        $recipient = 'vpersediaan7312@gmail.com'; // Replace with the actual email address
        Notification::send($recipient, new SendEmailNotification($details));
        
        dd('done');
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
