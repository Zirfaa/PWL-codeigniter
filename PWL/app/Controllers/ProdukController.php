<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;

class ProdukController extends BaseController
{
    protected $produk;
    function __construct(){
        $this->produk = new ProductModel();
        }
    public function index(){
        $data = [
            'title' => 'produk'
        ];
        $products = $this->$produk->findAll();
        $dataProduk['products'] = $products;
        echo view("Layout/header",$data);
        echo view("Layout/sidebar",);
        echo view("Layout/produk_admin",$dataProduk);
        echo view("Layout/footer");
    }
}
