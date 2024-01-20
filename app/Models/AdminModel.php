<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    function max()
    {
        return $this->db->table('produk')
        ->selectMax('plu')->get()->getRow();
    }

    function auth($admin, $pass)
    {
        return $this->db->table('admin')
        ->where(['nama' => $admin], ['password' => $pass])
        ->get()->getRowArray();
    }

    function create($data1, $data2){
        $this->db->table('produk')->insert($data1);
        $data2['id_insert'] = $this->db->insertID();
        return $this->db->table('produk_harga')->insert($data2);
    }

    public function showBarang()
    {
        $query = $this->db->table('produk')
        ->join('produk_harga', 'produk_harga.plu = produk.plu')
        ->get()->getResultArray();
        
        $items = array();
        foreach ($query as $row)
        {
            $items[$row["plu"]]["plu"] = $row["plu"];
            $items[$row["plu"]]["nama"] = $row["nama"];
            $items[$row["plu"]]["barcode"] = $row["barcode"];
            $items[$row["plu"]]["kategori"] = $row["kategori"];
            $items[$row["plu"]]["kondisi"] = $row["kondisi"];
            $items[$row["plu"]]["dimensi"] = $row["dimensi"];
            $items[$row["plu"]]["dibuat"] = $row["dibuat"];
            $items[$row["plu"]]["hpp"] = $row["hpp"];
            $items[$row["plu"]]["jual"] = $row["harga_jual"];
            $items[$row["plu"]]["gambar"] = $row["gambar"];
        }
        return $items;
    }
}   