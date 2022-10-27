<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisPembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis_pembayaran' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'jenis_pembayaran' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

        ]);
        $this->forge->addKey('id_jenis_pembayaran', true);
        $this->forge->createTable('jenis_pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('jenis_pembayaran');
    }
}
