<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $files = File::files(resource_path("posts/"));
    $posts = [];

    foreach($files as $file) {
        $document = YamlFrontMatter::parseFile($file);
        $posts[] = new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body()
        );
    }
    ddd($posts);

    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function($slug){
    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[a-z_\-]+');
