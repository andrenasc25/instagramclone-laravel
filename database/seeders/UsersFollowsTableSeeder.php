<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersFollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into users_follows
            (user_id, followed_user_id, created_at)
            values (?,?,?)',
            [1, 2, '2021-11-05 19:49:41']
        );
        
        DB::insert('insert into users_follows
            (user_id, followed_user_id, created_at)
            values (?,?,?)',
            [2, 1, '2021-11-05 19:50:09']
        );

        DB::insert('insert into users_follows
            (user_id, followed_user_id, created_at)
            values (?,?,?)',
            [3, 2, '2021-11-05 20:08:01']
        );

        DB::insert('insert into users_follows
            (user_id, followed_user_id, created_at)
            values (?,?,?)',
            [3, 1, '2021-11-05 20:08:08']
        );

        DB::insert('insert into users_follows
            (user_id, followed_user_id, created_at)
            values (?,?,?)',
            [1, 3, '2021-11-05 20:08:37']
        );

        DB::insert('insert into users_follows
            (user_id, followed_user_id, created_at)
            values (?,?,?)',
            [2, 3, '2021-11-05 20:08:52']
        );
    }
}
