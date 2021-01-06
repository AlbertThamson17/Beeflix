<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(genresSeeder::class);
         $this->call(moviesSeeder::class);
         $this->call(episodesSeeder::class);
    }
}
