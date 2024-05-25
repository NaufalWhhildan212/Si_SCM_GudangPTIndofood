<?php

namespace App\Http\Controllers;
use App\Models\outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtOutlet = outlet::all();
        return view('Layouts.Outlet.Outlet',compact('dtOutlet'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layouts.Outlet.Outlet-Entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        outlet::create([
            'Id_Outlet' =>$request->Id_Outlet,
            'Nama_Outlet' =>$request->Nama_Outlet,
            'Alamat_Outlet' =>$request->Alamat_Outlet,
            'No_Telepon' =>$request->No_Telepon,
            'Id_Barang' =>$request->Id_Barang,
        ]);
        return redirect ('Outlet')->with('success', 'Data  Berhasil Ditambahkan!');
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
        $out = outlet::findorfail($id);
        return view('Layouts.Outlet.Outlet-Edit',compact('out'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $out = outlet::findorfail($id);
        $out ->update($request->all());
        return redirect ('Outlet');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $out = outlet::findorfail($id);
        $out->delete();
        return back();
    }
    public function downloadpdf()
    {
        $dtCetakOutlet = outlet::all();
        $pdf = 'PDF'::loadview('Layouts.Outlet.Outlet-Cetak',compact('dtCetakOutlet'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Outlet.pdf');
    }
}
