<?php

namespace App\Http\Controllers;
use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtBarang = barang::all();
        return view('Layouts.Barang.Barang',compact('dtBarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layouts.Barang.Barang-Entry'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        barang::create([
            'Id_Barang' =>$request->Id_Barang,
            'Nama_Barang' =>$request->Nama_Barang,
            'Harga_Barang' =>$request->Harga_Barang,
            'Berat_Barang' =>$request->Berat_Barang,
            'Id_Gudang' =>$request->Id_Gudang,
        ]);
        return redirect ('Barang')->with('success', 'Data  Berhasil Ditambahkan!');
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
        $bar = barang::findorfail($id);
        return view('Layouts.Barang.Barang-Edit',compact('bar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bar = barang::findorfail($id);
        $bar ->update($request->all());
        return redirect ('Barang');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bar = barang::findorfail($id);
        $bar->delete();
        return back();
    }
    public function downloadpdf()
    {
        $dtCetakBarang = barang::all();
        $pdf = 'PDF'::loadview('Layouts.Barang.Barang-Cetak',compact('dtCetakBarang'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Barang.pdf');
    }
}
