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
              
            ],

            'id_jenis_pembayaran' => [
                'type'           => 'INT',
                
            ],
            
            'id_keranjang' => [
                'type'           => 'INT',
                
            ],

        ]);
        $this->forge->addKey('id_transaksi', true);
        $this->forge->addForeignKey('id_kasir','kasir','id_kasir','CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_keranjang','keranjang','id_keranjang','CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_jenis_pembayaran','jenis_pembayaran','id_jenis_pembayaran','CASCADE', 'CASCADE');
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }

}
