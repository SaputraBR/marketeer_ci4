<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'plu' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'barcode' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kondisi' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'dibuat' => [
                'type'       => 'TIMESTAMP'
            ],
        ]);
        $this->forge->addKey('plu', true);
        $this->forge->createTable('produk');

        $this->forge->addField([
            'plu_harga' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'barcode' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'hpp' => [
                'type'           => 'INT',
                'constraint'     => 50,
            ],
            'harga_jual' => [
                'type'           => 'INT',
                'constraint'     => 50,
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addKey('plu_harga', true);
        $this->forge->createTable('produk_harga');

        
        $this->forge->addField([
            'plu_stok' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'hpp' => [
                'type'           => 'INT',
                'constraint'     => 50,
            ],
            'stok' => [
                'type'           => 'INT',
                'constraint'     => 50,
            ]
        ]);
        $this->forge->addKey('plu_stok', true);
        $this->forge->createTable('produk_stok');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
        $this->forge->dropTable('produk_harga');
        $this->forge->dropTable('produk_stok');
    }
}
