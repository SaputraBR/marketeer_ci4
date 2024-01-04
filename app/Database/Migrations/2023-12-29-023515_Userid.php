<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Userid extends Migration
{
    public function up()
    {
        $this->forge->addColumn('client', [
			'user_id VARCHAR(100)'
		]);

        $this->forge->addColumn('client_alamat', [
			'user_id VARCHAR(100)'
		]);

        $this->forge->addColumn('client_detail', [
			'user_id VARCHAR(100)'
		]);
    }

    public function down()
    {
        $this->forge->dropColumn('client', 'user_id');
        $this->forge->dropColumn('client_alamat', 'user_id');
        $this->forge->dropColumn('client_detail', 'user_id');
    }
}
