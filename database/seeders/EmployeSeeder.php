<?php

namespace Database\Seeders;

use App\Models\Employe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employe::create([
            'email'      => 'hosting@gmail.com',
            'name'  => 'Software Host Jakarta',
            'password'  => 'hosting',
            'lokasi'  => 'oke',
            'no_telp'  => '099191818',
            'deskripsi'  => 'jfhfhhfhfhhhhchdhdhdjcdd',
        ]);
    }
}
