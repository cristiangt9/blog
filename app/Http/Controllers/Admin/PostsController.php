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
    	if($request->validated()){
    	$post = new Post;
    	$post->title = $request->get('title');
        $post->url = str_slug($request->get('title'));
    	$post->body = $request->get('body');
    	$post->excerpt = $request->get('excerpt');
    	$post->published_at = $request->has('published_at') ? Carbon::parse($request->get('published_at')) : null;
    	$post->category_id = $request->get('category_id');
    	$post->save();

    	$post->tags()->attach($request->get('tags'));

    	return back()->with('flash', 'Tu publicación ha sido creada exitosamente');
    	}
    	else
    		dd("error");
    }

    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.posts.edit',compact('categories','tags','post'));
    }

    public function update(UpdatePostRequest $request,Post $post)
    {
        if($request->validated()){

        $post->title = $request->get('title');
        $post->url = str_slug($request->get('title'));
        $post->body = $request->get('body');
        $post->excerpt = $request->get('excerpt');
        $post->published_at = $request->has('published_at') ? Carbon::parse($request->get('published_at')) : null;
        $post->category_id = $request->get('category_id');
        $post->save();

        $post->tags()->sync($request->get('tags'));

        $tags = Tag::all();
        $categories = Category::all();
        $flash = "Tu publicación ha sido actualizada exitosamente";

        return view('admin.posts.edit',compact('categories','tags','post','flash'));
        }
        else
            dd("error");
    }

    public function destroy(Post $post)
    {
        $post->delete();
      

        return back()->with('flash','Usuario Eliminado');

    }
}

    	
