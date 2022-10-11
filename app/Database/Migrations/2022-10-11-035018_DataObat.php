<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataObat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_obat' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'nama_obat' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'harga_obat' => [
                'type' => 'int',
                'constraint' => '100',
            ],
            'stok_obat' => [
                'type' => 'int',
                'constraint' => '100',
            ],
            'deskripsi_obat' => [
                'type' => 'text',
                'constraint' => '1000',
            ],
        ]);
        $this->forge->addKey('id_obat', true);
        $this->forge->createTable('data_obat');
    }

    public function down()
    {
        $this->forge->dropTable('data_obat');
    }
}
