<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();
        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }
        return view('blog', [
            'title' => 'All Post',
            'active' => 'blog',
            // 'posts' => Post::all()
            'posts' => $posts->get()
        ]);
    }

    public function post(Post $post)
    {
        return view('single_blog', [
            'title' => 'Blog',
            'active' => 'blog',
            'post' => $post
        ]);
    }
}
