<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10 ; $i++) {
        $newPost = new Post();
        $newPost->titolo = $faker->sentence($nbWords = 6, $variableNbWords = true);
        $newPost->slug = Str::slug($newPost->titolo);
        $newPost->img = 'https://picsum.photos/id/'. rand(1, 100) .'/300/200';
        $newPost->descrizione = $faker->text($maxNbChars = 600) ;
        $newPost->autore = $faker->name;
        $newPost->save();
      }
    }
}
