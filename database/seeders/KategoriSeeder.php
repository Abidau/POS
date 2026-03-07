<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            ['kategori_id' => '1', 'kategori_kode' => 'AA1', 'kategori_nama' => 'Barang A'],
            ['kategori_id' => '2', 'kategori_kode' => 'AA2', 'kategori_nama' => 'Barang B'],
            ['kategori_id' => '3', 'kategori_kode' => 'AA3', 'kategori_nama' => 'Barang C'],
            ['kategori_id' => '4', 'kategori_kode' => 'AA4', 'kategori_nama' => 'Barang D'],
            ['kategori_id' => '5', 'kategori_kode' => 'AA5', 'kategori_nama' => 'Barang E']
        ];

        DB::table('m_kategori')->insert($kategori);
    }
}

