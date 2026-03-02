<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['suplier_id' => 1, 'suplier_kode' => 'SUP01', 'suplier_nama' => 'PT Elektronik Jaya', 'suplier_alamat' => 'Jakarta'],
            ['suplier_id' => 2, 'suplier_kode' => 'SUP02', 'suplier_nama' => 'CV Food Sejahtera', 'suplier_alamat' => 'Bandung'],
            ['suplier_id' => 3, 'suplier_kode' => 'SUP03', 'suplier_nama' => 'Toko Alat Tulis', 'suplier_alamat' => 'Surabaya'],
        ];
        DB::table('m_suplier')->insert($data);
    }
}
