<?php

namespace App\Models;

class Post {
    public static function find($slug) {
        if (! file_exists($path = resource_path("posts/{$slug}.html"))){
            return redirect('/');
        }

        return cache()->remember("posts.{$slug}", now()->addHours(2), fn() => file_get_contents($path));
    }
}
