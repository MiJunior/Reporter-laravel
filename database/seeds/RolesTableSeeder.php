<?php

use App\PermissionRole;
use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Admin',
                'description' => 'Administrator'
            ],
            [
                'name' => 'user',
                'display_name' => 'User',
                'description' => ''
            ],
            [
                'name' => 'gm',
                'display_name' => 'GM',
                'description' => 'Game Master'
            ]
        ];
        foreach ($roles as $key => $value) {
            Role::create($value);
        }

    }
}
