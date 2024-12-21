<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::create(['name' => 'főétel']);
        Category::create(['name' => 'leves']);
        Category::create(['name' => 'édesség']);
        Category::create(['name' => 'saláta']);

        $főétel = Category::where('name', 'főétel')->first();
        $leves = Category::where('name', 'leves')->first();
        $édesség = Category::where('name', 'édesség')->first();
        $saláta = Category::where('name', 'saláta')->first();

        Recipe::create([
            'name' => 'Grill csirke',
            'cat_id' => $főétel->id,  
            'desc' => 'Finom grill csirke étel, tökéletes a nyári estékhez.',
            'url' => 'https://plus.unsplash.com/premium_photo-1695931844305-b5dd90ab6138?q=80&w=3744&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            
        ]);

        Recipe::create([
            'name' => 'Húsleves',
            'cat_id' => $leves->id,
            'desc' => 'A klasszikus húsleves, amit mindenki szeret.',
            'url' => 'https://images.unsplash.com/photo-1555126634-323283e090fa?q=80&w=3035&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
           
        ]);

        Recipe::create([
            'name' => 'Csokoládé torta',
            'cat_id' => $édesség->id,
            'desc' => 'Egy igazán finom csokoládé torta, amit érdemes kipróbálni.',
            'url' => 'https://images.unsplash.com/photo-1626803775151-61d756612f97?q=80&w=3870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'

            
        ]);

        Recipe::create([
            'name' => 'Cézár saláta',
            'cat_id' => $saláta->id,
            'desc' => 'Friss és ínycsiklandó cézár saláta.',
             'url' => 'https://images.unsplash.com/photo-1505253716362-afaea1d3d1af?q=80&w=3648&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            
        ]);






    }
}
