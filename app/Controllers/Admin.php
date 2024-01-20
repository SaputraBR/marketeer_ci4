<?php

namespace App\Controllers;

use App\Models\AdminModel;

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

    public function masuk()
    {
        $model = new AdminModel();
        $nama  = $this->request->getPost('user');
        $code  = $this->request->getPost('kode');
        $db    = $model->auth($nama, $code);

        if (($db['nama'] == $nama) && ($db['password'] == $code))
        {
            session()->set([
                'admin' => $db['nama'],
                'adm_login' => TRUE,
            ]);

            return redirect()->to(base_url('/adm'));
        } else {
            session()->setFlashdata('error', 'Salah blokkk!!!');
            return redirect()->back();
        }
    }

    public function keluar()
    {
        session()->remove('adm_login');
        return redirect()->to(base_url('/adm/login'));
    }
}