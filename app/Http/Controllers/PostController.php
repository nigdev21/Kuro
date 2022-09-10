<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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

    public function postCreatePage() {
        return view('pages.createPost');
    }

    public function postCreate(Request $request) {
        Post::Create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('index');
    }
}