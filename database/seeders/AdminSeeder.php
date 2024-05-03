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
                'name' => 'asep', 
                'role_status' => 'admin', 
                'email' => 'asep@gmail.com', 
                'password' => Hash::make('asep12345'), 
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
