<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::firstOrCreate([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@demo.com',
            'password' => Hash::make('admin')
        ]);

        $superadmin = User::firstOrCreate([
                'name' => 'super admin',
                'username' => 'superadmin',
                'email' => 'superadmin@demo.com',
                'password' => Hash::make('superadmin')
        ]);

        $admin->assignRole('admin');
        $superadmin->assignRole('super admin')->givePermissionTo(Permission::all());

    }
}
