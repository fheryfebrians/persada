<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TentangController extends Controller
{
    public function tulangan()
    {
        return view('frontend.tentang.tulangan');
    }

    public function produksi()
    {
        return view('frontend.tentang.produksi');
    }

    public function finishing()
    {
        return view('frontend.tentang.finishing');
    }

    public function utpabrik()
    {
        return view('frontend.tentang.utpabrik');
    }
}
