<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }

    public function product($product)
    {
        echo $product;
    }

    public function delete($Id)
    {
        $this->product->delete($Id);
        return redirect()->to('/product');
    }
   public function edit($Id)
{
    $data = [
        'product' => $this->product->findAll(),
        'pro' => $this->product->where('Id', $Id)->first(),
    ];
    return view('edit', $data); // Assuming 'edit_product' is your edit form view
}


public function update($Id)
{
    $data = [
        'ProductName'=>$this->request->getVAr('ProductName'),
        'ProductDescription'=>$this->request->getVAr('ProductDescription'),
        'ProductCategory'=>$this->request->getVAr('ProductCategory'),
        'ProductQuantity'=>$this->request->getVAr('ProductQuantity'),   
        'ProductPrice'=>$this->request->getVAr('ProductPrice'),   

    ];
    if ($this->request->getVar('Id')) {
        $this->product->where('Id', $this->request->getVar('Id'))->set($data)->update();
    } else {
        $this->product->where('Id', $Id)->set($data)->update();
    }
    return redirect()->to('/product');
}

 

    public function save()
    {
       $data = [
        'ProductName'=>$this->request->getVAr('ProductName'),
        'ProductDescription'=>$this->request->getVAr('ProductDescription'),
        'ProductCategory'=>$this->request->getVAr('ProductCategory'),
        'ProductQuantity'=>$this->request->getVAr('ProductQuantity'),   
        'ProductPrice'=>$this->request->getVAr('ProductPrice'),  
       ]; 

       if(isset($_POST['Id'])){
        $this->product->where ('Id', $_POST['Id'])->save($data);
       } else{
        $this->product->save($data);
       }
       return redirect()->to('/product');
      
    }
    public function jemalyn()
    {
        $data['product'] = $this->product->findAll();
        return view('product', $data);
    }


}