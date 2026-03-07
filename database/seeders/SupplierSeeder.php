<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'Sup1', 'supplier_nama' => 'Supplier A', 'supplier_alamat' => 'Alamat Supplier A'],
            ['supplier_id' => 2, 'supplier_kode' => 'Sup2', 'supplier_nama' => 'Supplier B', 'supplier_alamat' => 'Alamat Supplier B'],
            ['supplier_id' => 3, 'supplier_kode' => 'Sup3', 'supplier_nama' => 'Supplier C', 'supplier_alamat' => 'Alamat Supplier C'],
            ['supplier_id' => 4, 'supplier_kode' => 'Sup4', 'supplier_nama' => 'Supplier D', 'supplier_alamat' => 'Alamat Supplier D'],
            ['supplier_id' => 5, 'supplier_kode' => 'Sup5', 'supplier_nama' => 'Supplier E', 'supplier_alamat' => 'Alamat Supplier E']
         ];
        DB::table('m_supplier')->insert($data);
    }
}
