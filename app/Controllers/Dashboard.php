<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataKasirModel;
use App\Models\DataObatModel;

class Dashboard extends BaseController
{
    public function dashboard(){
        $kasir = new DataKasirModel();
        $obat = new DataObatModel();

        $dataKasir = $kasir->countAllData();
        $dataObat = $obat->countAllData();

        $data = [
            'title' => 'Dashboard',
            'kasir' => $dataKasir,
            'obat' => $dataObat
        ];
        return view('pages\dashboard', $data);
    }
}
