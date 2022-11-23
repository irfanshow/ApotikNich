<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Keranjang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_keranjang' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'id_obat' => [
                'type'       => 'INT',

            ],
            'jumlah' => [
                'type' => 'int',
                'constraint' => '100',
            ],

        ]);
        $this->forge->addKey('id_keranjang', true);
        $this->forge->addForeignKey('id_obat','data_obat','id_obat','CASCADE', 'CASCADE');        
        $this->forge->createTable('keranjang');
    }

    public function down()
    {
        $this->forge->dropTable('keranjang');
    }
}
