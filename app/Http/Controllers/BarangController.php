<?php
namespace App\Imports;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Barang;
use Excel;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $result = Barang::join('admin_kategoris', 'admin_kategoris.kode_kategori', '=', 'barangs.kode_kategori')
        ->join('admin_satuans', 'admin_satuans.kode_satuan', '=', 'barangs.kode_satuan')
        ->select('barangs.kode_barang','barangs.nama_barang', 'admin_kategoris.nama_kategori', 'admin_satuans.nama_satuan', 'barangs.harga_satuan', 'barangs.stok')
        ->get();

    // Pass the values to the view
    return view('admins.master-barangs.stok-barang', [
        'barang' => $result
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
