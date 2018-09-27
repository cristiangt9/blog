<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostsController extends Controller
{
    public function show(Post $post)
    {
    	if ($post->isPublished() || auth()->check()) {
    		$comment = Comment::where('post_id', $post->id)->get();
    		return view('blog.show',compact('post','comment')); 		
    	}

    	abort(404);

    }

    
}
