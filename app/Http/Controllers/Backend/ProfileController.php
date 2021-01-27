<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PersadaProfile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $persada = PersadaProfile::where('id', '1')->first();
        return view('backend.profile.index', compact('persada'));
    }

    public function updateProfile(Request $request)
    {
        $persada = PersadaProfile::where('id', '1')->update([
            'profile' => $request->profile
        ]);
        return redirect()->back()->with('success', 'Profile Berhasil Diupdate');
    }

    public function visi()
    {
        $persada = PersadaProfile::where('id', '1')->first();
        return view('backend.profile.visi', compact('persada'));
    }

    public function updateVisi(Request $request)
    {
        $persada = PersadaProfile::where('id', '1')->update([
            'visi' => $request->visi
        ]);
        return redirect()->back()->with('success', 'Visi Berhasil Diupdate');
    }

    public function misi()
    {
        $persada = PersadaProfile::where('id', '1')->first();
        return view('backend.profile.misi', compact('persada'));
    }

    public function updateMisi(Request $request)
    {
        $persada = PersadaProfile::where('id', '1')->update([
            'misi' => $request->misi
        ]);
        return redirect()->back()->with('success', 'Misi Berhasil Diupdate');
    }
}
