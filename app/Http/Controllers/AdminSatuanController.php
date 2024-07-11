<?php

namespace App\Http\Controllers;

use App\Models\AdminSatuan;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class AdminSatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $result = AdminSatuan::select('kode_satuan', 'nama_satuan', 'keterangan',)
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
        return view('admins.master-barangs.satuan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'nullable|max:255',
            'nama_satuan' => 'required|max:255|unique:admin_satuans,nama_satuan',
        ]);

        AdminSatuan::create($request->only('keterangan', 'nama_satuan'));

        return redirect()->route('admin.satuan.index')->with('success', 'Satuan berhasil ditambahkan!');
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

    public function edit($kode_satuan)
    {
        $satuan = AdminSatuan::find($kode_satuan);
        return view('admins.master-barangs.satuan.edit', compact('satuan'));
    }


    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $kode_satuan)
    {
        try {
            $request->validate([
                'keterangan' => 'nullable|max:255',
                'nama_satuan' => 'required|max:255|unique:admin_satuans,nama_satuan,' . $kode_satuan . ',kode_satuan',
            ]);

            $satuan = AdminSatuan::find($kode_satuan);
            $satuan->update($request->only('keterangan', 'nama_satuan'));

            return redirect()->route('admin.satuan.index')->with('success', 'Satuan berhasil diupdate!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput()->with('nama_satuan_exists', true);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kode_satuan)
    {
        $satuan = AdminSatuan::find($kode_satuan);
        if ($satuan) {
            $satuan->delete();
            return redirect()->route('admin.satuan.index')->with('success', 'Satuan deleted successfully');
        } else {
            return redirect()->route('admin.satuan.index')->with('error', 'Satuan not found');
        }
    }
    
}
