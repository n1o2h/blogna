<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $posts = Post::all();
        return view('index', compact(['categories', 'posts']));
    }
}
