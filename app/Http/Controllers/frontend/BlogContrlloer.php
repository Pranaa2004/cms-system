<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogContrlloer extends Controller
{
    function show_blog()
    {
        $posts = Post::all()->where('status','=','published');
        $post_count = Post::all()->where('status','=','published')->count();
        // $post = Post::find(5)->mediaAsset->path;

        return view('pages.frontend.blog',compact('posts'));
        // return view('pages.sample',compact('posts'));

    }
}
