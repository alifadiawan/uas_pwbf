<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            [
                'name' => 'Administrator', 
                'nama_user' => 'administrator', 
                'email' => 'admin@gmail.com', 
                'jenis_user_id' => 1 ,
                // 'menu_id' => 1,
                'password' => bcrypt(12345678)
            ],
            [
                'name' => 'Muhammad Alif Adiawan', 
                'nama_user' => 'alippyy', 
                'email' => 'student@gmail.com', 
                'jenis_user_id' => 2,
                // 'menu_id' => 1,
                'password' => bcrypt(12345678)
            ]
        );

        DB::table('users')->insert($data);
    }
}
