<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();
        return view('pages.backend.pages.index', compact('pages'));
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
        $validatedata = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|alpha_dash|lowercase|max:255|unique:pages,slug',
            'content' => 'required|string|max:255',
            'authod_id' => 'unique:pages,author_id'
            // 'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',

        ]);

        //author_id title slug body status published_at expires_at featured_media_id meta

        $page = new Page;
        $page->author_id = Auth::id();
            $page = Page::create([
                'author_id' => 1,
                'title' => $validatedata['title'],
                'slug' => Str::slug($request->input('slug')),
                'body' => 1,

            ]);

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

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
