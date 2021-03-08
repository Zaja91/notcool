<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    
        $posts = Post::paginate(20);

        return view('home.index', [
            'posts' => $posts
        ]);
    }
}
