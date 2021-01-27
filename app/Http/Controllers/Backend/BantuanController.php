<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bantuan;

class BantuanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $bantuans = Bantuan::paginate(10);
        return view('backend.bantuan.index', compact('bantuans'));
    }
}
