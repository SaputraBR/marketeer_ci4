<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function order()
    {
        return view('admin/admin_order');
    }

    public function pesanan()
    {
        return view('admin/admin_order_pesanan');
    }
    public function bayar()
    {
        return view('admin/admin_order_pembayaran');
    }
    public function terima()
    {
        return view('admin/admin_order_diterima');
    }
    public function kirim()
    {
        return view('admin/admin_order_dikirim');
    }
}