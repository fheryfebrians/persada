<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PersadaProfile;
use App\Models\PersadaMisi;
use App\Models\Kontak;
use App\Models\Galeri;
use App\Models\Proyek;
use Carbon\Carbon;
use App\Models\Bantuan;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index()
    {
        $profiles = PersadaProfile::where('id', '1')->first();
        $misis = PersadaMisi::all();
        $kontak = Kontak::where('id', '1')->first();
        $tulangan = Galeri::where('bidang', 'Tim Tulangan')->get();
        $produksi = Galeri::where('bidang', 'Tim Produksi')->get();
        $finishing = Galeri::where('bidang', 'Tim Finishing')->get();
        $utilitas = Galeri::where('bidang', 'Tim Utilitas Pabrik')->get();
        $k3 = Galeri::where('bidang', 'K3')->get();
        $proyek = Proyek::all();
        $banners = Banner::all();
        return view('frontend.home', compact('profiles', 'misis', 'kontak', 'tulangan', 'produksi', 'finishing', 'utilitas', 'k3', 'proyek', 'banners'));
    }

    public function addKontak(Request $request)
    {
        $tgl = Carbon::now();
        $slug = uniqid();
        $bantuan = new Bantuan();
        $bantuan->slug = $slug;
        $bantuan->nama = $request['nama'];
        $bantuan->email = $request['email'];
        $bantuan->deskripsi = $request['deskripsi'];
        $bantuan->tanggal = $tgl;
        $bantuan->save();
        return redirect()->back()->with('success', 'Pesan anda telah terkirim');
    }

    public function proyek()
    {
        $proyek = Proyek::all();
        $kontak = Kontak::where('id', '1')->first();
        return view('frontend.proyek.index', compact('proyek', 'kontak'));
    }
}
