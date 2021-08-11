<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Achmad Rifki",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum temporibus ipsam, quaerat excepturi magni nisi quidem nihil vitae! Corporis quis sit, excepturi quaerat rem in necessitatibus quia iusto dicta assumenda error ea voluptas commodi? Commodi quos quaerat neque, numquam quibusdam at aperiam id dolor earum expedita? Amet dolore porro alias qui ad facere corrupti, assumenda ea nihil ut fugit sunt pariatur nam, nesciunt maxime consequatur ullam aspernatur, est provident. Quibusdam voluptatibus itaque animi ipsam aspernatur tempora totam nisi recusandae, tenetur perspiciatis eius. Incidunt consectetur sit facilis cum! Dolore dignissimos accusantium, sequi exercitationem illum quaerat beatae ullam ipsum laboriosam enim reprehenderit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rava Akhtareez",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum temporibus ipsam, quaerat excepturi magni nisi quidem nihil vitae! Corporis quis sit, excepturi quaerat rem in necessitatibus quia iusto dicta assumenda error ea voluptas commodi? Commodi quos quaerat neque, numquam quibusdam at aperiam id dolor earum expedita? Amet dolore porro alias qui ad facere corrupti, assumenda ea nihil ut fugit sunt pariatur nam, nesciunt maxime consequatur ullam aspernatur, est provident. Quibusdam voluptatibus itaque animi ipsam aspernatur tempora totam nisi recusandae, tenetur perspiciatis eius. Incidunt consectetur sit facilis cum! Dolore dignissimos accusantium, sequi exercitationem illum quaerat beatae ullam ipsum laboriosam enim reprehenderit."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
