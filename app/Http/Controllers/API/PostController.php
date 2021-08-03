<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //return new PostResource(Post::all());

        //return new PostResource(Post::with(['category', 'tags'])->paginate(6));
        return new PostResource(Post::with(['category', 'tags'])->get());



        /* 
        * Soluzione senza Resource
        $posts = Post::with(['category', 'tags'])->paginate(6); //o paginate();
        return $posts; 
        */
    }
}
