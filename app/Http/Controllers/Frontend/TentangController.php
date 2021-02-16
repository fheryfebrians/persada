<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kontak;
use App\Models\Tulangan;
use App\Models\Produksi;
use App\Models\Finishing;
use App\Models\Utpabrik;
use App\Models\PageBanner;

class TentangController extends Controller
{
    public function tulangan()
    {
        $kontak = Kontak::where('id', '1')->first();
        $tulangan = Tulangan::all();
        $banners = PageBanner::where('bidang', 'Tim Tulangan')->get();
        return view('frontend.tentang.tulangan', compact('kontak', 'tulangan', 'banners'));
    }

    public function produksi()
    {
        $kontak = Kontak::where('id', '1')->first();
        $produksi = Produksi::all();
        $banners = PageBanner::where('bidang', 'Tim Produksi')->get();
        return view('frontend.tentang.produksi', compact('kontak', 'produksi', 'banners'));
    }

    public function finishing()
    {
        $kontak = Kontak::where('id', '1')->first();
        $finishing = Finishing::all();
        $banners = PageBanner::where('bidang', 'Tim Finishing')->get();
        return view('frontend.tentang.finishing', compact('kontak', 'finishing', 'banners'));
    }

    public function utpabrik()
    {
        $kontak = Kontak::where('id', '1')->first();
        $utpabrik = Utpabrik::all();
        $banners = PageBanner::where('bidang', 'Tim UtPabrik')->get();
        return view('frontend.tentang.utpabrik', compact('kontak', 'utpabrik', 'banners'));
    }
}
