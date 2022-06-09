<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Absen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    //
    public function index()
    {
        
        $cek = Absen::where('name', Auth::user()->name)->whereDate('created_at', Carbon::today())->first();
        if($cek == null){
            $disable = '';
            $pesan = 'Anda Belum Melakukan Presensi';
            $color = 'btn btn-outline-success btn-block';
        }else{
            $disable = 'disabled';
            $pesan = 'Anda Sudah Melakukan Presensi';
            $color = 'btn btn-outline-danger btn-block';
        }
        
        return view('Dashboard/Siswa/attendance/index', compact('cek', 'disable', 'pesan', 'color'));
    }
    public function masuk(Request $request)
    {
        $cek = Absen::where('name', Auth::user()->name)->whereDate('created_at', Carbon::today())->first();
        if($cek == null){
            $file = $request->file('foto');
            $name = $file->getClientOriginalName();
            $path = 'fotoabsensi';
            $file->move($path, $name);
            $data = Absen::create([
                'name' => Auth::user()->name,
                'kelas' => Auth::user()->kelas,
                'foto' => $name,
            ]);
            return redirect()->back()->with('success', 'Data Presensi Hari Ini Sudah Masuk');
        }else{
            return redirect()->back()->with('error', 'Data Presensi Hari Ini Sudah Ada');
        }
    }
}
