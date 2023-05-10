<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get data from comics.php in config folder
        $comicsArray = config('comics');
        

        foreach($comicsArray as $comic){
            $newComic = new Comic();

            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];

            //Remove $ sign from string
            $price = ltrim($comic['price'], '$');
            $newComic->price = $price;

            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];

            //Conver array to string
            $artists = implode(', ',$comic['artists']);
            $newComic->artists = $artists;
            
            $writers = implode(', ',$comic['writers']);
            $newComic->writers = $writers;

            $newComic->save();
        }
        
    }
}
