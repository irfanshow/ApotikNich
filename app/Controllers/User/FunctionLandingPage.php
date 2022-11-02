<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class FunctionLandingPage extends BaseController
{
    public function index()
    {
        return view("pages/User/landingPageUser");
    }
}