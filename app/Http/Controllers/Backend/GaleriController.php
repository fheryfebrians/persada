<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }   

    public function index()
    {
        $galeris = Galeri::paginate(10);
        return view('backend.galeri.index', compact('galeris'));
    }
    
    public function create()
    {
        return view('backend.galeri.create');
    }

    public function postCreate(Request $request)
    {
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $name = Str::slug($request->keterangan).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->move("storage/galeri/", $name);
            $foto = $name;
        } else {
            $foto = '';
        }

        $galeri = new Galeri();
        $galeri->foto = $foto;
        $galeri->keterangan = $request->keterangan;
        $galeri->save();
        return redirect('admin/galeri')->with('success', 'Galeri Berhasil Ditambah');
    }
}
