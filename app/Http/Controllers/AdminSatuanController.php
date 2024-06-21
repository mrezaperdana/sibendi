<?php

namespace App\Http\Controllers;

use App\Models\AdminSatuan;
use Illuminate\Http\Request;

class AdminSatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $result = AdminSatuan::select( 'id','nama_satuan', 'keterangan',)
            ->get();
        // Pass the values to the view
        return view('admins.master-barangs.satuan.index', [
            'satuan' => $result
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
    public function show(AdminSatuan $adminSatuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminSatuan $adminSatuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminSatuan $adminSatuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminSatuan $adminSatuan)
    {
        //
    }
}
