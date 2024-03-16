<?php

namespace Database\Seeders;

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
        User::create([
            'nisn'      => '002',
            'name'  => 'admin',
            'password'  => 'admin',
        ]);
        User::create([
            'nisn'      => '001',
            'name'  => 'user',
            'password'  => 'user',
        ]);
    }
}