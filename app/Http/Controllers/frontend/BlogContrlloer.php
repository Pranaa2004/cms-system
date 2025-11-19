<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogContrlloer extends Controller
{

    public function show_blog()
    {

        $now = Carbon::now();

        $sehduledPost = Post::where('status','scheduled')
                            ->where('published_at','<=',$now)
                            ->where('expires_at','>=',$now)
                            ->get();

        $publishedPosts = Post::where('status', 'published')
                      ->where('published_at', '<=', $now)
                      ->where(function ($query) use ($now) {
                          $query->where('expires_at', '>=', $now)
                                ->orWhereNull('expires_at');
                      })
                      ->get();

        $posts = [$sehduledPost,$publishedPosts];

        $post_count = Post::all()->where('status', '=', 'published')->count();
        // $post = Post::find(5)->mediaAsset->path;

        return view('pages.frontend.blog', compact('posts'));
        // return view('pages.sample',compact('posts'));

    }

    public function show_blog_home()
    {
        $posts = $posts = Post::where('status', 'published')->orderBy('created_at', 'desc')->limit(6)->get();
        return view('pages.frontend.home', compact('posts'));
    }
}


//Post::where('status', 'published')->where('published_at', '<=', $now)->where(function ($query) use ($now) { $query->where('expires_at', '>=', $now)->orWhereNull('expires_at');})->get();
