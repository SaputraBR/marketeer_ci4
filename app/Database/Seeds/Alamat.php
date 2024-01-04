<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Alamat extends Seeder
{
    public function run()
    {
        $alamat = [
            'alamat' => 'Banjararum, Kalibawang, Kulon Progo',
            'tempat' => 'rumah',
            'hp_alamat' => '027456861134'
        ];
        $this->db->table('client_alamat')->insert($alamat);

        $detail = [
            'tgl_lahir' => '2001-10-16',
            'jns_kelamin' => 'laki-laki',
            'photo' => 'galadriel.jpg',
            'no_handphone' => '081234567890'
        ];
        $this->db->table('client_detail')->insert($detail);
    }
}
