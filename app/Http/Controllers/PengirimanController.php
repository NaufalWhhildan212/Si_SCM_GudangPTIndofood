<?php

namespace App\Http\Controllers;
use App\Models\Pengiriman;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPengiriman = pengiriman::all();
        return view('Layouts.Pengiriman.Pengiriman',compact('dtPengiriman'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layouts.Pengiriman.Pengiriman-Entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pengiriman::create([
            'Id_Pengiriman' =>$request->Id_Pengiriman,
            'Berat_Muatan' =>$request->Berat_Muatan,
            'Id_Truk' =>$request->Id_Truk,
            'Id_Pegawai' =>$request->Id_Pegawai,
            'Id_Barang' =>$request->Id_Barang,
            'Id_Jadwal' =>$request->Id_Jadwal,
            'Id_Rute' =>$request->Id_Rute,
            'Id_Supir' =>$request->Id_Supir,
        ]);
        return redirect ('Pengiriman')->with('success', 'Data  Berhasil Ditambahkan!');
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
        $pen = pengiriman::findorfail($id);
        return view('Layouts.Pengiriman.Pengiriman-Edit',compact('pen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pen = pengiriman::findorfail($id);
        $pen ->update($request->all());
        return redirect ('Pengiriman');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pen = pengiriman::findorfail($id);
        $pen->delete();
        return back();
    }
    public function downloadpdf()
    {
    $dtCetakPengiriman = pengiriman::all();
        $pdf = 'PDF'::loadview('Layouts.Pengiriman.Pengiriman-Cetak',compact('dtCetakPengiriman'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Pengiriman.pdf');
    }
}
