<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class PostController extends Controller {
   public function index(){
        ddd(Gate::allows('admin'));
        ddd(request()->user()->can('admin'));
       /*
       return view('posts.index', [
           'posts' => Post::latest()
               ->filter(request(['search', 'category', 'author']))
               ->paginate(6)
               ->withQueryString()

       ]);
       */
   }

   public function show(Post $post){
       return view('posts.show', [
           'post' => $post
       ]);
   }
}
