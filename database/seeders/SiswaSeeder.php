<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [ 
            [ 
                'nama' => 'rara', 
                'kelas' => 'XI PPLG 2', 
                'role_status' => 'siswa', 
                'email' => 'rara@gmail.com', 
                'password' => Hash::make('12345678'), 
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
