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
        $user = User::create([
            'name' => 'Walter Maximiliano Ramos',
            'email' => 'licenciadowalterramos@gmail.com',
            'password' => bcrypt('Nicolas2908')
        ]);

        $user->assignRole('Admin');
    }
}
