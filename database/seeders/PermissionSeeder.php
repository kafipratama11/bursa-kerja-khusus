<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
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

        $role_admin->givePermissionTo($permission1);
        $role_admin->givePermissionTo($permission2);
        $role_user->givePermissionTo($permission2);

        $user = User::find(1);
        $user2 = User::find(2);

        $user->assignRole('admin');
        $user2->assignRole('user');
    }
<<<<<<< HEAD
}

=======
}
>>>>>>> 514067c6137a12c83e5152ee1b3333df7f776c04
