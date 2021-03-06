<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kontak;
use App\Models\Galeri;
use App\Models\PageBanner;

class GaleriController extends Controller
{
    public function tulangan()
    {
        $kontak = Kontak::where('id', '1')->first();
        $tulangan = Galeri::where('bidang', 'Tim Tulangan')->get();
        $banners = PageBanner::where('bidang', 'Tim Tulangan')->get();
        return view('frontend.galeri.tulangan', compact('kontak', 'tulangan', 'banners'));
    }

    public function produksi()
    {
        $kontak = Kontak::where('id', '1')->first();
        $produksi = Galeri::where('bidang', 'Tim Produksi')->get();
        $banners = PageBanner::where('bidang', 'Tim Produksi')->get();
        return view('frontend.galeri.produksi', compact('kontak', 'produksi', 'banners'));
    }

    public function finishing()
    {
        $kontak = Kontak::where('id', '1')->first();
        $finishing = Galeri::where('bidang', 'Tim Finishing')->get();
        $banners = PageBanner::where('bidang', 'Tim Finishing')->get();
        return view('frontend.galeri.finishing', compact('kontak', 'finishing', 'banners'));
    }

    public function utpabrik()
    {
        $kontak = Kontak::where('id', '1')->first();
        $utilitas = Galeri::where('bidang', 'Tim Utilitas Pabrik')->get();
        $banners = PageBanner::where('bidang', 'Tim UtPabrik')->get();
        return view('frontend.galeri.utpabrik', compact('kontak', 'utilitas'));
    }

    public function k3()
    {
        $kontak = Kontak::where('id', '1')->first();
        $k3 = Galeri::where('bidang', 'K3')->get();
        return view('frontend.galeri.k3', compact('kontak', 'k3'));
    }
}
