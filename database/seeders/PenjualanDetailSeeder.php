<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $detailId = 1;
        for ($penjualanId = 1; $penjualanId <= 10; $penjualanId++) {
            for ($j = 1; $j <= 3; $j++) {
                $barangId = rand(1, 15);
                $data[] = [
                    'detail_id' => $detailId++,
                    'penjualan_id' => $penjualanId,
                    'barang_id' => $barangId,
                    'harga' => 10000,
                    'jumlah' => rand(1, 5),
                ];
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
