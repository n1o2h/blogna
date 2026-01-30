<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('/admin', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/categories/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $categorieValidated = $request->validate([
                'name' => 'required|max:255',
                'description' => 'nullable',
            ]);
            Categorie::create($categorieValidated);
        }catch (ValidationException $e)
        {
            echo $e->getMessage();
        }
        return redirect()->route('/admin/index');
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
    public function edit(Categorie $categorie)
    {
        return view('/admin/categories/edit', compact($categorie));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        $validatedCategorie = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);
        $categorie->update($validatedCategorie);
        return redirect()->route('/admin/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('/admin/index');
    }
}
