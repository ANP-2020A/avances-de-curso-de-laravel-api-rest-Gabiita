<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    public function run()
    {
      //Vaciar la tabla.
        Article::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++) {
           Article::create(['title'=> $faker->sentence,'body'=> $faker->paragraph,]);
        }

    }
}
