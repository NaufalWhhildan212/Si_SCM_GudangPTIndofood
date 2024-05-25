<?php

namespace App\Http\Controllers;
use App\Models\truk;
use Illuminate\Http\Request;

class TrukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtTruk = truk::all();
        return view('Layouts.Truk.Truk',compact('dtTruk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layouts.Truk.Truk-Entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        truk::create([
            'Id_Truk' =>$request->Id_Truk,
            'Merek_Truk' =>$request->Merek_Truk,
            'No_Polisi' =>$request->No_Polisi,
            'Berat_Muatan' =>$request->Berat_Muatan,
        ]);
        return redirect ('Truk')->with('success', 'Data  Berhasil Ditambahkan!');
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
        $tru = truk::findorfail($id);
        return view('Layouts.Truk.Truk-Edit',compact('tru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tru = truk::findorfail($id);
        $tru ->update($request->all());
        return redirect ('Truk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tru = truk::findorfail($id);
        $tru->delete();
        return back();
    }
    public function downloadpdf()
    {
        $dtCetakTruk = truk::all();
        $pdf = 'PDF'::loadview('Layouts.Truk.Truk-Cetak',compact('dtCetakTruk'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Truk.pdf');
    }
}
