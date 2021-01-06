<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class moviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // drama
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "Crash Landing On You",
            'photo' => "Crash Landing On You.jpg",
            'description' => 'The absolute top secret love story of a chaebol heiress who made an emergency landing in North Korea because of a paragliding accident and a North Korean special officer who falls in love with her and who is hiding and protecting her.',
            'rating' => '4',
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "Hotel Del Luna",
            'photo' => "Hotel Del Luna.jpg",
            'description' => 'When hes invited to manage a hotel for dead souls, an elite hotelier gets to know the establishments ancient owner and her strange world.',
            'rating' => '5',
           
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "Guardian: The Lonely and Great God ",
            'photo' => "Goblin.jpg",
            'description' => 'In his quest for a bride to break his immortal curse, Dokkaebi, a 939-year-old guardian of souls, meets a grim reaper and a sprightly student with a tragic past.',
            'rating' => '5',
           
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "The Heirs",
            'photo' => "Heirs.jpg",
            'description' => 'After a chance encounter in LA, two teens from different social backgrounds reunite at an exclusive high school attended by Koreas über rich.',
            'rating' => '4',
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "It is Okay Not to Be Okay",
            'photo' => "okay.jpg",
            'description' => 'An extraordinary road to emotional healing opens up for an antisocial childrens book writer and a selfless psych ward caretaker when they cross paths.',
            'rating' => '5',
           
        ]);
        // kids 
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "Pikachu",
            'photo' => "Pikachu.jpg",
            'description' => 'In a world where people collect Pokémon to do battle, a boy comes across an intelligent talking Pikachu who seeks to be a detective.',
            'rating' => '3',  
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "Spongebob Squarepants",
            'photo' => "Sponge.jpg",
            'description' => 'The misadventures of a talking sea sponge who works at a fast food restaurant, attends a boating school, and lives in an underwater pineapple.',
            'rating' => '5',  
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "Minions",
            'photo' => "Minion.jpg",
            'description' => 'Minions Stuart, Kevin, and Bob are recruited by Scarlet Overkill, a supervillain who, alongside her inventor husband Herb, hatches a plot to take over the world.',
            'rating' => '4',  
        
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "The Fairly OddParents",
            'photo' => "Fairy.jpg",
            'description' => 'After being tortured and humiliated by his babysitter, a ten year old boy is put under the care of two fairy godparents, who can grant him almost any wish, which leads to dire consequences.',
            'rating' => '4',  
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "Naruto",
            'photo' => "Naruto.png",
            'description' => 'Naruto Uzumaki, a mischievous adolescent ninja, struggles as he searches for recognition and dreams of becoming the Hokage, the villages leader and strongest ninja.',
            'rating' => '5',  
        
        ]);
        //tv show
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "The Thundermans",
            'photo' => "th.jpg",
            'description' => 'These siblings with superpowers might be twins, but they are very different indeed.',
            'rating' => '3',
            ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "The Arrow",
            'photo' => "Arrow.jpg",
            'description' => 'Spoiled billionaire playboy Oliver Queen is missing and presumed dead when his yacht is lost at sea. He returns five years later a changed man, determined to clean up the city as a hooded vigilante armed with a bow.',
            'rating' => '4',
            ]);  
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "The Flash",
            'photo' => "Flash.jpg",
            'description' => 'After being struck by lightning, Barry Allen wakes up from his coma to discover hes been given the power of super speed, becoming the next Flash, fighting crime in Central City.',
            'rating' => '4',
            ]);  
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "Runningman",
            'photo' => "RM.jpg",
            'description' => 'A variety show in which cast members will go to a South Korean landmark and play games there. There are several games to be played within the landmark.',
            'rating' => '5',
            ]);  
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "Knowing Brothers",
            'photo' => "Bro.jpg",
            'description' => 'variety show, where the cast members and guests gather in a classroom environment and discuss personal topics.',
            'rating' => '4',
            ]);     
    }
}
