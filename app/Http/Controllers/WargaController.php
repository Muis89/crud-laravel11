<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wargas = \App\Models\Warga::orderBy('id','desc')->Paginate(5);
        return view('Warga.index', compact('wargas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('warga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $warga = new Warga();
        $warga->nama = $request->nama;
        $warga->alamat = $request->alamat;
        $warga->umur = $request->umur;
        $warga->save();
        return redirect()->route('warga.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $warga = Warga::findOrFail($id); // Mengambil data siswa berdasarkan ID
    return view('warga.show', compact('warga')); // Mengembalikan tampilan show dengan data siswa
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $warga = Warga::find($id);
        return view ('warga.edit', compact('warga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $warga = Warga::find($id);
        $warga->nama = $request->nama;
        $warga->alamat = $request->alamat;
        $warga->umur = $request->umur;
        $warga->save();
        return redirect()->route('warga.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $warga = Warga::find($id);
        $warga->delete();
        return redirect()->route('warga.index');
    }
}
