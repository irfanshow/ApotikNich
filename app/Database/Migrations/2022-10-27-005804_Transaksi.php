<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'tanggal_transaksi' => [
                'type' => 'DATETIME',
            ],

            'total_pembayaran' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            'id_kasir' => [
                'type'           => 'INT',
                'constraint' => 50,
            ],
            'id_user' => [
                'type'           => 'INT',
                'constraint' => 50,
            ],
            'id_obat' => [
                'type'           => 'INT',
                'constraint' => 50,
            ],
            'id_jenis_pembayaran' => [
                'type'           => 'INT',
                'constraint' => 50,
            ],

        ]);
        $this->forge->addKey('id_transaksi', true);
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
