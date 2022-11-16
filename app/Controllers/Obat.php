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
    public function create(){
        $data = [
            'title' => 'Form Tambah Data Obat'
        ];
        return view('pages\create' , $data);

    }

    public function saveObat()
    {
        $file = $this->request->getFile('foto_obat');
        if(!$this->validate([
            'nama_obat' => 'required',
            'harga_obat' =>'required',
            'stok_obat'=>'required',
            'deskripsi_obat'=>'required',
            // 'foto_obat'=>'required'
        ])){
            return redirect()->to('/create');
        }
        $obatModel = new DataObatModel();
        $data=[
            'nama_obat' => $this->request->getPost('nama_obat'),
            'harga_obat'=> $this->request->getPost('harga_obat'),
            'stok_obat'=>$this->request->getPost('stok_obat'),
            'deskripsi_obat'=>$this->request->getPost('deskripsi_obat'),
            'foto_obat'=>$this->request->getFile('foto_obat')

        ];

        $obatModel->save($data);
        $nama = $file ->getRandomName();
        $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/obat');
    }

    public function edit($id_obat){
        $obatModel = new DataObatModel();
        $obat = $obatModel->find($id_obat);

        $data = [
            'title' => ' Edit Obat',
            'obat' =>$obat
        ];
        return 
            view('pages/edit' , $data);
    }

    public function update($id_obat)
    {
        if(!$this->validate([
            'nama_obat' => 'required',
            'harga_obat' =>'required',
            'stok_obat'=>'required',
            'deskripsi_obat'=>'required' 
        ])){
            return redirect()->to('/edit/'.$id_obat);
        }
        $obatModel = new DataObatModel();
        $data=[
            'nama_obat' => $this->request->getPost('nama_obat'),
            'harga_obat'=> $this->request->getPost('harga_obat'),
            'stok_obat'=>$this->request->getPost('stok_obat'),
            'deskripsi_obat'=>$this->request->getPost('deskripsi_obat'),
            'foto_obat'=>$this->request->getFile('foto_obat')
        ];

        $obatModel->update($id_obat, $data);
        return redirect()->to('/obat');
    }

    public function delete($id_obat)
    {
        $obatModel = new DataObatModel();
        $obatModel->delete($id_obat);
    
        return redirect()->to('/obat');
    
    }
}
