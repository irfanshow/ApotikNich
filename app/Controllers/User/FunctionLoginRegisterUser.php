<?php
namespace App\Controllers\User;
use App\Controllers\BaseController;

class FunctionLoginRegisterUser extends BaseController{
    public function viewLoginUser(){
        return view('pages\User\loginUser');
    }
    public function viewRegisterUser(){
        return view('pages\User\registerUser');
    }
}