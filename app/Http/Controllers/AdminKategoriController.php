<?php

namespace App\Http\Controllers;

use App\Models\AdminKategori;
use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $result = AdminKategori::select( 'id','nama_kategori', 'keterangan',)
            ->get();
        // Pass the values to the view
        return view('admins.master-barangs.kategori.index', [
            'kategori' => $result
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
    public function show(AdminKategori $adminKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminKategori $adminKategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminKategori $adminKategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminKategori $adminKategori)
    {
        //
    }
}
