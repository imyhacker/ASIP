<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function siswa()
    {
        $data_siswa = User::where('role', 'siswa')->get();
        return view('Dashboard/Siswa/index', compact('data_siswa'));
    }
}
