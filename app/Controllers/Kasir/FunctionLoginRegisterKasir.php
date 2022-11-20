<?php
namespace App\Controllers\Kasir;
use App\Controllers\BaseController;

class FunctionLoginRegisterKasir extends BaseController{
    public function viewLoginKasir(){
        return view('pages\Kasir\loginKasir');
    }
    public function viewRegisterKasir(){
        return view('pages\User\registerKasir');
    }
<<<<<<< Updated upstream
=======

    public function login_kasir(){
        $session = session();


        $model = new DataKasirModel();
        $username  = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id_kasir'],
                    'username'     => $data['username'],
                ];
                session()->set($ses_data);
                return redirect()->to('/landingPageKasir',);
            }
            else{
                session()->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/loginKasir');
            }
        }
        else{
            session()->setFlashdata('msg', 'username not Found');
            return redirect()->to('/loginKasir');
        }
    }

>>>>>>> Stashed changes
}