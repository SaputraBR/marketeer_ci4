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
                'loging_in' => TRUE,
            ]);
            return redirect()->to('/adm');
        } else {
            session()->setFlashdata('error', 'Salah blokkk!!!');
            return redirect()->back();
        }
    }

    public function keluar()
    {
        session()->destroy();
        return redirect()->to('/adm/login');
    }
}