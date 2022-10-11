<?php

namespace App\Controllers;

use App\Models\DataObatModel;

class Obat extends BaseController
{
    public function index()
    {
        $obatModel = new DataObatModel();
        $obat = $obatModel->findAll();
     
        $data= [
            'title'=> 'DATA OBAT',
            'obat'=>$obat
        ];

        return view('pages/ViewObat', $data);
    }
}
