<?php

use Illuminate\Database\Seeder;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $characters = config('db_characters.characters');

        foreach($characters as $character) {
            $newCharacter = new Character();
            $newCharacter->name = $character['name'];
            $newCharacter->description = $character['description'];
            $newCharacter->img = $character['img'];
            $newCharacter->cover_img = $character['cover_img'];
            $newCharacter->powers = $character['powers'];
            $newCharacter->first_apparance = $character['first_apparance'];
            $newCharacter->save();
        }
    }
}
