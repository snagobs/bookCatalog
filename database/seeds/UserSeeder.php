<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class UserSeeder extends Seeder
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
                'name' => 'admin',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make(1234567890),
                'is_admin' => 1,
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'user',
                'email' => 'user@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make(11111111),
                'is_admin' => 0,
                'remember_token' => Str::random(10),
            ],
    ];

        foreach ($users as $user) {
            User::create(array(
                'name' => $user['name'],
                'email' => $user['email'],
                'email_verified_at' => $user['email_verified_at'],
                'password' => $user['password'],
                'is_admin' => $user['is_admin'],
                'remember_token' => $user['remember_token'],
            ));
        }
    }
}
