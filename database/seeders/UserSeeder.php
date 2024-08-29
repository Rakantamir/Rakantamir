<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin123')
            ],
            // [
            //     'name' => 'Kasir',
            //     'email' => 'kasir@gmail.com',
            //     'role' => 'petugas',
            //     'password' => bcrypt('12108423')
            // ],
        ];

        foreach($userData as $key => $value) {
            User::create($value);
        }
    }
}