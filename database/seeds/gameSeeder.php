<?php

use Illuminate\Database\Seeder;
use App\Game;

class gameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games =[

            [
                
                'name' => 'code combat',
                'cover' =>  'https://www.smartweek.it/wpsw/wp-content/uploads/2015/09/maxresdefault-2.jpg',
                'description' => 'impara a programmare grazie a code combat',
                'price' => 10.00,
            ],
            [
                
                'name' => 'js poker',
                'cover' =>  'https://www.italiapokerclub.com/wp-content/uploads/2021/12/Gridpoker-1024x604.jpg',
                'description' => 'sai giocare a poker? divertiti con js poker, gioca programma e impara!',
                'price' => 39.99,
               
    
            ],
            [
                
                'name' => 'astro code',
                'cover' =>  'https://media-assets.wired.it/photos/615ee5830de1928b4ed5dae9/master/pass/1445114588_tinker.jpg',
                'description' => 'lear loop and variations with fun',
                'price' => 12.99,
                
            ],
            [
                
                'name' => 'space x',
                'cover' =>  'http://images.wired.it/wp-content/uploads/2015/10/1444941129_thefoos.jpeg',
                'description' => 'spara ai bug e risolvili imparando',
                'price' => 5.99,
                
            ],
            [
                
                'name' => 'rubbit design',
                'cover' =>  'https://www.cybermarket.it/media/blog/131/det_Doodle%20programmazione%20per%20bambini.jpg',
                'description' => 'ui design in in gioco completamente gratuito',
                'price' => 0.00,
                
            ],
            [
                
                'name' => 'kano',
                'cover' =>  'http://blog.kano.me/content/images/2017/02/lovelacescreen-1.png',
                'description' => 'coding for kids in this amazing game',
                'price' => 30.01,
                
            ]
            ];

        foreach($games as $game){
            $_game = new Game();
            $_game->name = $game['name'];
            $_game->cover = $game['cover'];
            $_game->description = $game['description'];
            $_game->price = $game['price'];
            $_game->description = $game['description'];
            $_game->save();
        }
    }
}
