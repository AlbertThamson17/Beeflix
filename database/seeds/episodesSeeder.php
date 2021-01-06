<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class episodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Episode Movie
        DB::table('episodes')->insert([
            'movie_id' => 1,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1,
            'episodes'=> 'Episode 2',
            'title'=> 'Hiding'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1,
            'episodes'=> 'Episode 3',
            'title'=> 'Bold'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1,
            'episodes'=> 'Episode 4',
            'title'=> 'I Am Home'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 2,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 2,
            'episodes'=> 'Episode 2',
            'title'=> 'Love'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 2,
            'episodes'=> 'Episode 3',
            'title'=> 'Goodbye'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 3,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 3,
            'episodes'=> 'Episode 2',
            'title'=> 'Hello'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 3,
            'episodes'=> 'Episode 3',
            'title'=> 'The Bride'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 3,
            'episodes'=> 'Episode 4',
            'title'=> 'The Sword'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 4,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 4,
            'episodes'=> 'Episode 2',
            'title'=> 'Tan'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 4,
            'episodes'=> 'Episode 3',
            'title'=> 'Twist'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 5,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 5,
            'episodes'=> 'Episode 2',
            'title'=> 'Children'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 5,
            'episodes'=> 'Episode 3',
            'title'=> 'Book'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 5,
            'episodes'=> 'Episode 4',
            'title'=> 'You'
        ]);
        //Episode Kids
        DB::table('episodes')->insert([
            'movie_id' => 6,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 6,
            'episodes'=> 'Episode 2',
            'title'=> 'Movie'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 6,
            'episodes'=> 'Episode 3',
            'title'=> 'Ending'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 7,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 7,
            'episodes'=> 'Episode 2',
            'title'=> 'Sponge'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 7,
            'episodes'=> 'Episode 3',
            'title'=> 'Patrick'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 7,
            'episodes'=> 'Episode 4',
            'title'=> 'Squidward'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 8,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 8,
            'episodes'=> 'Episode 2',
            'title'=> 'King Bob'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 8,
            'episodes'=> 'Episode 3',
            'title'=> 'SuperVillain'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 9,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 9,
            'episodes'=> 'Episode 2',
            'title'=> 'Fairies'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 9,
            'episodes'=> 'Episode 3',
            'title'=> 'Crocker'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 10,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 10,
            'episodes'=> 'Episode 2',
            'title'=> 'Naruto'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 10,
            'episodes'=> 'Episode 3',
            'title'=> 'Sasuke'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 10,
            'episodes'=> 'Episode 4',
            'title'=> 'End'
        ]);
        //Episode tv Show
        DB::table('episodes')->insert([
            'movie_id' => 11,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 11,
            'episodes'=> 'Episode 2',
            'title'=> 'Twist'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 11,
            'episodes'=> 'Episode 3',
            'title'=> 'Phoebe'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 11,
            'episodes'=> 'Episode 4',
            'title'=> 'Ending'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episodes'=> 'Episode 2',
            'title'=> 'Missing'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episodes'=> 'Episode 3',
            'title'=> 'i am back'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 13,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 13,
            'episodes'=> 'Episode 2',
            'title'=> 'Lightning Struck'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 13,
            'episodes'=> 'Episode 3',
            'title'=> 'I Am FLASH'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 13,
            'episodes'=> 'Episode 4',
            'title'=> 'Lights out'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 14,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 14,
            'episodes'=> 'Episode 2',
            'title'=> 'Beginning'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 14,
            'episodes'=> 'Episode 3',
            'title'=> 'Runningman Forever'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 14,
            'episodes'=> 'Episode 4',
            'title'=> 'New Member'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 15,
            'episodes'=> 'Episode 1',
            'title'=> 'Pilot'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 15,
            'episodes'=> 'Episode 2',
            'title'=> 'Brother'
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 15,
            'episodes'=> 'Episode 3',
            'title'=> 'Special Guest'
        ]);
    }
}
