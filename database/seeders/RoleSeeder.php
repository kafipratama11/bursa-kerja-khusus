<?php

namespace Database\Seeders;

use App\Models\Employe;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::updateOrCreate([
            'name' => 'admin',
        ],
        ['name' => 'admin']
    );
        $role_user = Role::updateOrCreate([
        'name' => 'user',
        ],
        ['name' => 'user']
        );
        $role_employer = Role::UpdateOrCreate(['name' => 'employer', 'guard_name' => 'employe']);
        $role_new_account = Role::UpdateOrCreate(['name' => 'new_account', 'guard_name' => 'employe']);
        
        $permission1 = Permission::updateOrCreate(
            [
                'name' => 'view_dashboard',
            ],
            ['name' => 'view_dashboard']
        );
        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'view_index',
            ],
            ['name' => 'view_index']
        );
        $permission3 = Permission::updateOrCreate(
            ['name' => 'create_work', 'guard_name' => 'employe'],
            ['name' => 'create_work', 'guard_name' => 'employe']
        );
        $permission4 = Permission::updateOrCreate(
            ['name' => 'guest', 'guard_name' => 'employe'],
            ['name' => 'guest', 'guard_name' => 'employe']
        );



        $role_admin->givePermissionTo($permission1);
        $role_user->givePermissionTo($permission2);
        $role_employer->givePermissionTo($permission3);
        $role_new_account->givePermissionTo($permission4);

        
        $admin = User::find(1);
        $admin->assignRole('admin');

        $user = User::find(3);
        $user->assignRole('user');


        


    }
}