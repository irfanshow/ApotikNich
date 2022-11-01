<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKasirModel extends Model
{
    protected $table            = 'kasir';
    protected $primaryKey       = 'id_kasir';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_kasir','nama_kasir'];

    public function countAllData(){
        return $this->countAllResults();
    }
}
