<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        $begin = [
                'nama' => 'Admin',
                'email' => 'adm.marketeer@gmail.com',
                'photo' => 'Johnny_Depp.jpg',
                'password' => '12345'
            ];

        $this->db->table('admin')->insert($begin);

        $klien = [
            'nama' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => '12345',
        ];

        $this->db->table('client')->insert($klien);
    }
}