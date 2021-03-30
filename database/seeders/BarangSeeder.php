<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_barang=[
            [
                'id_barang' => '1',
                'kode_barang' => 'MD001',
                'nama_barang' => 'Counter Strike',
                'kategori_barang' => 'Game',
                'harga' => '120000',
                'qty' => '1000'
            ],
            [
                'id_barang' => '2',
                'kode_barang' => 'MD002',
                'nama_barang' => 'Raymand Legends',
                'kategori_barang' => 'Game',
                'harga' => '80000',
                'qty' => '200'
            ],
            [
                'id_barang' => '3',
                'kode_barang' => 'MD003',
                'nama_barang' => 'Fifa 21',
                'kategori_barang' => 'Game',
                'harga' => '150000',
                'qty' => '400'
            ],
            [
                'id_barang' => '4',
                'kode_barang' => 'MD004',
                'nama_barang' => 'Final Fantasty XVI',
                'kategori_barang' => 'Game',
                'harga' => '200000',
                'qty' => '500'
            ],
            [
                'id_barang' => '5',
                'kode_barang' => 'MD005',
                'nama_barang' => 'Grand Theft Auto V',
                'kategori_barang' => 'Game',
                'harga' => '150000',
                'qty' => '50'
            ],
            [
                'id_barang' => '6',
                'kode_barang' => 'MD006',
                'nama_barang' => 'Addidas',
                'kategori_barang' => 'Sepatu',
                'harga' => '350000',
                'qty' => '30'
            ],
            [
                'id_barang' => '7',
                'kode_barang' => 'MD007',
                'nama_barang' => 'Nike',
                'kategori_barang' => 'Sepatu',
                'harga' => '400000',
                'qty' => '50'
            ],
            [
                'id_barang' => '8',
                'kode_barang' => 'MD008',
                'nama_barang' => 'Homie Pet',
                'kategori_barang' => 'Sepatu',
                'harga' => '700000',
                'qty' => '10'
            ],
            [
                'id_barang' => '9',
                'kode_barang' => 'MD009',
                'nama_barang' => 'Converse',
                'kategori_barang' => 'Sepatu',
                'harga' => '400000',
                'qty' => '80'
            ]
            , [
                'id_barang' => '10',
                'kode_barang' => 'MD010',
                'nama_barang' => 'Rebook',
                'kategori_barang' => 'Sepatu',
                'harga' => '900000',
                'qty' => '50'
            ],
            [
                'id_barang' => '11',
                'kode_barang' => 'MD011',
                'nama_barang' => 'Harman Kardon Home Theatre',
                'kategori_barang' => 'Elektronik',
                'harga' => '1200000',
                'qty' => '50'
            ],
            [
                'id_barang' => '12',
                'kode_barang' => 'MD012',
                'nama_barang' => 'Sony Amx Speaker',
                'kategori_barang' => 'Elektronik',
                'harga' => '1100000',
                'qty' => '40'
            ],
            [
                'id_barang' => '13',
                'kode_barang' => 'MD013',
                'nama_barang' => 'Xiaomi Mi 11',
                'kategori_barang' => 'Elektronik',
                'harga' => '150000',
                'qty' => '100'
            ],
            [
                'id_barang' => '14',
                'kode_barang' => 'MD014',
                'nama_barang' => 'Epson Printer Lxa21',
                'kategori_barang' => 'Elektronik',
                'harga' => '300000',
                'qty' => '50'
            ],
            [
                'id_barang' => '15',
                'kode_barang' => 'MD015',
                'nama_barang' => 'HP Printer 2ax4',
                'kategori_barang' => 'Elektronik',
                'harga' => '80',
                'qty' => '40'
            ],
            [
                'id_barang' => '16',
                'kode_barang' => 'MD016',
                'nama_barang' => 'Gitar Akustik',
                'kategori_barang' => 'Alat Musik',
                'harga' => '850000',
                'qty' => '14'
            ],
            [
                'id_barang' => '17',
                'kode_barang' => 'MD017',
                'nama_barang' => 'Gitar Elektrik',
                'kategori_barang' => 'Alat Musik',
                'harga' => '350000',
                'qty' => '15'
            ],
            [
                'id_barang' => '18',
                'kode_barang' => 'MD018',
                'nama_barang' => 'Piano',
                'kategori_barang' => 'Alat Musik',
                'harga' => '5000000',
                'qty' => '10'
            ],
            [
                'id_barang' => '19',
                'kode_barang' => 'MD019',
                'nama_barang' => 'Drum',
                'kategori_barang' => 'Alat Musik',
                'harga' => '250000',
                'qty' => '20'
            ],
            [
                'id_barang' => '20',
                'kode_barang' => 'MD020',
                'nama_barang' => 'Bass',
                'kategori_barang' => 'Alat Musik',
                'harga' => '700000',
                'qty' => '80'
            ]

        ];
        DB::table('barang')->insert($data_barang);
    }
}