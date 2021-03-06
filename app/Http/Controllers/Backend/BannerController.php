<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $banners = Banner::paginate(10);
        return view('backend.banner.index', compact('banners'));
    }

    public function create(Request $request)
    {
        if($request->hasFile('foto')) {
            $slug = uniqid();
            $file = $request->file('foto');
            $name = Str::slug($slug).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->move("storage/banner/", $name);
            $foto = $name;
        } else {
            $foto = '';
        }

        $banner = new Banner();
        $banner->banner = $foto;
        $banner->save();
        return redirect()->back()->with('toast_success', 'Banner Berhasil Ditambah');
    }

    public function delete($id)
    {
        $banner = Banner::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Data Banner Berhasil Dihapus');
    }

}
