<?php

namespace App\Http\Controllers;
use App\Models\stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtStok = stok::all();
        return view('Layouts.Stok.Stok',compact('dtStok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layouts.Stok.Stok-Entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        stok::create([
            'Id_Stok_Barang' =>$request->Id_Stok_Barang,
            'Nama_Barang' =>$request->Nama_Barang,
            'Jumlah_Barang' =>$request->Jumlah_Barang,
        ]);
        return redirect ('Stok')->with('success', 'Data  Berhasil Ditambahkan!');
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
        $sto = stok::findorfail($id);
        return view('Layouts.Stok.Stok-Edit',compact('sto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sto = stok::findorfail($id);
        $sto ->update($request->all());
        return redirect ('Stok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sto = stok::findorfail($id);
        $sto->delete();
        return back();
    }
    public function downloadpdf()
    {
        $dtCetakStok = stok::all();
        $pdf = 'PDF'::loadview('Layouts.Stok.Stok-Cetak',compact('dtCetakStok'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Stok.pdf');
    }
}
