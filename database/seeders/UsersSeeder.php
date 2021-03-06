<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'Justas',
                'email' => 'justas@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('123'),
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}