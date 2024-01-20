<?php

namespace App\Controllers;

use App\Models\ClientModel;

class Home extends BaseController
{
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }

    public function verify()
    {
        $model = new ClientModel();
        $name  = $this->request->getPost('user');
        $pass  = $this->request->getPost('password');
        $db    = $model->user($name, $pass);
    
        if($db){
            $word = $db['password'];

            if(password_verify($pass, $word)){
                session()->set([
                    'id' => $db['user_id'],
                    'username' => $db['nama'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url());
            } else {
                session()->setFlashdata('error', 'Data yang anda masukkan salah!');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Data yang anda masukkan salah!');
            return redirect()->back();
        }
    }

    public function regist()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|min_length[15]|max_length[50]|is_unique[client.email]',
            'password1' => 'required|min_length[5]|max_length[100]',
            'password2' => 'required|min_length[5]|max_length[100]',
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid)
        {
            $email  = $this->request->getPost('email');
            $word   = $this->request->getPost('password1');
            $pass   = $this->request->getPost('password2');
            if ($word == $pass)
            {
                $model   = new ClientModel();
                $client  = $model->tabel();
                $max     = $model->smax();
                $user    = $max->user_id;
                $uniq    = (int) substr($user, 4, 4);
                $uniq++;
                $nama    = "USER";
                $user    = $nama.sprintf('%04s', $uniq);

                $client->insert([
                    'email' => $email,
                    'password' => password_hash($pass, PASSWORD_BCRYPT),
                    'user_id' => $user,
                ]);
    
                return redirect()->to(base_url('/signup'));
            }
            return redirect()->to(base_url('/login'));
        }
    }

    public function index()
    {
        return view('store/store');
    }
    
    public function bayar()
    {
        return view('store/store_akun_bayar_detail');
    }
    
    public function beli()
    {
        return view('store/store_beli');
    }

    public function client()
    {
        $klien = new ClientModel();
        $data['client'] = $klien->bismillah();

        return view('store/store_akun', $data);
    }

    public function forgot()
    {
        return view('store/store_login_forgot');
    }
    
    public function login()
    {
        return view('store/store_login');
    }

    public function keranjang()
    {
        return view('store/store_keranjang');
    }

    public function product()
    {
        return view('store/store_product');
    }

    public function pesan()
    {
        return view('store/store_akun_pesan');
    }

    public function signup()
    {
        return view('store/store_login_signup');
    }

    public function terms()
    {
        return view('store/store_terms');
    }

    public function wishlist()
    {
        return view('store/store_wishlist');
    }

    public function favorit()
    {
        
    }
}
