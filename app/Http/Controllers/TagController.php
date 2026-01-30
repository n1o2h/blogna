<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTag = $request->validate([
            'nom' => 'required',
        ]);
        Tag::create($validatedTag);
        return redirect()->route('admin.index');
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
    public function edit($tag)
    {
        if($tag){
            $tag = Tag::find($tag);
        }
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $tag)
    {
        if($tag){
            $tag = Tag::find($tag);
        }
        $validatedTag = $request->validate(['nom' => 'required']);
        $tag->update($validatedTag);
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($tag)
    {
        if($tag){
            $tag = Tag::find($tag);
        }
        $tag->delete();
        return redirect()->route('admin.index');
    }
}
