<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class FunctionLandingPage extends BaseController
{
    public function index()
    {
<<<<<<< Updated upstream
        return view("pages/User/landingPageUser");
=======

        $obatModel = new DataObatModel();
        $obat = $obatModel->findAll();
     
        $data= [
            'title'=> 'DATA OBAT',
            'obat'=>$obat
        ];
        return view("pages/User/landingPageUser",$data);
    }

    public function semuaObat()
    {
        $pager = \Config\Services::pager();
        $obatModel = new DataObatModel();
        $obat = $obatModel->findAll();
     
        $data= [
            'title'=> 'DATA OBAT',
            // 'obat'=>$obat
            'obat' => $obatModel->paginate(9,"page"),
            'pager' => $obatModel->pager,
        ];
        return view("pages/User/semuaObat",$data);
>>>>>>> Stashed changes
    }
}