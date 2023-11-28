<?php

namespace App\Controllers;
use App\Models\Ci_crud;
use App\Models\ProductModel;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public $model;
    public $session;

    public function index()
    {  
                    
        return view('dashboard');
    }
 
    public function login()
    {
        helper('form');
        $model = new Ci_crud();
        $session = session();
        $data= [];
        if ($this->request->is('post'))
        {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $rules = [
                'username' => 'trim|required',
                'password' => 'trim|required',
              ];
                 if (!$this->validate($rules)) {
                
                     $data['validation'] = $this->validator;
    
                 }
            $data = $model->where('username', $username)
                          ->where('password', $password)
                          ->first();
         
            if($data)
            {
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'password' => $data['password'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/');
            }
            else
            {
                $session->setFlashdata('error', 'Username/Password does not exist.');

                return redirect()->to('login');
            }
        
        }
        
        return view('login',$data);
    }
    
    public function logout(){
	
		session()->destroy();
		return redirect()->to(base_url('login'));
	}
    
    public function item_list()
    {
        helper('form');

        $model = new ProductModel();
        $data =[];
		
            if($this->request->getVar('un')!='')
            {
               $un = trim($this->request->getVar('un'));
               $data['un'] 	= $un;
               $model->where('product_name',$un);
            }
            
            $results = $model->get()->getResult();
            $data['results'] = $results;
            return view('item_list',$data);
        
    }
    public function add_product()
    {
        helper('form');

        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('cart/add_product');
        }
        $post = $this->request->getPost(['product_name', 'mrp', 'discount', 'quantity']);

        $model = model(Ci_crud::class);

        $model->save([
            'product_name' => $post['product_name'],
            'mrp'  => $post['mrp'],
            'discount'  => $post['discount'],
            'quantity'  => $post['quantity'],
        ]);

        return view('cart/success');  
    }
    public function edit($id)
    {
        $data = ['product_name' => 'Manage Product'];
		
		$model = new Ci_crud();
        
		// $id = $this->request->getVar('edit');
		$data['id'] 			= $id;		
		$editdata = $model->where('id',$id)
                          ->first();		  
		 $data['product_name'] 	= $editdata['product_name'];
		 $data['mrp']   = $editdata['mrp'];
		 $data['discount']		= $editdata['discount'];
		 $data['quantity']	= $editdata['quantity'];
        return view('action/edit',$data);
    }
    public function update($id)
    {
        $model = new Ci_crud();
        $model->find($id);
        $data = $this->request->getPost(['product_name', 'mrp', 'discount', 'quantity']);
        $model->update($id,$data);
        // $results = $model->findAll();
        // $data2['results'] = $results;
        // return view('item_list',$data2);
        return redirect()->to(base_url('item_list'))->with('status',' Success');
    }
    public function delete($id)
    {
        $model = new Ci_crud();
        $model->delete($id);
        return redirect()->to(base_url('item_list'))->with('status',' Success');
    }
    
}
?>
