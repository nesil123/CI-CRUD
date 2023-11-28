<?php

namespace App\Controllers;

use App\Models\ProductsModel;

use App\Controllers\BaseController;

class ProductsController extends BaseController
{

    public function index()
    {
        $products = new ProductsModel();
        $data['products'] = $products->findAll();
        return view('products/index',$data);
    }
}
?>