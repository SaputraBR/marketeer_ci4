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

    function create($data1, $data2, $data3)
    {
        $siji = $this->db->table('produk')->insert($data1);
        $data2['id_insert'] = $this->db->insertID();
        $dua = $this->db->table('produk_harga')->insert($data2);
        $data3['id_insert'] = $this->db->insertID();
        return $this->db->table('produk_stok')->insert($data3);
    }

    public function showBarang()
    {
        $query = $this->db->table('produk')
        ->join('produk_harga', 'produk_harga.plu = produk.plu')
        ->join('produk_stok', 'produk_stok.plu = produk.plu')
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
            $items[$row["plu"]]["stok"] = $row["stok"];
        }
        return $items;
    }

    function edit($plu)
    {
        return $this->db->table('produk')
        ->join('produk_harga', 'produk_harga.plu = produk.plu')
        ->join('produk_stok', 'produk_stok.plu = produk.plu')
        ->where('produk.plu', $plu)->get()->getResultArray();
    }

    function new($plu, $data1, $data2, $data3)
    {
        $siji = $this->db->table('produk')->where('plu', $plu)->update($data1);
        $dua = $this->db->table('produk_harga')->where('plu', $plu)->update($data2);
        return $this->db->table('produk_stok')->where('plu', $plu)->update($data3);
        
    }
}   
