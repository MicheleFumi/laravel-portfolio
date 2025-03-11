<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostTableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->word();
            $newPost->author = $faker->name();
            $newPost->content = $faker->paragraph();
            $newPost->type_id = $faker->numberBetween(1, 5);
            $newPost->save();
        }
    }
}
