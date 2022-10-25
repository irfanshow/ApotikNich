<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class History extends BaseController
{
    public function index()
    {
        return view("pages/history");
    }
}
