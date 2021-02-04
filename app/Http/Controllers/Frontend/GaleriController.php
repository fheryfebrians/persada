<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleriController extends Controller
{
    public function tulangan()
    {
        return view('frontend.galeri.tulangan');
    }

    public function produksi()
    {
        return view('frontend.galeri.produksi');
    }

    public function finishing()
    {
        return view('frontend.galeri.finishing');
    }

    public function utpabrik()
    {
        return view('frontend.galeri.utpabrik');
    }

    public function k3()
    {
        return view('frontend.galeri.k3');
    }
}
