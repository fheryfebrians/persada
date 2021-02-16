<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\PageBanner;

class PageBannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $banners = PageBanner::paginate(10);
        return view('backend.pagebanner.index', compact('banners'));
    }

    public function create(Request $request)
    {
        if($request->hasFile('foto')) {
            $slug = uniqid();
            $file = $request->file('foto');
            $name = Str::slug($slug).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->move("storage/pagebanner/", $name);
            $foto = $name;
        } else {
            $foto = '';
        }

        $banner = new PageBanner();
        $banner->bidang = $request['bidang'];
        $banner->foto = $foto;
        $banner->save();
        return redirect()->back()->with('toast_success', 'Banner Berhasil Ditambah');
    }

    public function delete($id)
    {
        $banner = PageBanner::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Data Banner Berhasil Dihapus');
    }
}
