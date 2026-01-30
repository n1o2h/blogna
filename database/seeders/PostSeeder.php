<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$categorie = Categorie::factory(1)->create();
        Post::factory()
            ->count(3)
            ->for(Categorie::factory(), 'categorie')
            ->create();
    }
}
