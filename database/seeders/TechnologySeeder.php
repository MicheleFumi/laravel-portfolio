<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $names = ['Dolby Digital', 'Unreal Engine', 'Steinberg Multimedia', 'react', 'php', 'social media'];

        foreach ($names as $name) {


            $newName = new Technology();
            $newName->name = $name;
            $newName->color = $faker->hexColor();
            $newName->save();
        }
    }
}
