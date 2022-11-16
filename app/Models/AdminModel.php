<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'id_admin';

    protected $useAutoIncrement = true;


    protected $allowedFields = ['id_admin','username', 'password','email'];
}
