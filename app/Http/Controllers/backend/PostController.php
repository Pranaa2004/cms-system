<?php

namespace App\Http\Controllers\backend;

use App\Enums\Enums\StatusEnum;
use App\Enums\StatusEnum as EnumsStatusEnum;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MediaAsset;
use App\Models\Tag;

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
        $posts = Post::with(['user', 'tags', 'categories'])->latest()->get();
        return view('pages.backend.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories  = Category::all()->where('parent_id', '=', '0');
        $tags = Tag::all();
        return view('pages.backend.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => ['required', new Enum(EnumsStatusEnum::class)],
            'published_at' => 'nullable|date',
            'expires_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $post = new Post;
        $post->author_id = Auth::id();
        $post->editor_id = Auth::id();
        $post->title = $validatedData['title'];
        $post->excerpt = Str::limit(strip_tags($validatedData['content']), 160);
        $post->body = $validatedData['content'];
        $post->status = $validatedData['status'];
        $post->published_at = $validatedData['published_at'] ?? now();
        $post->expires_at = $validatedData['expires_at'];

        $mediaId = null;
        if ($request->hasFile('image')) {
            $post->is_featured = 1;
            $file = $request->file('image');
            $path = $file->store('uploads/posts', 'public');

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
        } else {
            $post->is_featured = 0;
        }

        $post->featured_media_id = $mediaId;
        $post->meta = "";
        $post->save();

        if ($request->has('tags')) {
            $post->tags()->sync($request->input('tags'));
        }

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::where('parent_id', 0)->get();
        $tags = Tag::all();
        return view('pages.backend.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => ['required', new Enum(EnumsStatusEnum::class)],
            'published_at' => 'nullable|date',
            'expires_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $post = Post::findOrFail($id);
        $post->editor_id = Auth::id();
        $post->title = $validatedData['title'];
        $post->excerpt = Str::limit(strip_tags($validatedData['content']), 160);
        $post->body = $validatedData['content'];
        $post->status = $validatedData['status'];
        $post->published_at = $validatedData['published_at'];
        $post->expires_at = $validatedData['expires_at'];

        if ($request->hasFile('image')) {
            $post->is_featured = 1;
            $file = $request->file('image');
            $path = $file->store('uploads/posts', 'public');

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

            $post->featured_media_id = $media->id;
        }

        $post->meta = "";
        $post->save();

        if ($request->has('tags')) {
            $post->tags()->sync($request->input('tags'));
        } else {
            $post->tags()->detach();
        }

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully!');
    }

    
}
