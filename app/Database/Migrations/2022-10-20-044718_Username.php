<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Username extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],

            

        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('username');
    }

    public function down()
    {
        $this->forge->dropTable('username');
    }
}
