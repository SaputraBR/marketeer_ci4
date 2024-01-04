<?php

namespace App\Controllers;

use App\Models\ClientModel; 

class Home extends BaseController
{
    public function verify()
    {
        $dbase = new ClientModel;
        $nama  = $this->request->getPost("nama");
        $pass  = $this->request->getPost("password");
        $verif = $dbase->where(['nama', $nama])->first();

        if ($verif)
        {
            $word = $verif["password"];
            if (password_verify($pass, $word))
            {
                session()->set([
                    "user" => $verif["nama"],
                    "logged_in" => TRUE,
                ]);
            } else {
                session()->setFlashdata('error', 'Data yang anda masukkan salah!');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Data yang anda masukkan salah!');
            return redirect()->back();
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
}
