<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Carbon\Carbon;
use App\Repositories\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Post $post)
    {
        $posts = $post->all();
        return view('posts.index', compact('posts'));
    }

    public function show(Posts $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);
        auth()->user()->publish(
            new Posts(request(['title', 'body']))
        );
        session()->flash('message', 'Your post has now been published');
        return redirect('/');
    }
}
