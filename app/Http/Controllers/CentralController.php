<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CentralController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(6);

        return auth()->user() ? view('dashboard')->with(['data' => $posts]) : view('welcome');
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('show')->with([
            'post' => $post
        ]);
    }

    public function myPosts()
    {
        $posts = Post::all()->where('user_id', '=', auth()->user()->id);
        return view('myPosts')->with([
            '$posts', $posts
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:100',
            'body' => 'required|min:10|max:1000',

        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect()->route('home')->with([
            'success' => 'post added successfully!'
        ]);
    }
}
