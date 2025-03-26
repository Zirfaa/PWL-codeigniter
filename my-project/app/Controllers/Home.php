<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function kategori(): string
    {
        $data['kategori']=[
            'alat_tulis',
            'pakaian',
            'pertukangan',
            'elektronik',
            'snack'
        ];
        return view('kategori',$data);
    }
    public function produk(): string
    {
        return view('produk');
    }
    public function front(): string
    {
        return view('front');
    }
    public function alat_tulis(): string
    {
        return view('content/alat_tulis');
    }
    public function pakaian(): string
    {
        return view('content/pakaian');
    }
    public function pertukangan(): string
    {
        return view('content/pertukangan');
    }
    public function elektronik(): string
    {
        return view('content/elektronik');
    }
    public function snack(): string
    {
        return view('content/snack');
    }
}
