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
        $posts = Post::all();
        return view('pages.backend.posts.index', compact('posts'));
        // $cate = Category::all()->where("parent_id",'=','0');
        // dd($cate);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories  = Category::all()->where('parent_id', '=', '0');
        $tags = Tag::all();
        return view('pages.backend.posts.create',compact('categories', 'tags'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //author_id	editor_id	title	excerpt	body	status	published_at	expires_at	is_featured	featured_media_id	meta

        $validatedata = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string|max:255',
            'authod_id' => 'unique:pages,author_id',
            'status' => ['required', new Enum(EnumsStatusEnum::class)],
            'published_at' => 'nullable|date',
            'expires_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',

        ]);

        $post = new Post;
        $post->author_id = Auth::user()->id;
        $post->editor_id = Auth::user()->id;
        $post->title = $validatedata['title'];
        $post->excerpt = "";
        // $post->excerpt = Str::substr($validatedata['description'], 0, );
        // $post->body = $validatedata['description'];
        $post->body = $validatedata['content'];
        $post->status = $validatedata['status'];
        $post->published_at = $validatedata['published_at'];
        $post->expires_at = $validatedata['expires_at'];

        $mediaId = null;
        if ($request->hasFile('image')) {
            $post->is_featured = 1;
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
        } else {
            $post->is_featured = 0;
        }

        $post->featured_media_id = $mediaId;
        $post->meta = "";
        $post->save();

        foreach($request->input('tags') as $tag){
            $post->tags()->attach($tag);
        }

        return redirect()->route('posts.index')->with('Success', 'Successfully post created !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with('Sucess', 'Successfully Deleted !');
    }
}
