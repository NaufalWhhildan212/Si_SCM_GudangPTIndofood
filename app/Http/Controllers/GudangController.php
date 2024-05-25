<?php

namespace App\Http\Controllers;
use App\Models\gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtGudang = gudang::all();
        return view('Layouts.Gudang.Gudang',compact('dtGudang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layouts.Gudang.Gudang-Entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        gudang::create([
            'Id_Gudang' =>$request->Id_Gudang,
            'Jenis_Gudang' =>$request->Jenis_Gudang,
            'Alamat_Gudang' =>$request->Alamat_Gudang,
            'Harga_Barang' =>$request->Harga_Barang,
            'Id_StokBarang' =>$request->Id_StokBarang,
        ]);
        return redirect ('Gudang')->with('success', 'Data  Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gud = gudang::findorfail($id);
        return view('Layouts.Gudang.Gudang-Edit',compact('gud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gud = gudang::findorfail($id);
        $gud ->update($request->all());
        return redirect ('Gudang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gud = gudang::findorfail($id);
        $gud->delete();
        return back();
    }
    public function downloadpdf()
    {
        $dtCetakGudang = gudang::all();
        $pdf = 'PDF'::loadview('Layouts.Gudang.Gudang-Cetak',compact('dtCetakGudang'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Gudang.pdf');
    }
}
