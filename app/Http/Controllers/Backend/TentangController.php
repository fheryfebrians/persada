<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tulangan;
use App\Models\Produksi;
use App\Models\Finishing;
use App\Models\Utpabrik;

class TentangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tulangan()
    {
        $tulangans = Tulangan::paginate(10);
        return view('backend.tentang.tulangan', compact('tulangans'));
    }

    public function addTulangan(Request $request)
    {   
        $tulangan = new Tulangan();
        $tulangan->description = $request['description'];
        $tulangan->save();
        return redirect()->back()->with('toast_success', 'Data Tulangan Berhasil Ditambah');
    }


    public function deleteTulangan($id)
    {
        $tulangan = Tulangan::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Data Tulangan Berhasil Dihapus');
    }

    public function produksi()
    {
        $produksis = Produksi::paginate(10);
        return view('backend.tentang.produksi', compact('produksis'));
    }

    public function addProduksi(Request $request)
    {   
        $produksi = new Produksi();
        $produksi->description = $request['description'];
        $produksi->save();
        return redirect()->back()->with('toast_success', 'Data Produksi Berhasil Ditambah');
    }

    public function deleteProduksi($id)
    {
        $produksi = Produksi::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Data Produksi Berhasil Dihapus');
    }

    public function finishing()
    {
        $finishings = Finishing::paginate(10);
        return view('backend.tentang.finishing', compact('finishings'));
    }

    public function addFinishing(Request $request)
    {   
        $finishing = new Finishing();
        $finishing->description = $request['description'];
        $finishing->save();
        return redirect()->back()->with('toast_success', 'Data Finishing Berhasil Ditambah');
    }

    public function deleteFinishing($id)
    {
        $finishing = Finishing::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Data Finishing Berhasil Dihapus');
    }

    public function utpabrik()
    {
        $utpabriks = Utpabrik::paginate(10);
        return view('backend.tentang.utpabrik', compact('utpabriks'));
    }

    public function addUtpabrik(Request $request)
    {   
        $utpabrik = new Utpabrik();
        $utpabrik->description = $request['description'];
        $utpabrik->save();
        return redirect()->back()->with('toast_success', 'Data Ut Pabrik Berhasil Ditambah');
    }

    public function deleteUtpabrik($id)
    {
        $utpabrik = Utpabrik::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Data Utpabrik Berhasil Dihapus');
    }

}
