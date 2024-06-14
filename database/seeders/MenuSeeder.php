<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            [
                'menuLevels_id' => 1,
                'menu_name' => 'Dashboard Admin',
                'menu_link' => '/dashboard-admin',
                'menu_icon' => 'test',
                'parent_id' => 0,
            ],
            [
                'menuLevels_id' => 1,
                'menu_name' => 'Dashboard Users',
                'menu_link' => '/dashboard-users',
                'menu_icon' => 'test',
                'parent_id' => 0,
            ],
            [
                'menuLevels_id' => 1,
                'menu_name' => 'Users',
                'menu_link' => '/users',
                'menu_icon' => 'test',
                'parent_id' => 0,
            ],
            [
                'menuLevels_id' => 1,
                'menu_name' => 'Activity Log',
                'menu_link' => '/activity-log',
                'menu_icon' => 'test',
                'parent_id' => 0,
            ],
            [
                'menuLevels_id' => 1,
                'menu_name' => 'Errors Log',
                'menu_link' => '/errors-log',
                'menu_icon' => 'test',
                'parent_id' => 0,
            ],
            [
                'menuLevels_id' => 1,
                'menu_name' => 'Users Privileges',
                'menu_link' => '/users-privileges',
                'menu_icon' => 'test',
                'parent_id' => 0,
            ],
        );

        DB::table('menus')->insert($data);
    }
}
