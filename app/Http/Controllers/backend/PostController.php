<?php

namespace App\Http\Controllers\backend;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MediaAsset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Enum;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('pages.backend.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'title'=> 'required|string',

            'content' => 'required|string|max:255',
            'authod_id' => 'unique:pages,author_id',
            //'status' => ['required', new Enum(::class)],
            'published_at' => 'nullable|date',
            'expires_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',

        ]);

        $post = new Post;
        $post->orther_id = Auth::user()->id;
        $post->editor_id = Auth::user()->id;
        $post->title = $validatedata['title'];
        // $post->excerpt = Str::substr($validatedata['description'], 0, );
        $post->body = $validatedata['description'];
        // $post->status =
        // $post->save();

        $post->title = $validatedata['title'];
       
        $post->body = $validatedata['content'];
        $post->status = $validatedata['status'];
        $post->published_at = $validatedata['published_at'];
        $post->expires_at = $validatedata['expires_at'];

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

        $post->featured_media_id = $mediaId;
        $post->meta = "";
        $post->save();

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

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with('Sucess','Successfully Deleted !');
    }
}
