<?php

namespace App\Http\Controllers;

use App\Models\MediaAsset;
use App\Models\Page;
use App\StatusEnum;
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
        $validatedata = $request->validate([
            'title' => 'required|string|max:255',
            //'slug' => 'required|string|alpha_dash|lowercase|max:255|unique:pages,slug',
            'slug' => 'required|string|max:255|unique:pages,slug',
            'content' => 'required|string|max:255',
            'authod_id' => 'unique:pages,author_id',
            'status' => ['required', new Enum(StatusEnum::class)],
            'published_at' => 'nullable|date',
            'expires_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',

        ]);

        $page = new Page;
        $page->author_id = Auth::id();
        $page->title = $validatedata['title'];
        $page->slug = Str::slug($validatedata['slug']);
        $page->body = $validatedata['content'];
        $page->status = $validatedata['status'];
        $page->published_at = $validatedata['published_at'];
        $page->expires_at = $validatedata['expires_at'];

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');

        //     // Store the file in public
        //     $path = $file->store('uploads/pages', 'public');

        //     // Get image size as an Array
        //     $imageInfo = getimagesize($file);

        // Create media asset
        // $page->media()->create([
        //     'disk' => 'public',
        //     'path' => $path,
        //     'mime_type' => $file->getMimeType(),
        //     'size_kb' => round($file->getSize() / 1024, 2),
        //     'width' => $imageInfo[0] ?? null,
        //     'height' => $imageInfo[1] ?? null,
        //     'alt' => $validatedata['title'],
        //     'variants' => '',
        // ]);
        // }
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
                'alt' => $validatedata['title'],
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
        $page = Page::find($id);
        return view('pages.backend.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        $validatedata = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'slug' => 'required|string|max:255|unique:pages,slug',
            'content' => 'required|string|max:255',
            'authod_id' => 'unique:pages,author_id',
            'status' => ['required', new Enum(StatusEnum::class)],
            'published_at' => 'nullable|date',
            'expires_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
        ]);

        $mediaId = $page->featured_media_id;

        if ($request->hasFile('image')) {
            // Upload new image
            $file = $request->file('image');
            $path = $file->store('uploads/pages', 'public');

            $media = MediaAsset::create([
                'disk' => 'public',
                'path' => $path,
                'mime_type' => $file->getMimeType(),
                'size_kb' => $file->getSize() / 1024,
                'width' => getimagesize($file)[0] ?? null,
                'height' => getimagesize($file)[1] ?? null,
                'alt' => $validatedata['title'],
            ]);

            $mediaId = $media->id;
        }

        $page->author_id = Auth::id();
        $page->title = $validatedata['title'];
        $page->slug = Str::slug($validatedata['slug']);
        $page->body = $validatedata['content'];
        $page->status = $validatedata['status'];
        $page->published_at = $validatedata['published_at'];
        $page->expires_at = $validatedata['expires_at'];
        $page->featured_media_id = $mediaId;
        $page->meta = '';
        $page->save();
        
        return redirect()->route('pages.index')->with('success', 'Page updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::find($id);
        $page->delete();

        return redirect()->route('pages.index')->with('Success', 'Successfully Deleted !!');
    }
}
