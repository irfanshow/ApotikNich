<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Administrasi extends BaseController
{
    public function index()
    {
        return view("pages/administrasi");
    }
}
