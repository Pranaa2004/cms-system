<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function showBlogDetails($id){

        $post = Post::find($id);
        return view('pages.frontend.blog-details',compact('post'));

    }
}
