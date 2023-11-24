<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function laravel($id)
    {
        $laravels = Post::where('id', $id)->first();
        return view('detail.laravel', compact('laravels'));
    }
    public function posts($id)
    {
        $posts = Post::where('id', $id)->first();
        return view('user.recentPosts', compact('posts'));
    }
    public function java($id)
    {
        $javas = Post::where('id', $id)->first();
        return view('detail.java', compact('javas'));
    }
    public function javascript($id)
    {
        $javascripts = Post::where('id', $id)->first();
        return view('detail.javascript', compact('javascripts'));
    }
    public function react($id)
    {
        $react = Post::where('id', $id)->first();
        return view('detail.react', compact('react'));
    }
    public function flutter($id)
    {
        $flutter = Post::where('id', $id)->first();
        return view('detail.flutter', compact('flutter'));
    }
    public function bootstrap($id)
    {
        $bootstrap = Post::where('id', $id)->first();
        return view('detail.bootstrap', compact('bootstrap'));
    }
}
