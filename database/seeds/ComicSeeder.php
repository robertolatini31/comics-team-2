<?php
use App\Models\Comic;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker , Comic $comic)
    {
        //
        for ($i=0; $i < 10 ; $i++) {
            # code...
            $comic = new Comic();
            $comic->title = $faker->sentence(3);
            $comic->slug = Str::slug($comic->title,'-');
            $comic->cover_image = $faker->imageUrl(600, 300, 'comic', true, $comic->slug, true);
            $comic->content = $faker->text(500);
            $comic->save();
        }
    }
}
