<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog.blog', [
            'title' => 'All Post',
            'active' => 'blog',
            // 'posts' => Post::all()
            // 'posts' => Post::latest()->filter()->get() // tanpa checking request
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString() // dengan checking request
        ]);
    }

    public function post(Post $post)
    {
        return view('blog.single_blog', [
            'title' => 'Blog',
            'active' => 'blog',
            'post' => $post
        ]);
    }
}
