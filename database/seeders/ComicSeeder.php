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
        $_comics = config('db.comic');
        foreach($_comics as $_comic){


            $comic = new Comic();
           

            $comic->fill($_comic);

            $comic->save();

        }


    }
}
