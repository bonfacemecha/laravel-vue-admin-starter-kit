<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name' => 'bonf',
            'email' => 'admin@gmail.com',
            'role_id' => User::ADMIN,
            'password' => Hash::make('12345678@'),
        ]);
        User::Create([
            'name' => 'bonf',
            'email' => 'candidate@gmail.com',
            'role_id' => User::CANDIDATE,
            'password' => Hash::make('12345678@'),
        ]);
    }
}
