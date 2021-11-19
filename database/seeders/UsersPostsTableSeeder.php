<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class UsersPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => '1',
            'text' => 'Vista do apartamento'
        ]);

        Post::create([
            'user_id' => '1',
            'text' => 'Viagem no fim de semana'
        ]);

        Post::create([
            'user_id' => '1',
            'text' => 'Sextou.'
        ]);

        Post::create([
            'user_id' => '2',
            'text' => 'Trânsito pesado...'
        ]);

        Post::create([
            'user_id' => '2',
            'text' => 'Finalmente podendo viajar de novo'
        ]);

        Post::create([
            'user_id' => '2',
            'text' => 'De volta aos jogos!'
        ]);

        Post::create([
            'user_id' => '3',
            'text' => 'Palestra da semana'
        ]);

        Post::create([
            'user_id' => '3',
            'text' => 'Banho e tosa, petshop. Contato: 980808080'
        ]);

        Post::create([
            'user_id' => '3',
            'text' => 'Poderemos ter carnaval esse ano!'
        ]);
    }
}
