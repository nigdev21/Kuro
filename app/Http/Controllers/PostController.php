<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('pages.index', compact('posts'));
    }

    public function post($id) {
        $post = Post::findOrFail($id);

        return view('pages.post', compact('post'));
    }
}