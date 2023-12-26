<?php

namespace App\Controllers;

class Stocks extends BaseController
{

    public function stocks()
    {
        return view('admin/admin_stocks');
    }

    public function stockin()
    {
        return view('admin/admin_stocks_in');
    }

    public function stockout()
    {
        return view('admin/admin_stocks_out');
    }

    public function product()
    {
        return view('admin/admin_stocks_out_product');
    }

    public function retur()
    {
        return view('admin/admin_stocks_retur');
    }
}