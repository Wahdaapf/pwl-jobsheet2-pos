<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'suplier_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'Laptop', 'harga_beli' => 8000000, 'harga_jual' => 10000000],
            ['barang_id' => 2, 'kategori_id' => 1, 'suplier_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Mouse', 'harga_beli' => 50000, 'harga_jual' => 80000],
            ['barang_id' => 3, 'kategori_id' => 1, 'suplier_id' => 1, 'barang_kode' => 'BRG03', 'barang_nama' => 'Keyboard', 'harga_beli' => 150000, 'harga_jual' => 200000],
            ['barang_id' => 4, 'kategori_id' => 1, 'suplier_id' => 1, 'barang_kode' => 'BRG04', 'barang_nama' => 'Monitor', 'harga_beli' => 1200000, 'harga_jual' => 1500000],
            ['barang_id' => 5, 'kategori_id' => 1, 'suplier_id' => 1, 'barang_kode' => 'BRG05', 'barang_nama' => 'Speaker', 'harga_beli' => 300000, 'harga_jual' => 450000],
            
            ['barang_id' => 6, 'kategori_id' => 2, 'suplier_id' => 2, 'barang_kode' => 'BRG06', 'barang_nama' => 'Roti', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['barang_id' => 7, 'kategori_id' => 2, 'suplier_id' => 2, 'barang_kode' => 'BRG07', 'barang_nama' => 'Susu', 'harga_beli' => 12000, 'harga_jual' => 15000],
            ['barang_id' => 8, 'kategori_id' => 2, 'suplier_id' => 2, 'barang_kode' => 'BRG08', 'barang_nama' => 'Kopi', 'harga_beli' => 10000, 'harga_jual' => 13000],
            ['barang_id' => 9, 'kategori_id' => 2, 'suplier_id' => 2, 'barang_kode' => 'BRG09', 'barang_nama' => 'Teh', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 10, 'kategori_id' => 2, 'suplier_id' => 2, 'barang_kode' => 'BRG10', 'barang_nama' => 'Snack', 'harga_beli' => 3000, 'harga_jual' => 5000],

            ['barang_id' => 11, 'kategori_id' => 5, 'suplier_id' => 3, 'barang_kode' => 'BRG11', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 4000, 'harga_jual' => 6000],
            ['barang_id' => 12, 'kategori_id' => 5, 'suplier_id' => 3, 'barang_kode' => 'BRG12', 'barang_nama' => 'Pensil', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['barang_id' => 13, 'kategori_id' => 5, 'suplier_id' => 3, 'barang_kode' => 'BRG13', 'barang_nama' => 'Penghapus', 'harga_beli' => 1000, 'harga_jual' => 2000],
            ['barang_id' => 14, 'kategori_id' => 5, 'suplier_id' => 3, 'barang_kode' => 'BRG14', 'barang_nama' => 'Penggaris', 'harga_beli' => 3000, 'harga_jual' => 4500],
            ['barang_id' => 15, 'kategori_id' => 5, 'suplier_id' => 3, 'barang_kode' => 'BRG15', 'barang_nama' => 'Spidol', 'harga_beli' => 5000, 'harga_jual' => 7000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
