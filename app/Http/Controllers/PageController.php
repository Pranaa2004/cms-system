<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();
        return view('pages.backend.pages.index',compact('pages'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            // 'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',

        ]);

        Page::create($validated);

        // $page = Page::create([
        //     // 'author_id'=>,
        //     // 'title'=>,
        //     // 'slug'=>,
        //     // 'body'=>

        // ]);

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

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
        //
    }
}
