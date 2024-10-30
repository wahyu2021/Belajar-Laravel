<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all(){
        return [
            [
                'title' => 'Judul Artikel 1',
                'slug' => 'judul-artikel-1',
                'author' => 'Wahyu',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, unde, nisi sequi harum magnam, a impedit eius dicta officia excepturi corporis sit commodi inventore id ad error nam facere reiciendis.',
                'id' => 1
            ],
            [
                'title' => 'Judul Artikel 2',
                'slug' => 'judul-artikel-2',
                'author' => 'Wahyu',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis, iste sunt! Dicta cupiditate quisquam officiis facere ipsum iure repudiandae molestias assumenda eaque, est laudantium delectus et libero vitae similique! Officiis?',
                'id' => 2
            ]
        ];
    }

    public static function find($slug){
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(!$post){
            abort(404);
        }

        return $post;
    }
}