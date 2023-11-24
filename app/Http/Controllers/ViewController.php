<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(Request $request): View
    {
        $posts = Post::latest()->paginate(9);
        $laravels = Post::Where('category', 'like', 'Laravel')->latest()->paginate(9);
        $javascripts = Post::Where('category', 'like', 'Javascript')->latest()->paginate(9);
        $javas = Post::Where('category', 'like', 'Java')->latest()->paginate(9);
        $react = Post::Where('category', 'like', 'React')->latest()->paginate(9);
        $flutter = Post::Where('category', 'like', 'Flutter')->latest()->paginate(9);
        $bootstrap = Post::Where('category', 'like', 'Bootstrap')->latest()->paginate(9);

        return view('users.index', compact('posts', 'laravels', 'javascripts', 'javas', 'react', 'flutter', 'bootstrap'));
    }

    public function laravel(Request $request): View
    {
        $laravels = Post::Where('category', 'like', 'Laravel')->latest()->paginate(9);

        return view('users.laravel', compact('laravels'));
    }

    public function flutter(Request $request): View
    {
        $posts = Post::Where('category', 'like', 'Flutter')->latest()->paginate(9);

        return view('users.flutter', compact('posts'));
    }

    public function bootstrap(Request $request): View
    {
        $posts = Post::Where('category', 'like', 'Bootstrap')->latest()->paginate(9);

        return view('users.bootstrap', compact('posts'));
    }

    public function react(Request $request): View
    {
        $react = Post::Where('category', 'like', 'React')->latest()->paginate(9);

        return view('users.react', compact('react'));
    }
    public function java(Request $request): View
    {
        $javas = Post::Where('category', 'like', 'Java')->latest()->paginate(9);

        return view('users.java', compact('javas'));
    }
    public function javascript(Request $request): View
    {
        $javascripts = Post::Where('category', 'like', 'Javascript')->latest()->paginate(9);

        return view('users.javascript', compact('javascripts'));
    }

    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('users.show', compact('post'));
    }
}
