<?php

use Illuminate\Database\Seeder;
use App\Post;

class postsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts =[

            [
                'category_id' => '1',
                'title' => 'how to do',
                'slug' =>  'how-to-do',
                'sub_title' => 'right mode',
                'image' => 'https://www.andreapostiglione.com/wp-content/uploads/2018/12/ikusocial-instagram.jpg',
                'description' => 'Come programmare post su Instagram: le migliori app del 2022'
            ],
            [
                'category_id' => '3',
                'title' => 'post it',
                'slug' =>  'post-it',
                'sub_title' => 'digital postit',
                'image' => 'https://m.media-amazon.com/images/I/51l5hwXkL6L._AC_UL320_.jpg',
                'description' => 'post it digitali ecco come farli'
    
            ],
            [
                'category_id' => '2',
                'title' => 'easy to learn',
                'slug' =>  'easy-to-learn',
                'sub_title' => 'lear the best lenguages',
                'image' => 'https://www.zdnet.com/a/img/resize/9151b91cafde5c91e641ad222aa3e8b820566999/2021/07/19/8a337c80-5ed6-43a1-98fb-b981d420890f/programming-languages-shutterstock-1680857539.jpg?width=1200&height=900&fit=crop&auto=webp',
                'description' => 'Coding can be challenging, particularly for beginners. New programmers often benefit from starting with an easier programming language.'
    
            ]
            ];

        foreach($posts as $post){
            $_post = new Post();
            $_post->category_id = $post['category_id'];
            $_post->title = $post['title'];
            $_post->slug = $post['slug'];
            $_post->sub_title = $post['sub_title'];
            $_post->image = $post['image'];
            $_post->description = $post['description'];
            $_post->save();
        }
    }
}
