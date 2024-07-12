<?php

namespace App\Http\Controllers;

use App\Models\AdminKategori;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function index()
     {
         //
         $result = Adminkategori::select('kode_kategori', 'nama_kategori', 'keterangan',)
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
         return view('admins.master-barangs.kategori.create');
     }
 
     /**
      * Store a newly created resource in storage.
      */
     public function store(Request $request)
     {
         $request->validate([
             'keterangan' => 'nullable|max:255',
             'nama_kategori' => 'required|max:255|unique:admin_kategoris,nama_kategori',
         ]);
 
         Adminkategori::create($request->only('keterangan', 'nama_kategori'));
 
         return redirect()->route('admin.kategori.index')->with('success', 'kategori berhasil ditambahkan!');
     }
 
     /**
      * Display the specified resource.
      */
     public function show(Adminkategori $adminkategori)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      */
 
     public function edit($kode_kategori)
     {
         $kategori = Adminkategori::find($kode_kategori);
         return view('admins.master-barangs.kategori.edit', compact('kategori'));
     }
 
 
     /**
      * Update the specified resource in storage.
      */
 
     public function update(Request $request, $kode_kategori)
     {
         try {
             $request->validate([
                 'keterangan' => 'nullable|max:255',
                 'nama_kategori' => 'required|max:255|unique:admin_kategoris,nama_kategori,' . $kode_kategori . ',kode_kategori',
             ]);
 
             $kategori = Adminkategori::find($kode_kategori);
             $kategori->update($request->only('keterangan', 'nama_kategori'));
 
             return redirect()->route('admin.kategori.index')->with('success', 'kategori berhasil diupdate!');
         } catch (ValidationException $e) {
             return redirect()->back()->withErrors($e->validator)->withInput()->with('nama_kategori_exists', true);
         }
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function destroy($kode_kategori)
     {
         $kategori = Adminkategori::find($kode_kategori);
         if ($kategori) {
             $kategori->delete();
             return redirect()->route('admin.kategori.index')->with('success', 'kategori deleted successfully');
         } else {
             return redirect()->route('admin.kategori.index')->with('error', 'kategori not found');
         }
     }
}
