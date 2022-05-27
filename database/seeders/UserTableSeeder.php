<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    

        User::create([
            'name' => 'arikun',
            'email' => 'arikun@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'guru'
        ]);

        User::create([
            'name' => 'tasya',
            'email' => 'tasya@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'siswa'
        ]);
    }
}
