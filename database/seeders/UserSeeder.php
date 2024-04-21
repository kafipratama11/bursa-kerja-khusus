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
        //     'nisn'      => '003',
        //     'name'      => 'Muhammad Kafi Pratama',
        //     'password'  => '12345',
        // ]);
        ProfileUser::create([
            'user_id'   => '4',
            'jk'        => 'he/him',
        ]);
        
        // User::create([
        //     'nisn'      => '002',
        //     'name'      => 'user',
        //     'password'  => 'user',
        // ]);
        
        // ProfileUser::create([
        //     'user_id'   => '7',
        //     'jk'        => 'she/her',
        // ]);
    }
}