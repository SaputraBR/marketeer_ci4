<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alamat extends Migration
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
        $this->forge->createTable('client_detail');

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
            'tempat' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'hp_alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addKey('client_id', true);
        $this->forge->createTable('client_alamat');
    }

    public function down()
    {
        $this->forge->dropTable('client_detail');
        $this->forge->dropTable('client_alamat');
    }
}
