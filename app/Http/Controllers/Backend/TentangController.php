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
        return redirect()->back()->with('success', 'Description Berhasil Ditambah');
    }

    public function updateTulangan(Request $request)
    {
        $tentang = Tentang::where('id', '1')->update([
            'tulangan' => $request->tulangan
        ]);
        return redirect()->back()->with('success', 'Tentang Tulangan Berhasil Diupdate');
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
        return redirect()->back()->with('success', 'Description Berhasil Ditambah');
    }

    public function updateProduksi(Request $request)
    {
        $tentang = Tentang::where('id', '1')->update([
            'produksi' => $request->produksi
        ]);
        return redirect()->back()->with('success', 'Tentang Prodiksi Berhasil Diupdate');
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
        return redirect()->back()->with('success', 'Description Berhasil Ditambah');
    }

    public function updateFinishing(Request $request)
    {
        $tentang = Tentang::where('id', '1')->update([
            'finishing' => $request->finishing
        ]);
        return redirect()->back()->with('success', 'Tentang Finishing Berhasil Diupdate');
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
        return redirect()->back()->with('success', 'Description Berhasil Ditambah');
    }

    public function updateUtpabrik(Request $request)
    {
        $tentang = Tentang::where('id', '1')->update([
            'utpabrik' => $request->utpabrik
        ]);
        return redirect()->back()->with('success', 'Tentang Utilitas Pabrik Berhasil Diupdate');
    }
}
