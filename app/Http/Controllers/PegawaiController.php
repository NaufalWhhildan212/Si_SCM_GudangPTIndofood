<?php

namespace App\Http\Controllers;
use App\Models\pegawai;
use Illuminate\Http\Request;
class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPegawai = pegawai::all();
        return view('Layouts.Pegawai.Pegawai',compact('dtPegawai'));
    }

    public function downloadpdf()
    {
        $dtCetakPegawai = pegawai::all();
        $pdf = 'PDF'::loadview('Layouts.Pegawai.Pegawai-Cetak',compact('dtCetakPegawai'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Pegawai.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layouts.Pegawai.Pegawai-Entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        pegawai::create([
            'Id_Pegawai' =>$request->Id_Pegawai,
            'Nama_Pegawai' =>$request->Nama_Pegawai,
            'Alamat' =>$request->Alamat,
            'No_Telepon' =>$request->No_Telepon,
            'Id_Supir' =>$request->Id_Supir,
        ]);
        return redirect ('Pegawai')->with('success', 'Data  Berhasil Ditambahkan!');
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
        $peg = pegawai::findorfail($id);
        return view('Layouts.Pegawai.Pegawai-Edit',compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peg = pegawai::findorfail($id);
        $peg ->update($request->all());
        return redirect ('Pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peg = pegawai::findorfail($id);
        $peg->delete();
        return back();
    }
}
