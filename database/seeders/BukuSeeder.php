<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [ 
            [ 
                'judul' => 'Belajar Laravel', 
                'penerbit' => 'SMK Taruna Bhakti', 
                'pengarang' => 'Bu Miranda', 
                'stok_buku' => 1337
            ]]; 
 
        foreach ($data as $val) { 
            Buku::insert([ 
                'judul' => $val['judul'], 
                'penerbit' => $val['penerbit'], 
                'pengarang' => $val['pengarang'],
                'stok_buku' => $val['stok_buku'] 
            ]); 
        } 
    }
}
