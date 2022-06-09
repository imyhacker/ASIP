<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Imports\GuruImport;
use App\Imports\SiswaImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function siswa()
    {
        $data_siswa = User::where('role', 'siswa')->get();
        $kelas = Kelas::all();
        return view('Dashboard/Siswa/index', compact('data_siswa', 'kelas'));
    }
    public function tambah_manual(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        $name = $request->name;
        $kelas = $request->kelas;
        $nis = $request->nis;
        $email = $request->email;
        $password = $request->password;
        $foto = $request->foto;


        $file = $request->file('foto');
        if(!is_null($file)){
            $fileName = $file->getClientOriginalName();
            $request->file('foto')->move("foto_profil/", $fileName);
    
            $data = new User;
            $data->name = $name;
            $data->kelas = $kelas;
            $data->nis = $nis;
            $data->email = $email;
            $data->password = Hash::make($password);
            $data->foto = $fileName;
            $data->role = 'siswa';
            $data->save();
    
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        }else{

            $data = new User;
            $data->name = $name;
            $data->kelas = $kelas;
            $data->nis = $nis;
            $data->email = $email;
            $data->password = Hash::make($password);
            $data->role = 'siswa';
            $data->save();
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');

        }
        
    }
    public function tambah_upload(Request $request)
    {
        Excel::import(new SiswaImport, $request->file('file'));
        return redirect()->back()->with('success', 'Data Berhasil Di Upload');
    }
    public function edit_siswa($id)
    {
        $data_siswa = User::find($id);
        $kelas = Kelas::all();
        //dd($data_siswa);
        return view('Dashboard/Siswa/edit', compact('data_siswa', 'kelas'));
    }
    public function update_siswa(Request $request, $id)
    {
        $file = $request->file('foto');
        if(!is_null($file)){
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            
            $fileName = $file->getClientOriginalName();
            $request->file('foto')->move("foto_profil/", $fileName);
    
            $data = User::find($id);
            $data->name = $request->name;
            $data->kelas = $request->kelas;
            $data->nis = $request->nis;
            $data->email = $request->email;
            $data->foto = $fileName;
            $data->role = 'siswa';
            $data->save();
    
            return redirect()->back()->with('success', 'Data Berhasil Diubah');
        }
        else{
            $data = User::find($id);
            $data->name = $request->name;
            $data->kelas = $request->kelas;
            $data->nis = $request->nis;
            $data->email = $request->email;
            $data->role = 'siswa';
            $data->save();
            return redirect()->back()->with('success', 'Data Berhasil Diubah');
        }
    
    }
    public function hapus_foto($id)
    {
        $data = User::find($id);
        $a = $data->update([
            'foto' => NULL
        ]);
        return redirect()->back()->with('success', 'Foto Berhasil Di Hapus');

    }

    public function hapus_siswa($id)
    {
        $data = User::find($id)->delete();
        return redirect()->back()->with('success', 'Data Siswa Berhasil Di Hapus');
    }
    public function tambah_kelas(Request $request)
    {
        $request->validate([
            'kelas' => 'required|unique:kelas'
        ]);
        $data = Kelas::create([
            'kelas' => $request->input('kelas')
        ]);
        return redirect()->back()->with('success', 'Kelas Berhasil Di Tambahkan');
    }



    // GURU

    public function guru()
    {
        $guru = User::where('role', 'guru')->get();
       return view('Dashboard/Guru/index', compact('guru'));
    }
    public function tambah_guru(Request $request)
    {
        
        $tguru = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'guru',
            'jabatan_guru' => $request->jabatan_guru
        ]);
        return redirect()->back()->with('success', 'Guru Baru Berhasil Di Tambahkan');
    }
    public function upload_guru(Request $request)
    {
        
        Excel::import(new GuruImport, $request->file('file'));
        return redirect()->back()->with('success', 'Data Berhasil Di Upload');
    }

    public function hapus_guru($id){
        $tguru = User::find($id)->delete();

        return redirect()->back()->with('success', 'Guru Berhasil Di Hapus');
    }

    public function edit_guru($id)
    {
        $data_guru = User::find($id);
        //dd($data_siswa);
        return view('Dashboard/Guru/edit', compact('data_guru'));
    }
    
    public function update_guru(Request $request, $id)
    {
        $file = $request->file('foto');
        if(!is_null($file)){
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            
            $fileName = $file->getClientOriginalName();
            $request->file('foto')->move("foto_profil/", $fileName);
    
            $data = User::find($id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->foto = $fileName;
            $data->role = 'guru';
            $data->save();
    
            return redirect()->back()->with('success', 'Data Berhasil Diubah');
        }
        else{
            $data = User::find($id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->role = 'guru';
            $data->save();
            return redirect()->back()->with('success', 'Data Berhasil Diubah');
        }
    
    }
}
