<?php

namespace App\Http\Controllers;
use App\Models\supir;
use Illuminate\Http\Request;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtSupir = supir::all();
        return view('Layouts.Supir.Supir',compact('dtSupir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layouts.Supir.Supir-Entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        supir::create([
            'Id_Supir' =>$request->Id_Supir,
            'Nama_Supir' =>$request->Nama_Supir,
            'Alamat' =>$request->Alamat,
            'No_Telepon' =>$request->No_Telepon,
            'Id_Pegawai' =>$request->Id_Pegawai,
        ]);
        return redirect ('Supir')->with('success', 'Data  Berhasil Ditambahkan!');
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
        $sup = supir::findorfail($id);
        return view('Layouts.Supir.Supir-Edit',compact('sup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sup = supir::findorfail($id);
        $sup ->update($request->all());
        return redirect ('Supir');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sup = supir::findorfail($id);
        $sup->delete();
        return back();
    }
    public function downloadpdf()
    {
        $dtCetakSupir = supir::all();
        $pdf = 'PDF'::loadview('Layouts.Supir.Supir-Cetak',compact('dtCetakSupir'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Supir.pdf');
    }
}
