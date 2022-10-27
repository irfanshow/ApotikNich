<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Administrasi extends BaseController
{
    public function index()
    {
        return view("pages/administrasi");
    }

    public function login_admin(){
        $session = session();

        $post = $this -> request -> getPost();
        $query = $this ->db ->table('admin')->getWhere(['username' => $post['username']]);
        $admin = $query->getRow();

        if ($admin) {
            if(password_verify($post['password'],$admin ->password)) {
               
                $params = ['id_admin' => $admin -> id_admin];
                $session -> set($params);
                return redirect() -> to ('/index');

            }
            else{
                $session ->setFlashdata('msg','Password Salah');
                return redirect() -> to('/login');
            }
        }
        else{
            $session ->setFlashdata('msg','User Tidak Ditemukan');
            return redirect() -> to('/login');
        }
    }
}
