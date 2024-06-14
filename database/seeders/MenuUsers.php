<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            [
                'user_id' => 1,
                'menu_id' => 1
            ],
            [
                'user_id' => 1,
                'menu_id' => 3
            ],
            [
                'user_id' => 1,
                'menu_id' => 4
            ],
            [
                'user_id' => 1,
                'menu_id' => 5
            ],
            [
                'user_id' => 1,
                'menu_id' => 6
            ],
            [
                'user_id' => 2,
                'menu_id' => 2
            ],
            [
                'user_id' => 2,
                'menu_id' => 3
            ],
        );

        DB::table('menu_users')->insert($data);
    }
}
