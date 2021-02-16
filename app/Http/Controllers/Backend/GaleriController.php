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
            $slug = Uniqid();
            $file = $request->file('foto');
            $name = Str::slug($slug).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->move("storage/galeri/", $name);
            $foto = $name;
        } else {
            $foto = '';
        }

        $galeri = new Galeri();
        $galeri->bidang = $request->bidang;
        $galeri->foto = $foto;
        $galeri->keterangan = $request->keterangan;
        $galeri->save();
        return redirect('admin/galeri')->with('toast_success', 'Galeri Berhasil Ditambah');
    }

    public function delete($id)
    {
        $galeri = Galeri::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Data Galeri Berhasil Dihapus');
    }
}
