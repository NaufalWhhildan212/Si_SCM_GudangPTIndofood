<?php

namespace App\Http\Controllers;
use App\Models\jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtJadwal = jadwal::all();
        return view('Layouts.Jadwal.Jadwal',compact('dtJadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layouts.Jadwal.Jadwal-Entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         jadwal::create([
            'Id_Jadwal' =>$request->Id_Jadwal,
            'Id_Pengiriman' =>$request->Id_Pengiriman,
            'Jumlah_Barang' =>$request->Jumlah_Barang,
            'Lokasi' =>$request->Lokasi,
        ]);
        return redirect ('Jadwal')->with('success', 'Data  Berhasil Ditambahkan!');
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
        $jad = jadwal::findorfail($id);
        return view('Layouts.Jadwal.Jadwal-Edit',compact('jad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jad = jadwal::findorfail($id);
        $jad ->update($request->all());
        return redirect ('Jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jad = jadwal::findorfail($id);
        $jad->delete();
        return back();
    }
    public function downloadpdf()
    {
        $dtCetakJadwal = jadwal::all();
        $pdf = 'PDF'::loadview('Layouts.Jadwal.Jadwal-Cetak',compact('dtCetakJadwal'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Jadwal.pdf');
    }
}
