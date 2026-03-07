<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            //Kategori 1
                ['barang_id' => '1', 'kategori_id' => '1', 'barang_kode' => 'Brg1', 'barang_nama' => 'TV', 'harga_beli' => 10000, 'harga_jual' => 20000],
                ['barang_id' => '2', 'kategori_id' => '1', 'barang_kode' => 'Brg2', 'barang_nama' => 'kasur', 'harga_beli' => 15000, 'harga_jual' => 25000],
                ['barang_id' => '3', 'kategori_id' => '1', 'barang_kode' => 'Brg3', 'barang_nama' => 'lemari', 'harga_beli' => 20000, 'harga_jual' => 30000],

            //Kategori 2
                ['barang_id' => '4', 'kategori_id' => '2', 'barang_kode' => 'Brg4', 'barang_nama' => 'komputer', 'harga_beli' => 15000, 'harga_jual' => 25000],
                ['barang_id' => '5', 'kategori_id' => '2', 'barang_kode' => 'Brg5', 'barang_nama' => 'printer', 'harga_beli' => 20000, 'harga_jual' => 30000],
                ['barang_id' => '6', 'kategori_id' => '2', 'barang_kode' => 'Brg6', 'barang_nama' => 'laptop', 'harga_beli' => 25000, 'harga_jual' => 35000],

            //Kategori 3
                ['barang_id' => '7', 'kategori_id' => '3', 'barang_kode' => 'Brg7', 'barang_nama' => 'kulkas', 'harga_beli' => 20000, 'harga_jual' => 30000],
                ['barang_id' => '8', 'kategori_id' => '3', 'barang_kode' => 'Brg8', 'barang_nama' => 'ac', 'harga_beli' => 25000, 'harga_jual' => 35000],
                ['barang_id' => '9', 'kategori_id' => '3', 'barang_kode' => 'Brg9', 'barang_nama' => 'dispenser', 'harga_beli' => 30000, 'harga_jual' => 40000],
            
            //Kategori 4
                ['barang_id' => '10', 'kategori_id' => '4', 'barang_kode' => 'Brg10', 'barang_nama' => 'hp', 'harga_beli' => 25000, 'harga_jual' => 35000],
                ['barang_id' => '11', 'kategori_id' => '4', 'barang_kode' => 'Brg11', 'barang_nama' => 'tablet', 'harga_beli' => 30000, 'harga_jual' => 40000],
                ['barang_id' => '12', 'kategori_id' => '4', 'barang_kode' => 'Brg12', 'barang_nama' => 'smartwatch', 'harga_beli' => 35000, 'harga_jual' => 45000],

            //Kategori 5
                ['barang_id' => '13', 'kategori_id' => '5', 'barang_kode' => 'Brg13', 'barang_nama' => 'mesin cuci', 'harga_beli' => 30000, 'harga_jual' => 40000],
                ['barang_id' => '14', 'kategori_id' => '5', 'barang_kode' => 'Brg14', 'barang_nama' => 'setrika', 'harga_beli' => 35000, 'harga_jual' => 45000],
                ['barang_id' => '15', 'kategori_id' => '5', 'barang_kode' => 'Brg15', 'barang_nama' => 'vacuum cleaner', 'harga_beli' => 40000, 'harga_jual' => 50000]
        ];
        DB::table('m_barang')->insert($data);
    }
}
