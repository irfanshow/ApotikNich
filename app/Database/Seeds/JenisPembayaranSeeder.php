<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisPembayaranSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'jenis_pembayaran' => 'GOPAY'
            ],
            // ['jenis_pembayaran' => 'DANA'],
            // ['jenis_pembayaran' => 'MANDIRI'],
            // ['jenis_pembayaran' => 'BNI'],
            // ['jenis_pembayaran' => 'BRI'],
            // ['jenis_pembayaran' => 'BCA'],
            // ['jenis_pembayaran' => 'TUNAI'],


        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (nama_obat, harga_obat,stok_obat,deskripsi_obat) VALUES(:nama_obat:, :harga_obat:,:stok_obat:,:deskripsi_obat:)', $data);

        // Using Query Builder
        $this->db->table('jenis_pembayaran')->insert($data);
    
    }
}
