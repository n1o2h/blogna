<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\DocBlock\Tags\Factory\Factory;

class CategorieSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categorie = Categorie::factory(2)
            ->has(Post::factory()->count(3), 'post')
            ->create();
//        $categories = factory(Categorie::class, 3)
//        ->create()
//            ->each(function ($u){
//                $u->posts()->save(factory(Post::class)->make());
//            });

    }
}
