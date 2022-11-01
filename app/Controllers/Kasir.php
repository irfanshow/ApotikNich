<?php

namespace App\Controllers;

use App\Models\DataKasirModel;

class Kasir extends BaseController
{
    public function index(){
        $KasirModel = new DataKasirModel();
        $kasir = $KasirModel->findAll();
     
        $data= [
            'title'=> 'DATA KASIR',
            'kasir'=>$kasir
        ];

        return view('pages/Admin/Kasir/ViewKasir', $data);
    }

    public function tambahKasir(){
        $data = [
            'title' => 'Form Tambah Data Kasir'
        ];
        return view('pages\Admin/Kasir/tambahKasir' , $data);
    
    }
    public function saveDataKasir()
    {
        if(!$this->validate([
            'nama_kasir' => 'required',
        ])){
            return redirect()->to('/tambahKasir');
        }
        $KasirModel = new DataKasirModel();
        $data=[
            'nama_kasir' => $this->request->getPost('nama_kasir'),
        ];

        $KasirModel->save($data);
        return redirect()->to('/kasir');
    }
    public function editKasir($id_kasir){
        $KasirModel = new DataKasirModel();
        $kasir = $KasirModel->find($id_kasir);

        $data = [
            'title' => ' Edit Kasir',
            'kasir' =>$kasir
        ];
        return 
            view('pages/Admin/Kasir/editKasir' , $data);
    }
    public function updateKasir($id_kasir)
    {
        if(!$this->validate([
            'nama_kasir' => 'required', 
        ])){
            return redirect()->to('/editKasir/'.$id_kasir);
        }
        $KasirModel = new DataKasirModel();
        $data=[
            'nama_kasir' => $this->request->getPost('nama_kasir'),
        ];

        $KasirModel->update($id_kasir, $data);
        return redirect()->to('/kasir');
    }
    public function deleteKasir($id_kasir)
    {
        $KasirModel = new DataKasirModel();
        $KasirModel->delete($id_kasir);
    
        return redirect()->to('/kasir');
    
    }
}
