<?php

namespace App\Http\Controllers\Api;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        
        $posts = Post::with(['tags', 'category'])->paginate(4);

        return response()->json(compact('posts'));
    }
}
