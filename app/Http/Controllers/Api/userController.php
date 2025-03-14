<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $posts = Post::with('type', 'technologies')->get();
        return response()->json([
            'success' => true,
            'data' => $posts
        ]);
    }

    public function show(Post $post)
    {
        $post->load('type', 'technologies');
        return response()->json([
            'success' => true,
            'post' => $post
        ]);
    }
}
