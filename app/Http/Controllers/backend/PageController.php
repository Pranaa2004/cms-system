<?php

namespace App\Http\Controllers\backend;

use App\Enums\Enums\StatusEnum;
use App\Enums\StatusEnum as EnumsStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\MediaAsset;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Mime\DraftEmail;
use Illuminate\Validation\Rules\Enum;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $pages = Page::with(['user', 'media'])->latest()->get();
            return response()->json([
                'data' => $pages
            ]);
        }
        return view('pages.backend.pages.index');
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug',
            'content' => 'required|string',
            'status' => ['required', new Enum(EnumsStatusEnum::class)],
            'published_at' => 'nullable|date',
            'expires_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
        ]);

        $page = new Page;
        $page->author_id = Auth::id();
        $page->title = $validatedData['title'];
        $page->slug = Str::slug($validatedData['slug']);
        $page->body = $validatedData['content'];
        $page->status = $validatedData['status'];
        $page->published_at = $validatedData['published_at'] ?? now();
        $page->expires_at = $validatedData['expires_at'];

        $mediaId = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads/pages', 'public');

            $media = MediaAsset::create([
                'disk' => 'public',
                'path' => $path,
                'mime_type' => $file->getMimeType(),
                'size_kb' => $file->getSize() / 1024,
                'width' => getimagesize($file)[0] ?? null,
                'height' => getimagesize($file)[1] ?? null,
                'alt' => $validatedData['title'],
                'variants' => '',
            ]);

            $mediaId = $media->id;
        }

        $page->featured_media_id = $mediaId;
        $page->meta = "";
        $page->save();

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
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
        $page = Page::findOrFail($id);
        return view('pages.backend.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $id,
            'content' => 'required|string',
            'status' => ['required', new Enum(EnumsStatusEnum::class)],
            'published_at' => 'nullable|date',
            'expires_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
        ]);

        $page = Page::findOrFail($id);
        $page->title = $validatedData['title'];
        $page->slug = Str::slug($validatedData['slug']);
        $page->body = $validatedData['content'];
        $page->status = $validatedData['status'];
        $page->published_at = $validatedData['published_at'];
        $page->expires_at = $validatedData['expires_at'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads/pages', 'public');

            $media = MediaAsset::create([
                'disk' => 'public',
                'path' => $path,
                'mime_type' => $file->getMimeType(),
                'size_kb' => $file->getSize() / 1024,
                'width' => getimagesize($file)[0] ?? null,
                'height' => getimagesize($file)[1] ?? null,
                'alt' => $validatedData['title'],
            ]);

            $page->featured_media_id = $media->id;
        }

        $page->meta = '';
        $page->save();

        return redirect()->route('pages.index')->with('success', 'Page updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Page deleted successfully!');
    }
}
