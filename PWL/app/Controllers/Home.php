<?php

namespace App\Controllers;

use function PHPUnit\Framework\returnValueMap;
use App\Models\ProductModel; 

class Home extends BaseController
{
    protected $product;

    public function __construct(){
        helper('number');
        helper('form');
        $this->product = new ProductModel();
    }

    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
        return view('dashboard', $data);
    }

    public function hello($name = null)
    {
        $data['name'] = $name;
        $data['title'] = "Front Page";
        return view('front', $data);
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function keranjang()
    {
        return view('keranjang');
    }
}