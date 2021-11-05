<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User Lastname',
            'username' => 'user',
            'email' => 'user@user.com',
            'password' => '$2y$10$ZWbrdNu4d4czYOs.vqbv0ulyPGSxSqBm1IhtgFdDZHIfRyO98gIuy',
            'user_access_level' => 1,
            'user_status' => 0,
            'email_verified_at' => '2021-11-05 20:49:37',
            'created_at' => '2021-11-05 17:48:57'
        ]);

        User::create([
            'name' => 'Another Surname',
            'username' => 'another',
            'email' => 'another@user.com',
            'password' => '$2y$10$FTzRvB1INkQNKpAmLmV5BOBbB1AnGESiaCnGHBxY5HJEU1phyWO3W',
            'user_access_level' => 1,
            'user_status' => 0,
            'email_verified_at' => '2021-11-05 21:28:34',
            'created_at' => '2021-11-05 18:28:01'
        ]);

        User::create([
            'name' => 'Third User',
            'username' => 'third',
            'email' => 'third@user.com',
            'password' => '$2y$10$JuE/wC0q04iBf49DQvEbUu8S.kXerZUGOUQB.srLIvxAT8xliBkg2',
            'user_access_level' => 1,
            'user_status' => 0,
            'email_verified_at' => '2021-11-05 23:05:09',
            'created_at' => '2021-11-05 20:04:38'
        ]);
    }
}
