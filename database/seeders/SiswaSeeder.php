<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [ 
            [ 
                'nama' => 'yono', 
                'kelas' => 'XI PPLG 2', 
                'role_status' => 'siswa', 
                'email' => 'yono@gmail.com', 
                'password' => Hash::make('yono12345 '), 
            ] 
        ]; 
        foreach ($data as $val) {
            Siswa::insert([ 
                'nama' => $val['nama'], 
                'kelas' => $val['kelas'], 
                'role_status' => $val['role_status'], 
                'email' => $val['email'], 
                'password' => $val['password'], 
            ]); 
        } 
    }
}
