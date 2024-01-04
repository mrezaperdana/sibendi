<?php
namespace App\Imports;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Imports\BarangImport;
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
        //
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
    
        
        Excel::import(new BarangImport(), $request->file('file'));

        return redirect()->route('w');
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
