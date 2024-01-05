<?php

namespace App\Controllers;

use App\Models\ClientModel;

class Home extends BaseController
{
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function verify()
    {
        $model = new ClientModel();
        $name  = $this->request->getPost('user');
        $pass  = $this->request->getPost('password');
        $db    = $model->user($name, $pass);

        if (($db['nama'] == $name) && ($db['password'] == $pass))
        {
            session()->set([
                'username' => $db['nama'],
                'logged_in' => TRUE,
            ]);
            return redirect()->to('/');
        } else {
            session()->setFlashdata('error', 'Salah blokkk!!!');
            return redirect()->back();
        }
    
        /*password hash
        if($db){
            $word = $db['password'];

            if(password_verify($pass, $word)){
                session()->set([
                    'username' => $db['nama'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/');
            } else {
                session()->setFlashdata('error', 'Data yang anda masukkan salah!');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Data yang anda masukkan salah!');
            return redirect()->back();
        }*/
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
}
