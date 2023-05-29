<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comic_data = config('dbseeder');

        foreach($comic_data as $comic){
            $newComic = new comic();

            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->series = $comic['series'];
            $newComic->price = $comic['price'];
            $newComic->type = $comic['type'];

            $newComic->save();
        }

    }
}
