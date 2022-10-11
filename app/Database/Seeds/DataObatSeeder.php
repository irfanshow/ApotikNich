<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataObatSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_obat' => 'darth',
            'harga_obat'    => 5000,
            'stok_obat' => 5,
            'deskripsi_obat' => 'PARACETAMOL KIMIA FARMA 500MG merupakan sediaan tablet yang didistribusikan oleh PT. Kimia Farma. Paracetamol merupakan salah satu obat yang masuk ke dalam golongan analgesik (pereda nyeri) dan antipiretik (penurun demam). Obat ini dipakai untuk meredakan rasa sakit ringan hingga menengah seperti sakit kepala, sakit gigi dan, mialgia serta menurunkan demam.
            Beli PARACETAMOL KIMIA FARMA 500MG di K24Klik.com dan dapatkan manfaatnya.'

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (nama_obat, harga_obat,stok_obat,deskripsi_obat) VALUES(:nama_obat:, :harga_obat:,:stok_obat:,:deskripsi_obat:)', $data);

        // Using Query Builder
        $this->db->table('data_obat')->insert($data);
    }
    
}
