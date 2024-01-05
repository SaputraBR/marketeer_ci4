<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    function auth($admin, $pass)
    {
        return $this->db->table('admin')
        ->where(['nama' => $admin], ['password' => $pass])
        ->get()->getRowArray();
    }
}   