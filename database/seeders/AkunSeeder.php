<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'password'=> bcrypt('123456'),
                'nama'=>'ini akun Admin',
               'alamat'=>'ini akun Admin',
               'no_hp'=>'ini akun Admin',
               'email'=>'admin@example.com',
                'role'=>'admin',
            ],
            [
                'username' => 'user',
                'password'=> bcrypt('123456'),
               'name'=>'ini akun User (non admin)',
               'alamat'=>'ini akun Admin',
               'no_hp'=>'ini akun Admin',
               'email'=>'user@example.com',
                'role'=>'user',
              
            ],
        ];
    }
}
