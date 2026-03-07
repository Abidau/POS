<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1,'user_id' => 1, 'pembeli' => 'Abdul', 'penjualan_kode' => 'P001', 'penjualan_tanggal' => '2023-01-01'],
            ['penjualan_id' => 2, 'user_id' => 2, 'pembeli' => 'Jane', 'penjualan_kode' => 'P002', 'penjualan_tanggal' => '2023-01-02'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Budi', 'penjualan_kode' => 'P003', 'penjualan_tanggal' => '2023-01-03'],
            ['penjualan_id' => 4, 'user_id' => 1, 'pembeli' => 'Bob', 'penjualan_kode' => 'P004', 'penjualan_tanggal' => '2023-01-04'],
            ['penjualan_id' => 5, 'user_id' => 2, 'pembeli' => 'Jarvis', 'penjualan_kode' => 'P005', 'penjualan_tanggal' => '2023-01-05'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'David', 'penjualan_kode' => 'P006', 'penjualan_tanggal' => '2023-01-06'],
            ['penjualan_id' => 7, 'user_id' => 1, 'pembeli' => 'Eve', 'penjualan_kode' => 'P007', 'penjualan_tanggal' => '2023-01-07'],
            ['penjualan_id' => 8, 'user_id' => 2, 'pembeli' => 'Onana', 'penjualan_kode' => 'P008', 'penjualan_tanggal' => '2023-01-08'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Lee', 'penjualan_kode' => 'P009', 'penjualan_tanggal' => '2023-01-09'],
            ['penjualan_id' => 10, 'user_id' => 1, 'pembeli' => 'Lammens', 'penjualan_kode' => 'P010', 'penjualan_tanggal' => '2023-01-10'], 
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
