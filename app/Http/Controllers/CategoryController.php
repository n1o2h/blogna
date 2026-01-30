<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Categorie::all();
        return view('admin.index', compact(['posts', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $categorieValidated = $request->validate([
                'name' => 'required|max:255',
                'description' => 'required',
            ]);
            Categorie::create($categorieValidated);
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {

        return view('/admin/index', compact('categorie'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $categorie)
    {
        if($categorie){
            $categorie = Categorie::find($categorie);
        }
        return view('admin.categories.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $categorie)
    {
        if($categorie){
            $categorie = Categorie::find($categorie);
        }
        $validatedCategorie = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $categorie->update($validatedCategorie);
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $categorie)
    {
        if($categorie){
            $categorie = Categorie::find($categorie);
        }
        $categorie->delete();
        return redirect()->route('admin.index');
    }
}
