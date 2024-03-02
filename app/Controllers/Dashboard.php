<?php

namespace App\Controllers;

use App\Models\AdminModel;

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

    public function tambah()
    {
        $model = new AdminModel();
        $key = $this->request->getVar('search');
        $cari = $model->showBarang();
        
        $data['prin'] = $cari;
        return view('admin/admin_dashboard_post_tambah', $data);
    }

    public function tambahCari()
    {
        $model = new AdminModel();
        $barang = $model->showBarang();

        $key = $this->request->getPost('search');
        $data['data'] = $model->foundit($key);

        echo json_encode($data);
    }

    public function postDetail()
    {
        return view('admin/admin_dashboard_post_detail');
    }


}