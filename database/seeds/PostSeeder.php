<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 12; $i++) {
            $_post = new Post();
            $_post->title = $faker->sentence();
            $_post->text = $faker->paragraphs(10, true);
            $_post->save();
        }
        
    }
}
