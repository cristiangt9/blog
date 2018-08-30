<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::latest('published_at')->get();
    	return view('admin.posts.index',compact('posts'));
    }
    public function create()
    {
    	$tags = Tag::all();
    	$categories = Category::all();
    	return view('admin.posts.create',compact('categories','tags'));
    }
    public function store(CreatePostRequest $request)
    {

    	$post = Post::create($request->all());
        $post->user_id = auth()->id();
        $post->save();
    	$post->syncTags($request->get('tags'));
    	return back()->with('flash', 'Tu publicación ha sido creada exitosamente');
    }

    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.posts.edit',compact('categories','tags','post'));
    }

    public function update(UpdatePostRequest $request,Post $post)
    {

        $post->update($request->all());
        $post->syncTags($request->get('tags'));
        return redirect()->route('posts.edit',$post)->with('flash','Tu publicación ha sido actualizada exitosamente');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('flash','Tu publicación ha sido eliminada exitosamente');

    }
}

    	
