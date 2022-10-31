<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Blog extends Model
// {
//     use HasFactory;
// }
class Blog
{
    private static $blog_post = [
        [
            "title" => "Judul Post satu",
            "slug" => "judul-post-satu",
            "author" => "Alvyn Papalia",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cum possimus reprehenderit. Nemo qui nostrum voluptatibus cum, maxime quisquam minus rem inventore eum optio voluptate repellat ex provident voluptates architecto? Porro inventore quo tenetur nulla maxime perspiciatis similique eveniet fuga aspernatur vel aliquam, nam quaerat accusamus repudiandae quod assumenda possimus doloribus adipisci modi ea iusto earum. Dolorum dolorem, facere dolore molestias numquam ducimus quasi sapiente, consectetur architecto nihil ipsa, temporibus doloremque veniam? Sunt aspernatur sit facere fugiat, optio commodi quam nulla nobis voluptatibus. Saepe corporis molestias architecto laboriosam minus porro voluptatum eius recusandae. Officia sed similique ratione asperiores beatae qui!"
        ],
        [
            "title" => "Judul Post Dua",
            "slug" => "judul-post-dua",
            "author" => "Alvyn Papalia",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cum possimus reprehenderit. Nemo qui nostrum voluptatibus cum, maxime quisquam minus rem inventore eum optio voluptate repellat ex provident voluptates architecto? Porro inventore quo tenetur nulla maxime perspiciatis similique eveniet fuga aspernatur vel aliquam, nam quaerat accusamus repudiandae quod assumenda possimus doloribus adipisci modi ea iusto earum. Dolorum dolorem, facere dolore molestias numquam ducimus quasi sapiente, consectetur architecto nihil ipsa, temporibus doloremque veniam? Sunt aspernatur sit facere fugiat, optio commodi quam nulla nobis voluptatibus. Saepe corporis molestias architecto laboriosam minus porro voluptatum eius recusandae. Officia sed similique ratione asperiores beatae qui!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        // $blog = self::$blog_post;
        $blog = static::all();
        // $post = [];
        // foreach ($blog as $b) {
        //     if ($b['slug'] === $slug) {
        //         $post = $b;
        //     }
        // }
        return $blog->firstWhere('slug', $slug);
    }
}
