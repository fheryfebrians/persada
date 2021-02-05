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
        $kontak = Kontak::where('id', '1')->update([
            'plant' => $request->plant,
            'alamat' => $request->alamat,
            'telepon' => $request->alamat,
            'fax' => $request->fax,
            'email' => $request->email
        ]);
        return redirect()->back()->with('success', 'Kontak Berhasil Diupdate');
    }
}
