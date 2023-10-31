<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sugih Mohammad Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eius aut non accusamus provident praesentium, sit necessitatibus dolor fuga, architecto distinctio sapiente earum animi quidem unde veritatis in laborum officia asperiores nisi, numquam reprehenderit quo obcaecati! Explicabo voluptas veritatis, vel aperiam natus maiores amet at quae dolorum quos magni, veniam molestias quis nemo itaque, illum nam atque est animi. Incidunt quod qui iure ad. Eaque perferendis, iste distinctio sit assumenda explicabo omnis aliquid illum earum voluptates quidem voluptatem quas nostrum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sugih Mohammad Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias obcaecati modi placeat impedit atque, explicabo ipsum porro expedita distinctio aliquam dolorem temporibus? Obcaecati alias minima magni, pariatur accusamus, a provident, dolore temporibus iste vero asperiores. Velit, quos quae? At possimus iste eum velit ad error mollitia dignissimos, adipisci distinctio voluptate. Dolorem excepturi animi odit ea? Earum alias quia quas saepe quae expedita animi vel, ipsa dolor, iste dolorem maiores libero pariatur quibusdam itaque mollitia fuga vero qui sapiente dolores laboriosam voluptatem! Debitis assumenda voluptates placeat harum optio porro sint veniam tenetur ipsa? Provident adipisci quam quo ut deleniti molestiae voluptatum."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        //     $post = [];
        //     foreach($post as $p){
        //         if($p["slug"] == $slug){
        //             $post = $p;
        //         }
        //     }
        return $posts->firstWhere('slug', $slug);
    }
}