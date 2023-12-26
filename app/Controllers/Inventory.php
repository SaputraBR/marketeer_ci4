<?php

namespace App\Controllers;

class Inventory extends BaseController
{
    public function inventory()
    {
        return view('admin/admin_inventory');
    }

    public function edit()
    {
        return view('admin/admin_inventory_edit');
    }

    public function editGambar()
    {
        return view('admin/admin_inventory_edit_gambar');
    }

    public function tambah()
    {
        return view('admin/admin_inventory_tambah');
    }

    public function tambahGambar()
    {
        return view('admin/admin_inventory_tambah_gambar');
    }
}