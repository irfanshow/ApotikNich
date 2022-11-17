<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kasir extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kasir' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'nama_kasir' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

        ]);
        $this->forge->addKey('id_kasir', true);
        $this->forge->createTable('kasir');
    }

    public function down()
    {
        $this->forge->dropTable('kasir');
    }
}
