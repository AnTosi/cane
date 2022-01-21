<?php

use App\Models\Game;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 20; $i++) { 
            # code...
            $_game = new Game();
            $_game->title = $faker->sentence(3);
            $_game->cover = $faker->imageUrl(300, 200);
            $_game->description = $faker->paragraph(3, true);
            $_game->is_available = $faker->boolean(70);
            $_game->save();

        }
    }
}
