<?php

namespace App\Http\Controllers;
use App\Models\rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtRute = rute::all();
        return view('Layouts.Rute.Rute',compact('dtRute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layouts.Rute.Rute-Entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        rute::create([
            'Id_Rute' =>$request->Id_Rute,
            'Jarak' =>$request->Jarak,
            'Id_Pengiriman' =>$request->Id_Pengiriman,
        ]);
        return redirect ('Rute')->with('success', 'Data  Berhasil Ditambahkan!');
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
        $rut = rute::findorfail($id);
        return view('Layouts.Rute.Rute-Edit',compact('rut'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rut = rute::findorfail($id);
        $rut ->update($request->all());
        return redirect ('Rute');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rut = rute::findorfail($id);
        $rut->delete();
        return back();
    }
    public function downloadpdf()
    {
        $dtCetakRute = rute::all();
        $pdf = 'PDF'::loadview('Layouts.Rute.Rute-Cetak',compact('dtCetakRute'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Rute.pdf');
    }
    
}
