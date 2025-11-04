<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationData;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Validation\ValidationException;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all()->sortByDesc('created_at');
        return view('pages.backend.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:tags,name',
            'slug' => 'required|unique:tags,slug',

        ]);

        $tag = new Tag;
        $tag->name = $validatedData['name'];
        $tag->slug = Str::slug($validatedData['slug']);
        $tag->description = $request->input('description');
        $tag->save();

        return redirect()->back()->with('success', 'Category created successfully!');
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
    public function edit(string $id)
    {
        $tag = Tag::find($id);
        return view('pages.backend.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255|unique:tags,name',
                'slug' => 'required|string|alpha_dash|lowercase|max:255',

            ]);

            $tag = Tag::find($id);
            $tag->name = $validatedData['name'];
            $tag->slug = str::slug($validatedData['slug']);
            $tag->description = $request->input('description');
            $tag->save();

            return redirect()->route('tags.index')->with('success', 'Category created successfully!');
        } catch (ValidationException $e) {
            $errors = $e->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        return redirect()->back()->with('success', 'Successfully Deleted !');
    }
}
