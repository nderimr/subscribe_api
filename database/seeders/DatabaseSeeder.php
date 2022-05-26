<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();
        $faker = Faker::create(); 
        for($i=1;$i<35;$i++)
        {
            
            DB::table('posts')->insert([
                'title' => $faker->realText(30,3),
                'content' => $faker->realText(300,3),
                'description' => $faker->realText(50,3),
                'author' => $faker->name()
                             
            ]);    
        
            DB::table('websites')->insert([
                'url' => $faker->url,
                'description' => $faker->realText(50,3)
            ]); 
        }
    }
}
