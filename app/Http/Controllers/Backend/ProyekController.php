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
            $slug = uniqid();
            $file = $request->file('foto');
            $name = Str::slug($slug).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->move("storage/proyek/", $name);
            $foto = $name;
        } else {
            $foto = '';
        }

        $proyek = new Proyek();
        $proyek->foto = $foto;
        $proyek->keterangan = $request->keterangan;
        $proyek->save();
        return redirect('admin/proyek')->with('toast_success', 'Proyek Berhasil Ditambah');
    }

    public function delete($id)
    {
        $proyek = Proyek::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Data Proyek Berhasil Dihapus');
    }
}
