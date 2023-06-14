<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datiComics = config('db');

        foreach ($datiComics as $elem) {
            $comic = new comic();
            $comic->title = $elem['title'];
            $comic->description = $elem['description'];
            $comic->thumb = $elem['thumb'];
            $comic->price = $elem['price'];
            $comic->series = $elem['series'];
            $comic->sale_date = $elem['sale_date'];
            $comic->type = $elem['type'];
            $comic->save();
        }
    }
}
