<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-delete',
            'role-edit',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'menu-list',
            'menu-create',
            'menu-edit',
            'menu-delete',
            'artikel-list',
            'artikel-create',
            'artikel-edit',
            'artikel-delete',
        ];
        
        foreach ($permissions as $permission) {
            $toPermission = Permission::firstOrCreate([
                'name' => $permission
            ]);

            // $toPermission->syncRoles('super admin');
        }
    }
}
