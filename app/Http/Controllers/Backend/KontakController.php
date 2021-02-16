<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kontak = Kontak::where('id', '1')->first();
        return view('backend.kontak.index', compact('kontak'));
    }

    public function updateKontak(Request $request)
    {
        if($request->plant == ""){
            $plant = $request->plant2;
        }else{
            $plant = $request->plant;
        }

        if($request->alamat == ""){
            $alamat = $request->alamat2;
        }else{
            $alamat = $request->alamat;
        }

        $kontak = Kontak::where('id', '1')->update([
            'plant' => $plant,
            'alamat' => $alamat,
            'telepon' => $request->telepon,
            'fax' => $request->fax,
            'email' => $request->email
        ]);
        return redirect()->back()->with('success', 'Kontak Berhasil Diupdate');
    }
}
