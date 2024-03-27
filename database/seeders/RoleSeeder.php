<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::updateOrCreate([
            'name' => 'admin',
        ],
        ['name' => 'admin']
    );
        Role::updateOrCreate([
        'name' => 'user',
        ],
        ['name' => 'user']
        );
        Role::updateOrCreate([
        'name' => 'new_account',
        ],
        ['name' => 'new_account']
        );
        Role::updateOrCreate([
        'name' => 'employer',
        ],
        ['name' => 'employer']
        );
    }
}
