<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['detail_id' => 1, 'penjualan_id' => 1, 'barang_id' => 1, 'harga' => 20000, 'jumlah' => 20],
            ['detail_id' => 2, 'penjualan_id' => 1, 'barang_id' => 2, 'harga' => 30000, 'jumlah' => 30],
            ['detail_id' => 3, 'penjualan_id' => 1, 'barang_id' => 3, 'harga' => 40000, 'jumlah' => 40],
            ['detail_id' => 4, 'penjualan_id' => 2, 'barang_id' => 4, 'harga' => 50000, 'jumlah' => 50],
            ['detail_id' => 5, 'penjualan_id' => 2, 'barang_id' => 5, 'harga' => 60000, 'jumlah' => 60],
            ['detail_id' => 6, 'penjualan_id' => 2, 'barang_id' => 6, 'harga' => 70000, 'jumlah' => 70],
            ['detail_id' => 7, 'penjualan_id' => 3, 'barang_id' => 7, 'harga' => 80000, 'jumlah' => 80],
            ['detail_id' => 8, 'penjualan_id' => 3, 'barang_id' => 8, 'harga' => 90000, 'jumlah' => 90],
            ['detail_id' => 9, 'penjualan_id' => 3, 'barang_id' => 9, 'harga' => 100000, 'jumlah' => 100],
            ['detail_id' => 10, 'penjualan_id' => 4, 'barang_id' => 10, 'harga' => 110000, 'jumlah' => 110],
            ['detail_id' => 11, 'penjualan_id' => 4, 'barang_id' => 11, 'harga' => 120000, 'jumlah' => 120],
            ['detail_id' => 12, 'penjualan_id' => 4, 'barang_id' => 12, 'harga' => 130000, 'jumlah' => 130],
            ['detail_id' => 13, 'penjualan_id' => 5, 'barang_id' => 13, 'harga' => 140000, 'jumlah' => 140],
            ['detail_id' => 14, 'penjualan_id' => 5, 'barang_id' => 14, 'harga' => 150000, 'jumlah' => 150],
            ['detail_id' => 15, 'penjualan_id' => 5, 'barang_id' => 15, 'harga' => 160000, 'jumlah' => 160],
            ['detail_id' => 16, 'penjualan_id' => 6, 'barang_id' => 1, 'harga' => 170000, 'jumlah' => 170],
            ['detail_id' => 17, 'penjualan_id' => 6, 'barang_id' => 2, 'harga' => 180000, 'jumlah' => 180],
            ['detail_id' => 18, 'penjualan_id' => 6, 'barang_id' => 3, 'harga' => 190000, 'jumlah' => 190],
            ['detail_id' => 19, 'penjualan_id' => 7, 'barang_id' => 4, 'harga' => 200000, 'jumlah' => 200],
            ['detail_id' => 20, 'penjualan_id' => 7, 'barang_id' => 5, 'harga' => 210000, 'jumlah' => 210],
            ['detail_id' => 21, 'penjualan_id' => 7, 'barang_id' => 6, 'harga' => 220000, 'jumlah' => 220],
            ['detail_id' => 22, 'penjualan_id' => 8, 'barang_id' => 7, 'harga' => 230000, 'jumlah' => 230],
            ['detail_id' => 23, 'penjualan_id' => 8, 'barang_id' => 8, 'harga' => 240000, 'jumlah' => 240],
            ['detail_id' => 24, 'penjualan_id' => 8, 'barang_id' => 9, 'harga' => 250000, 'jumlah' => 250],
            ['detail_id' => 25, 'penjualan_id' => 9, 'barang_id' => 10, 'harga' => 260000, 'jumlah' => 260],
            ['detail_id' => 26, 'penjualan_id' => 9, 'barang_id' => 11, 'harga' => 270000, 'jumlah' => 270],
            ['detail_id' => 27, 'penjualan_id' => 9, 'barang_id' => 12, 'harga' => 280000, 'jumlah' => 280],
            ['detail_id' => 28, 'penjualan_id' => 10, 'barang_id' => 13, 'harga' => 290000, 'jumlah' => 290],
            ['detail_id' => 29, 'penjualan_id' => 10, 'barang_id' => 14, 'harga' => 300000, 'jumlah' => 300],
            ['detail_id' => 30, 'penjualan_id' => 10, 'barang_id' => 15, 'harga' => 310000, 'jumlah' => 310]
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
