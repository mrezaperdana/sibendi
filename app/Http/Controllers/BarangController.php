<?php

namespace App\Imports;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Excel;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use App\Models\AdminSatuan;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Transaksi;
use PhpOffice\PhpWord\TemplateProcessor;

class BarangController extends Controller
{


    // public function generateDocument($kode_barang)
    // {
    //     // Load the template
    //     $templateProcessor = new TemplateProcessor(public_path('assets/template/template.docx'));

    //     // Fetch data from your table
    //     $data = Barang::select('kode_barang', 'nama_barang', 'stok')->get();
    //     $masuk = BarangMasuk::select('kode_barang','qty')->get();
    //     $keluar = BarangKeluar::select('kode_barang','qty')->get();
    //     $rusak = BarangRusak::select('kode_barang','qty')->get();
    //     $transaksi = Transaksi::select('no_nota', 'penerima')
    //     $data = joined of above
    //     // Iterate over the data and add it to the table in the template
    //     $templateProcessor->cloneRow('rowIdentifier', $data->count());

    //     $templateProcessor->setValue("kode_barang#".$kode_barang);
    //     $templateProcessor->setValue("nama_barang#".$data->nama_barang where kode_barang = $kode_barang);
    //     $templateProcessor->setValue("satuan#".$data->satuan where satuan = $data -> satuan where kode_barang = $kode_barang);
    //     $templateProcessor->setValue("halaman#", '1');
    //     $templateProcessor->setValue("kegiatan#", 'IPDS');
    //     $templateProcessor->setValue("tahun#", '2024');
    //     foreach ($data as $index => $item) {
    //         $templateProcessor->setValue("row#".($index + 1), $item->row iteration);
    //         $templateProcessor->setValue("tanggal#".($index + 1), $item->tanggal);
    //         $templateProcessor->setValue("pemesan#".($index + 1), $item->pemesan);
    //         $templateProcessor->setValue("masuk#".($index + 1), $item->masuk);
    //         $templateProcessor->setValue("keluar#".($index + 1), $item->keluar);
    //         $templateProcessor->setValue("stok#".($index + 1), $item->stok);
    //     }

    //     // Save the document to the server
    //     $fileName = 'generated_document.docx';
    //     $templateProcessor->saveAs($fileName);

    //     // Download the document
    //     return response()->download($fileName)->deleteFileAfterSend(true);
    //     return redirect()->route('admins.stocks.stok-barang');
    // }

    public function generateDocument(Request $request)
    {
        @dd($request);
        // Retrieve the 'kode_barang' from the request query parameters
        $kode_barang = $request->query('kode_barang');
    
        // Check if 'kode_barang' is present
        if (!$kode_barang) {
            return response()->json(['error' => 'kode_barang is required'], 400);
        }
    
        // Load the template
        $templateProcessor = new TemplateProcessor(public_path('assets/template/template_cetak_kartu.docx'));
    
        // Fetch and join data
        $data = Barang::select('kode_barang', 'nama_barang', 'stok', 'kode_satuan')
            ->where('kode_barang', $kode_barang)
            ->first();
    
        // Ensure data exists for the provided kode_barang
        if (!$data) {
            return response()->json(['error' => 'No data found for the provided kode_barang'], 404);
        }
    
        $satuan = AdminSatuan::where('kode_satuan', $data->kode_satuan)->first();
        $masuk = BarangMasuk::where('kode_barang', $kode_barang)->sum('qty');
        $keluar = BarangKeluar::where('kode_barang', $kode_barang)->sum('qty');
        $transaksi = Transaksi::select('no_nota', 'penerima', 'tanggal')
            ->where('kode_barang', $kode_barang)
            ->get();
    
        // Populate the template
        $templateProcessor->setValue("kode_barang", $data->kode_barang);
        $templateProcessor->setValue("nama_barang", $data->nama_barang);
        $templateProcessor->setValue("satuan", $satuan->nama_satuan);
        $templateProcessor->setValue("halaman", '1');
        $templateProcessor->setValue("kegiatan", 'IPDS');
        $templateProcessor->setValue("tahun", '2024');
    
        // Assuming you need to iterate over the transactions
        if ($transaksi->count() > 0) {
            $templateProcessor->cloneRow('rowIdentifier', $transaksi->count());
    
            foreach ($transaksi as $index => $item) {
                $templateProcessor->setValue("rowIdentifier#" . ($index + 1), $index + 1);
                $templateProcessor->setValue("tanggal#" . ($index + 1), $item->tanggal);
                $templateProcessor->setValue("pemesan#" . ($index + 1), $item->penerima);
                $templateProcessor->setValue("masuk#" . ($index + 1), $masuk);
                $templateProcessor->setValue("keluar#" . ($index + 1), $keluar);
                $templateProcessor->setValue("stok#" . ($index + 1), $data->stok);
            }
        } else {
            // Handle case where there are no transactions to avoid error in cloneRow
            $templateProcessor->setValue("rowIdentifier#1", '');
            $templateProcessor->setValue("tanggal#1", '');
            $templateProcessor->setValue("pemesan#1", '');
            $templateProcessor->setValue("masuk#1", '');
            $templateProcessor->setValue("keluar#1", '');
            $templateProcessor->setValue("stok#1", '');
        }
    
        // Save the document to the server
        $fileName = 'cetak kartu ' . $data->nama_barang . '.docx';
        $templateProcessor->saveAs($fileName);
    
        // Download the document
        return response()->download($fileName)->deleteFileAfterSend(true);
    }
    


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Barang::join('admin_kategoris', 'admin_kategoris.kode_kategori', '=', 'barangs.kode_kategori')
            ->join('admin_satuans', 'admin_satuans.kode_satuan', '=', 'barangs.kode_satuan')
            ->select('barangs.kode_barang', 'barangs.nama_barang', 'admin_kategoris.nama_kategori', 'admin_satuans.nama_satuan', 'barangs.harga_satuan', 'barangs.stok')
            ->get();

        $select_kategori = $result->unique('nama_kategori');

        // Pass the values to the view
        return view('admins.master-barangs.stok-barang.index', [
            'barang' => $result,
            'select_kategori' => $select_kategori
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admins.stocks.tambah-barang', []);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBarangRequest $request)
    {
        //
        Barang::create($request->validated());

        return redirect()->route('admins.stocks.stok-barang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeExcel(Request $request)
    {
        //


        // Excel::import(new BarangImport(), $request->file('file'));

        return redirect()->route('admins.stocks.stok-barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarangRequest $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
