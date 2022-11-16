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
}