<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permision = [
           [
               'name' => 'role-read',
               'display_name' => 'Display role listing',
               'description' => 'See only listing of Role'  
           ],
           [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create new Role'  
           ],
           [
                'name' => 'role-edit',
                'display_name' => 'Edit Role',
                'description' => 'Edit Role'  
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'  
            ],
            [
                'name' => 'ban-list',
                'display_name' => 'Display bans listing',
                'description' => 'See only listing of Bans'  
            ],
            [
                'name' => 'ban-create',
                'display_name' => 'Create Bans',
                'description' => 'Create new Bans'  
            ],
            [
                'name' => 'ban-edit',
                'display_name' => 'Edit Bans',
                'description' => 'Edit Bans'  
             ],
             [
                'name' => 'ban-delete',
                'display_name' => 'Delete Bans',
                'description' => 'Delete Bans'  
             ],
        ];
        foreach($permision as $key=>$value){
            Permission::create($value);
        }
    }
}
