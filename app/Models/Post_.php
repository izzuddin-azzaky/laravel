<?php

namespace App\Models;


class post 
 { 
    private static $blog_posts =  [
      [
        "title" => "Judul post pertama",
        "slug" => "judul-post-pertama",
        "author" => "ronaldo",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam quibusdam rerum odio reiciendis nesciunt. Mollitia quidem perferendis excepturi explicabo repellat autem quo atque nobis commodi corporis. Nisi incidunt aliquid laboriosam."
      ],
      [
        "title" => "Judul post kedua",
        "slug" => "judul-post-kedua",
        "author" => "messi",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam quibusdam rerum odio reiciendis nesciunt. Mollitia quidem perferendis excepturi explicabo repellat autem quo atque nobis commodi corporis. Nisi incidunt aliquid laboriosam."
      ],
  ];

  public static function all()
  {
    return collect(self::$blog_posts);
  }

  public static function find($slug)
  {
    $posts = static::all();
    //    $post = [];
    // foreach($posts as $p) {
    //   if($p["slug"] === $slug) {
    //     $post = $p;

    //   }
    // }

    return $posts->firstwhere('slug', $slug);
  }
}
 