<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $categories = Categorie::paginate(3);
        $posts = Post::all();
        $tags = Tag::all();
        return view('index', compact(['categories', 'posts', 'tags']));
    }

    public function all()
    {
        $categories = Categorie::all();
        $posts = Post::all();
        $tags = Tag::all();
        return view('index', compact(['categories', 'posts', 'tags']));
    }
}
