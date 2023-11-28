<?php

namespace App\Controllers;
use App\Models\Ci_crud;
use CodeIgniter\Exceptions\PageNotFoundException;
class Pages extends BaseController
{
  
   public function index()
    {
        $model = model(Ci_crud::class);
        $data = [
            'products'  => $model->getPages(),
            'product_name' => 'New products',
        ];

        $data['products'] = $model->getPages();
        return view('Pages/index');
    }

    public function view($prod = null)
    {
        $model = model(Ci_crud::class);

        $data['products'] = $model->getPages($prod);
    }
}
?>