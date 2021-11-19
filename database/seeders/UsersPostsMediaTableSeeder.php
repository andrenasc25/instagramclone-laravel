<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersPostsMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_posts_media')->insert([
            'user_post_id' => 1,
            'url' => 'dXNlckB1c2VyLmNvbXRlbXBvcmFyeTIwMjEtMTEtMTkgMjI6NTY6NTM=.jpg',
            'media_type' => 1
        ]);

        DB::table('users_posts_media')->insert([
            'user_post_id' => 2,
            'url' => 'dXNlckB1c2VyLmNvbXRlbXBvcmFyeTIwMjEtMTEtMTkgMjI6NTc6MTE=.jpg',
            'media_type' => 1
        ]);

        DB::table('users_posts_media')->insert([
            'user_post_id' => 3,
            'url' => 'dXNlckB1c2VyLmNvbXRlbXBvcmFyeTIwMjEtMTEtMTkgMjI6NTc6MjQ=.jpg',
            'media_type' => 1
        ]);

        DB::table('users_posts_media')->insert([
            'user_post_id' => 4,
            'url' => 'YW5vdGhlckB1c2VyLmNvbXRlbXBvcmFyeTIwMjEtMTEtMTkgMjM6MDE6MTc=.jpg',
            'media_type' => 1
        ]);

        DB::table('users_posts_media')->insert([
            'user_post_id' => 5,
            'url' => 'YW5vdGhlckB1c2VyLmNvbXRlbXBvcmFyeTIwMjEtMTEtMTkgMjM6MDE6Mjg=.jpg',
            'media_type' => 1
        ]);

        DB::table('users_posts_media')->insert([
            'user_post_id' => 6,
            'url' => 'YW5vdGhlckB1c2VyLmNvbXRlbXBvcmFyeTIwMjEtMTEtMTkgMjM6MDE6NDA=.jpg',
            'media_type' => 1
        ]);

        DB::table('users_posts_media')->insert([
            'user_post_id' => 7,
            'url' => 'dGhpcmRAdXNlci5jb210ZW1wb3JhcnkyMDIxLTExLTE5IDIzOjEyOjE3.jpg',
            'media_type' => 1
        ]);

        DB::table('users_posts_media')->insert([
            'user_post_id' => 8,
            'url' => 'dGhpcmRAdXNlci5jb210ZW1wb3JhcnkyMDIxLTExLTE5IDIzOjEyOjM0.jpg',
            'media_type' => 1
        ]);

        DB::table('users_posts_media')->insert([
            'user_post_id' => 9,
            'url' => 'dGhpcmRAdXNlci5jb210ZW1wb3JhcnkyMDIxLTExLTE5IDIzOjEzOjA0.jpg',
            'media_type' => 1
        ]);
    }
}
