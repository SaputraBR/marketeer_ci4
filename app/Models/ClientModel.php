<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{

    public function klien()
    {
        return $this->db->table('client')
        ->join('client_alamat','client_alamat.client_id=client.client_id', 'left')
        ->join('client_detail','client_detail.client_id=client.client_id', 'left')
        ->get()->getResultArray();
    }

    function bismillah()
    {
        $query = $this->db->table('client')
        ->join('client_alamat','client_alamat.user_id=client.user_id', 'left')
        ->join('client_detail','client_detail.user_id=client.user_id', 'left')
        ->get()->getResultArray();

        $items = array();
        foreach ($query as $row)
        {
            $items[$row["client_id"]]["nama"] = $row["nama"];
            $items[$row["client_id"]]["lahir"] = $row["tgl_lahir"];
            $items[$row["client_id"]]["kelamin"] = $row["jns_kelamin"];
            $items[$row["client_id"]]["email"] = $row["email"];
            $items[$row["client_id"]]["hp"] = $row["no_handphone"];
            $items[$row["client_id"]]["alamat"][$row["alamat_id"]] = array(
                "tempat" => $row["tempat"],
                "alamat" => $row["alamat"],
                "phone" => $row["hp_alamat"],
            );
        }
        return $items;
    }

}   