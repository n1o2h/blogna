<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use App\Models\Tag;
use Cassandra\TimestampGenerator\Monotonic;
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
        $tags = Tag::all();
        return view('admin.index', compact(['posts', 'categories', 'tags']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('admin.posts.create', compact('categories'));
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
            'categorie_id' => 'required'
        ]);
        #dd($validatedPost);
        #$validatedPost['categorie_id'] =10;
        $post = Post::create($validatedPost);
        return to_route('admin.index')->with('message', 'Post Crée avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.create', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id )
    {
        if($id){
            $post = Post::find($id);
        }else {
            return  2;
        }
        $categories = Categorie::all();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$post)
    {

        $data =$request->validate([
            'title' => 'required',
            'contenu' => 'required',
            'image' => 'nullable',
            'categorie_id' => 'required'
        ]);

        if($post){
            $post = Post::find($post);
        }
        $post->update($data);
        return redirect()->route('admin.index')->with('message', 'Post est Modifier avec success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post)
    {
        if($post){
            $post = Post::find($post);
        }
        $post->delete();
        return to_route('admin.index')->with('message', 'Post est supprimer avec succes');

    }
}
