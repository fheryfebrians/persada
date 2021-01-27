<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(10);
        return view('backend.admin.index', compact('users'));
    }

    public function create()
    {
        return view('backend.admin.create');
    }

    public function postCreate(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('admin/new')->with('success', 'Admin Berhasil Ditambah');
    }
}
