<?php

namespace App\Models;

use CodeIgniter\Model;

class DataObatModel extends Model
{
    protected $table            = 'data_obat';
    protected $primaryKey       = 'id_obat';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_obat', 'harga_obat','stok_obat','deskripsi_obat'];



}
