<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogContrlloer extends Controller
{

    public function sheduledPosts()
    {
        $currentDateTime  = Carbon::now();
        if ('status' == 'published') {
            if (('published_at' < $currentDateTime) && ('expires_at' > $currentDateTime)) {
                return true;
            } else {
                return false;
            }
        }
    }


    public function show_blog()
    {

        $posts = Post::all()->where('status', '=', 'published')->sortByDesc('created_at');
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
