<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('admin/admin');
    }

    public function balance()
    {
        return view('admin/admin_balance');
    }

    public function inventory()
    {
        return view('admin/admin_inventory');
    }

    public function order()
    {
        return view('admin/admin_order');
    }

    public function settings()
    {
        return view('admin/admin_settings');
    }

    public function stocks()
    {
        return view('admin/admin_stocks');
    }
}