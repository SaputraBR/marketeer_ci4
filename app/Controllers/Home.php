<?php

namespace App\Controllers;

class Home extends BaseController
{
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
        return view('store/store_akun');
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
