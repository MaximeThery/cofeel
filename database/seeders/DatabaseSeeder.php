<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'title'=>Str::random(10),
            'url' =>"https://orangefreesounds.com/wp-content/uploads/2022/01/Tropical-birds-sounds.mp3",
            'note'=>rand(0,20),
            'user_id' => 1
        ]);

        DB::table('songs')->insert([
            'title'=>Str::random(10),
            'url' =>"https://sounds-mp3.com/mp3/0012547.mp3",
            'note'=>rand(0,20),
            'user_id' => 1
        ]);
        DB::table('songs')->insert([
            'title'=>Str::random(10),
            'url' =>"https://www.soundeffectsplus.com/uploads/prod_audio/40052174_money-coins-in-hand-03.mp3",
            'note'=>rand(0,20),
            'user_id' => 2
        ]);

        DB::table('users')->insert([
            'name' => "maxime",
            'email' => 'maxianus@gmail.com',
            'password' => Hash::make('1234')
        ]);

        DB::table('users')->insert([
            'name' => "lucasse",
            'email' => 'lucasse@gmail.com',
            'password' => Hash::make('1234')
        ]);
    }
}
