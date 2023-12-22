<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProfilToko extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'toko_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('toko_id', true);
        $this->forge->createTable('profil_toko', true);

    }

    public function down()
    {
        $this->forge->dropTable('profil_toko');
    }
}
