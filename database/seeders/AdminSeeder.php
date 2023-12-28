<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [ 
            [ 
                'name' => 'Aila', 
                'role_status' => 'admin', 
                'email' => 'Aila@gmail.com', 
                'password' => Hash::make('aila1234'), 
            ] 
        ]; 
 
        foreach ($data as $val) { 
            User::insert([ 
                'name' => $val['name'], 
                'role_status' => $val['role_status'], 
                'email' => $val['email'], 
                'password' => $val['password'], 
            ]); 
        } 
    }
}
