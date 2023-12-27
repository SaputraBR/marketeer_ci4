<?php

namespace App\Controllers;

class Order extends BaseController
{
    public function order()
    {
        return view('admin/admin_order');
    }

    public function orderDetail()
    {
        return view('admin/admin_order_detail');
    }

    public function pesanan()
    {
        return view('admin/admin_order_pesanan');
    }

    public function pesanKonfirm()
    {
        return view('admin/admin_order_pesanan_konfirmasi');
    }

    public function bayar()
    {
        return view('admin/admin_order_pembayaran');
    }

    public function terima()
    {
        return view('admin/admin_order_diterima');
    }

    public function terimaDetail()
    {
        return view('admin/admin_order_diterima_detail');
    }

    public function kirim()
    {
        return view('admin/admin_order_dikirim');
    }
}