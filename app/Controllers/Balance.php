<?php

namespace App\Controllers;

class Balance extends BaseController
{
    public function balance()
    {
        return view('admin/admin_balance');
    }

    public function rekap()
    {
        return view('admin/admin_balance_rekap_penjualan');
    }

    public function penjualan()
    {
        return view('admin/admin_balance_penjualan');
    }

    public function detail()
    {
        return view('admin/admin_balance_penjualan_detail');
    }

    public function margin()
    {
        return view('admin/admin_balance_margin');
    }

    public function nielsen()
    {
        return view('admin/admin_balance_nielsen');
    }

    public function beli()
    {
        return view('admin/admin_balance_beli');
    }

    public function barang()
    {
        return view('admin/admin_balance_beli_pbarang');
    }
}