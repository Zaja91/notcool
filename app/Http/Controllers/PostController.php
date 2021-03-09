<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        // Se l'utente non e' autenticano redirect to login page
        if (!auth()->user()) {
            return redirect()
            ->route('login')
            ->with('status', 'Login prima di creare un post!');
        }

        return view('post.index');
    }

    public function store(Request $request)
    {

        // Validate input
        $this->validate($request, [
            'title' => 'required|max:255',
            'yturl' => 'required|max:255',
            'description' => 'required|min:255',
        ]);


        // Extract video ID from youtube to find thumbnail picture

        $url = $request->yturl; // Youtube video url
        parse_str(parse_url($url, PHP_URL_QUERY), $url_vars);
        $thumbnail = $url_vars['v'];

        // Using the posts() method in Model/User we can automatically save the user_id in the posts table
        $request->user()->getPosts()->create([
            'title' => $request->title,
            'yturl' => $request->yturl,
            'description' => $request->description,
            'thumbnail' => "http://img.youtube.com/vi/" . $thumbnail . "/0.jpg",
        ]);

        return redirect()->route('home');
    }
}
