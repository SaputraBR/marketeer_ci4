<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Market extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'admin_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ]
        ]);
        $this->forge->addKey('admin_id', true);
        $this->forge->createTable('admin');

        $this->forge->addField([
            'client_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ]
        ]);
        $this->forge->addKey('client_id', true);
        $this->forge->createTable('client');



    }

    public function down()
    {
        $this->forge->dropTable('admin');
        $this->forge->dropTable('client');
    }
}
