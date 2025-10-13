<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all()->sortByDesc('created_at');
        return view('pages.backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'slug' => 'required|string|unique:categories,slug'
        ]);

        $category = new Category;
        $category->name =  $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->parent_id = $request->input('parent_id');
        $category->description = $request->input('description');
        $category->order_column = 1;
        $category->save();
        // Category::create([
        //     'name' =>
        //     'slug' => Str::slug($validatedData['slug']),
        //     'parent_id' => $request->input('parent_id'),
        //     'description' => $request->input('description'),
        //     'order_column' => 1
        // ]);

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->back()->with('Success', 'Success Fully Deleted !');
    }
}
