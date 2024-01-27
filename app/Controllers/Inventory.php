<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\PostModel;

class Inventory extends BaseController
{
    public function inventory()
    {
        $model  = new AdminModel();
        $data['barang'] = $model->showBarang();
        return view('admin/admin_inventory', $data);
    }

    public function edit($plu)
    {
        $admin = new AdminModel();
        $post = new PostModel();
        $data['barang'] = $admin->edit($plu);
        
        return view('admin/admin_inventory_edit', $data);
    }


    public function tambah()
    {
        $model  = new AdminModel();
        $plu = $model->max();
        $plu = (int) $plu->plu;
        $plu++;
        $data['produk'] = sprintf('%05s', $plu);
        return view('admin/admin_inventory_tambah', $data);
    }

    public function invTambah()
    {
        $validation = \Config\Services::validation();
        $validation->setRules(['gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,6096]']);
        $validation->setRules(['nama' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid)
        {
            $model  = new AdminModel();
            
            $nama  = $this->request->getPost('nama');
            $barcode  = $this->request->getPost('barcode');
            $plu  = $this->request->getPost('plu');
            $kategori  = $this->request->getPost('kategori');
            $kondisi  = $this->request->getPost('kondisi');
            $dimensi = $this->request->getPost('dimensi');
            $berat  = $this->request->getPost('berat');
            $hpp  = $this->request->getPost('harga-hpp');
            $jual  = $this->request->getPost('harga-jual');
            $foto   = $this->request->getFile('foto');
            $gmbr;
            if (file_exists($foto))
            {
                $foto->move(WRITEPATH . '../public/img/post_picture');
                $gmbr = $foto->getName();
            } else {
                $gmbr = "none.png";
            }


            $data1 = array(
                'barcode' => $barcode,
                'nama' => $nama,
                'kategori' => $kategori,
                'kondisi' => $kondisi,
                'plu' => $plu,
                'dimensi' => $dimensi,
                'berat' => $berat
            );

            $data2 = array(
                'barcode' => $barcode,
                'hpp' => $hpp,
                'harga_jual' => $jual,
                'gambar' => $gmbr,
                'plu' => $plu
            );

            $data3 = array(
                'nama' => $nama,
                'hpp' => $hpp,
                'plu' => $plu
            );

            $model->create($data1, $data2, $data3);
            return redirect()->to(base_url('/adm/inventory/tambah'));
        }

        return redirect()->to(base_url('/adm/inventory/tambah'));
    }

}