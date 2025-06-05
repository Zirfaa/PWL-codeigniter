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
        $product = $this->product->findAll();
        $data['product'] = $product;
        return view('produk', $data);
    }
}
