<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Klien extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'client_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tgl_lahir' => [
                'type'       => 'DATE',
                'null' => true,
            ],
            'jns_kelamin' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'photo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'no_handphone' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addKey('client_id', true);
        $this->forge->createTable('detail_client');
    }

    public function down()
    {
        $this->forge->dropTable('detail_client');
    }
}
