<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\Category;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function definition():array
    {
        return [
            'name' => fake()->text(),
            'cat_id' => Category::all()->random()->id,
            'desc' => fake()->text(),
            'url' => fake()->text()

             
         ];
        
    }
}


