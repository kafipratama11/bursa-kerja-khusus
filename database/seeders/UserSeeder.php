<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\ProfileUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'nisn'      => '001',
        //     'name'      => 'admin',
        //     'password'  => 'admin',
        // ]);
        // User::create([
        //     'nisn'      => '002',
        //     'name'      => 'user',
        //     'password'  => 'user',
        // ]);
        // ProfileUser::create([
        //     'user_id'   => '002',
        //     'jk'        => 'she/her',
        // ]);
        User::create([
            'nisn'      => '003',
            'name'      => 'user',
            'password'  => 'user',
        ]);
        ProfileUser::create([
            'user_id'   => '003',
            'jk'        => 'she/her',
        ]);
    }
}