<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kontak;
use App\Models\Tulangan;
use App\Models\Produksi;
use App\Models\Finishing;
use App\Models\Utpabrik;

class TentangController extends Controller
{
    public function tulangan()
    {
        $kontak = Kontak::where('id', '1')->first();
        $tulangan = Tulangan::all();
        return view('frontend.tentang.tulangan', compact('kontak', 'tulangan'));
    }

    public function produksi()
    {
        $kontak = Kontak::where('id', '1')->first();
        $produksi = Produksi::all();
        return view('frontend.tentang.produksi', compact('kontak', 'produksi'));
    }

    public function finishing()
    {
        $kontak = Kontak::where('id', '1')->first();
        $finishing = Finishing::all();
        return view('frontend.tentang.finishing', compact('kontak', 'finishing'));
    }

    public function utpabrik()
    {
        $kontak = Kontak::where('id', '1')->first();
        $utpabrik = Utpabrik::all();
        return view('frontend.tentang.utpabrik', compact('kontak', 'utpabrik'));
    }
}
