<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Administrasi extends BaseController
{
    public function index()
    {
        return view("pages/administrasi");
    }

    public function login_admin(){
        $session = session();


        $model = new AdminModel();
        $username  = $this->request->getVar('username');
        $password = $this->request->getVar('pass');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id_admin'],
                    'username'     => $data['username'],
                    'logged_in'     => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to('/dashboard',);
            }
            else{
                session()->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }
        else{
            session()->setFlashdata('msg', 'username not Found');
            return redirect()->to('/login');
        }

    //     $post = $this -> request -> getPost();
    //     $query = $this ->db ->table('admin')->getWhere(['username' => $post['username']]);
    //     $admin = $query->getRow();

    //     if ($admin) {
    //         if(password_verify($post['password'],$admin ->password)) {
               
    //             $params = ['id_admin' => $admin -> id_admin];
    //             $session -> set($params);
    //             return redirect() -> to ('/index');

    //         }
    //         else{
    //             $session ->setFlashdata('msg','Password Salah');
    //             return redirect() -> to('/login');
    //         }
    //     }
    //     else{
    //         $session ->setFlashdata('msg','User Tidak Ditemukan');
    //         return redirect() -> to('/login');
    //     }
    }
}
