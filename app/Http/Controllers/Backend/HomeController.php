<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Proyek;
use App\Models\Bantuan;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::count();
        $proyek = Proyek::count();
        $bantuan = Bantuan::count();
        return view('backend.home', compact('user', 'proyek', 'bantuan'));
    }
}
