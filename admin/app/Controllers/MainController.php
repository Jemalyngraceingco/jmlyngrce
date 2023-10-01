<?php

namespace App\Controllers;
use App\Models\UserModel;
//use App\Models\AdminModel;
use App\Controllers\BaseController;

class MainController extends BaseController
{
    private $admin;
    private $eccomerce;

    public function __construct()
    {
   
        $this->admin = new \App\Models\AdminModel();    
    }
    public function eccomerce()
    {
      return view ('views/eccomerce');
    }
   
    public function admin($admin)
    {
        echo $admin;
    }
    public function jemalyn()
    {
        $data['admin'] = $this->admin->findAll();
        return view('admin', $data);
    }
    public function register(){
        helper (['form']);
        $data =[];
        return view('register');
    }
    public function authregister()
    {
     helper(['form']);
     $rules =[
        'username' =>'required|min_length[4]|max_lenght[100]|valid_email|is_unique[users.email]',
        'password' =>'required|min_length[4]|max_lenght[100]',
        'confirmpassword'=>'required|matches[password]'
     ];
     if($this->validate($rules))
     {
        $AdminModel = new AdminModel();
        $data =[
            'username'=> $this->request->getVar('username'),
            'password'=> password_hash ($this->request->getVar('passwrod'), PASSWORD_DEFAULT)
        ];
        $AdminModel->save($data);
        return redirect()->to('/login');
     } else{
        $data['validation'] = $this->validator;
        echo view('register', $data);
     }

    }
    public function login(){
        helper (['form']);
        return view('login');
    }
    public function authlogin()
    {
     $session = session();
     $AdminModel = new AdminModel();
     $username =$this->request->getVar('username');
     $password =$this->request->getVar('password');
     $data = $AdminModel-> whete(username,$username)->first();
     
     if($data) {
       $pass = $data['password'];
       $authenticatePassword = password_verify($password,$pass);
       if($authenticatePassword){
        $ses_data =[
            'id' => $data['username'],
            'isLoggedin' =>TRUE
        ];
        $session->set($ses_data);
        return redirect()->to('/register');

       }else{
        $session ->setFlashdata('msg','Password is incorrect.');
        return redirect()->to('admin');
       }
     } else{
        $session ->setFlashdata('msg','Email does not exist.');
        return redirect()->to('login');
     }
    }
    
    public function save()
    {
        $Product_Image = $this->request->getFile('Product_Image');
        
            $newName = '/'.'image_' . '.' . $Product_Image->getClientExtension();
            $Product_Image->move(ROOTPATH . 'public/uploads/', $newName);
            $data = [
                'Product_Image'=>$newName,
                'Product_Description'=>$this->request->getVAr('Product_Description'),
                'Product_Name'=>$this->request->getVAr('Product_Name'),
                'Product_Price'=>$this->request->getVAr('Product_Price'),   
                'Product_Category'=>$this->request->getVAr('Product_Category'),  
                'Product_Quantity'=>$this->request->getVAr('Product_Quantity'),  
                
               ]; 
        
               if(isset($_POST['id'])){
                $this->admin->where ('id', $_POST['id'])->save($data);
               } else{
                $this->admin->save($data);
               }
               return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $this->admin->delete($id);
        return redirect()->to('/admin');
    }
    public function edit($id)
{
    $data = [
        'admin' => $this->admin->findAll(),
        'pro' => $this->admin->where('id', $id)->first(),
    ];
    return view('edit', $data); // Assuming 'edit_product' is your edit form view
}
public function update($id)
{
    $data = [
                'Product_Image'=>$this->request->getVAr('Product_Image'),
                'Product_Description'=>$this->request->getVAr('Product_Description'),
                'Product_Name'=>$this->request->getVAr('Product_Name'),
                'Product_Price'=>$this->request->getVAr('Product_Price'),   
                'Product_Category'=>$this->request->getVAr('Product_Category'),  
                'Product_Quantity'=>$this->request->getVAr('Product_Quantity'), 
    ];
    if ($this->request->getVar('id')) {
        $this->admin->where('id', $this->request->getVar('id'))->set($data)->update();
    } else {
        $this->admin->where('id', $id)->set($data)->update();
    }
    return redirect()->to('/admin');
}
    
}
