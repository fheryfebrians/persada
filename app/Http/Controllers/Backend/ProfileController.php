<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PersadaProfile;
use App\Models\PersadaMisi;

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
        return redirect()->back()->with('toast_success', 'Profile Berhasil Diupdate');
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
        return redirect()->back()->with('toast_success', 'Visi Berhasil Diupdate');
    }

    public function misi()
    {
        $misis = PersadaMisi::paginate(10);
        return view('backend.profile.misi', compact('misis'));
    }

    public function addMisi(Request $request)
    {
        $misi = new PersadaMisi();
        $misi->misi = $request['misi'];
        $misi->save();
        return redirect()->back()->with('toast_success', 'Misi Berhasil Ditambah');
    }

    public function deleteMisi($id)
    {
        $misi = PersadaMisi::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Misi Berhasil Dihapus');
    }
}
