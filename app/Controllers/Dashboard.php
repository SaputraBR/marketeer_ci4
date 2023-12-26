<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function dashboard()
    {
        return view('admin/admin');
    }

    public function penilaian()
    {
        return view('admin/admin_dashboard_penilaian');
    }

    public function penilaianDetail()
    {
        return view('admin/admin_dashboard_penilaian_detail');
    }

    public function pesan()
    {
        return view('admin/admin_dashboard_pesan');
    }

    public function pesanDetail()
    {
        return view('admin/admin_dashboard_pesan_detail');
    }

    public function post()
    {
        return view('admin/admin_dashboard_post');
    }

    public function postDetail()
    {
        return view('admin/admin_dashboard_post_detail');
    }


}