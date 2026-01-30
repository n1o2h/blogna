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
        $posts = Post::with('categorie')->latest()->paginate(3);
        $tags = Tag::all();

        return view('index', compact('categories', 'posts', 'tags'));
    }

    public function all()
    {
        $categories = Categorie::all();
        $posts = Post::with('categorie');
        $tags = Tag::all();

        return view('index', compact('categories', 'posts', 'tags'));
    }
}
