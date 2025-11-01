<?php

namespace App\Http\Controllers;

use App\Models\MediaAsset;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.backend.media.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valiadtedata = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
        ]);

        $file = $valiadtedata['image'];
        $path = $file->store('uploads/media', 'public');
        $imageSize = getimagesize($file);

        $media = new MediaAsset;
        $media->disk = "public";
        $media->path = $path;
        $media->mime_type = $file->getMimeType();
        $media->size_kb = $file->getSize()/1024;
        $media->width = $imageSize[0]??null;
        $media->height = $imageSize[1]??null;
        $media->alt = "klj";
        $media->variants = "";
        $media->save();

        return view('pages.backend.media.index');

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
        //
    }
}
