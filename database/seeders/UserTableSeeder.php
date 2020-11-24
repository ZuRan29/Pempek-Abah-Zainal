<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
=======
use Spatie\Permission\Models\Permission;
>>>>>>> indonesia

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        User::firstOrCreate(
            [
                'name' => 'admin',
                'email' => 'admin@demo.com',
                'password' => Hash::make('123123')
            ]
        );
=======
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

>>>>>>> indonesia
    }
}
