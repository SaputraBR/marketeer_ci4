<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login()
    {
        return view('admin/admin_login');
    }

    public function settings()
    {
        return view('admin/admin_settings');
    }
}