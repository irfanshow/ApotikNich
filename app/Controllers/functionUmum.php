<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class FunctionUmum extends BaseController{
    public function viewLogin(){
        return view('pages\Admin\login');
    }
    public function viewRegister(){
        return view('pages\Admin\register');
    }
}