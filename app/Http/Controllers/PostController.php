<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Categorie::all();
        return view('/admin/index', compact(['posts', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/posts/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedPost =$request->validate([
            'title' => 'required|max:255',
            'contenu' => 'required|max:255',
            'image' => 'nullable',
            'categorie_id' => 'required',
        ]);
        Post::create($validatedPost);

        return redirect()->route('/admin/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('/admin,/posts/edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request);
        return redirect()->route('/admin/posts');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('/admin/posts');

    }
}
