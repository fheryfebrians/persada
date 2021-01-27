<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Proyek;
use Illuminate\Support\Str;

class ProyekController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $proyeks = Proyek::paginate(10);
        return view('backend.proyek.index', compact('proyeks'));
    }
    
    public function create()
    {
        return view('backend.proyek.create');
    }

    public function postCreate(Request $request)
    {
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $name = Str::slug($request->keterangan).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->move("storage/proyek/", $name);
            $foto = $name;
        } else {
            $foto = '';
        }

        $proyek = new Proyek();
        $proyek->foto = $foto;
        $proyek->keterangan = $request->keterangan;
        $proyek->save();
        return redirect('admin/proyek')->with('success', 'Proyek Berhasil Ditambah');
    }
}
