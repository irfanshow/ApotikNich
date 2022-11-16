<?php
namespace App\Controllers\Kasir;
use App\Controllers\BaseController;
use App\Models\DataObatModel;

class FunctionKasir extends BaseController{
    public function index()
    {

        $obatModel = new DataObatModel();
        $obat = $obatModel->findAll();
     
        $data= [
            'title'=> 'DATA OBAT',
            'obat'=>$obat
        ];
        return view("pages/Kasir/landingPageKasir",$data);
    }
    public function semuaObatKasir()
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
        return view("pages/Kasir/semuaObatKasir",$data);
    }
    public function cartView(){
        $obatModel = new DataObatModel();
        $obat = $obatModel->findAll();
     
        $data= [
            'title'=> 'DATA OBAT',
            'obat'=>$obat
        ];
        return view("pages/Kasir/cart",$data);
    }
}