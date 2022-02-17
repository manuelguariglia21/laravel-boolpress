<?php

namespace App\Http\Controllers\Api;
use App\Post;
use App\Tag;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        
        $posts = Post::with(['tags', 'category'])->paginate(4);
        $categories = Category::all();
        $tags = Tag::all();

        return response()->json(compact('posts', 'categories', 'tags'));
    }

    public function show($slug){

        $post = Post::where('slug', $slug)->with(['category', 'tags'])->first();

        return response()->json($post);

    }
}
