<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'     => $row[0],
            'kelas'    => $row[1],
            'nis'      => $row[2],
            'email'    => $row[3],
            'password' => Hash::make($row[4]),
            'role'     => 'siswa',    
        ]);
    }
}
