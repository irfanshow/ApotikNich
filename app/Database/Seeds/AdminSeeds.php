<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeds extends Seeder
{
    public function run()
    {
        $data = [
                'email' => 'admin@example.com',
                'username'  => 'admin',
                'password'  =>  password_hash(123,PASSWORD_DEFAULT),
                
            
            ];
            $this->db->table('admin')->insert($data);
    } 
}
