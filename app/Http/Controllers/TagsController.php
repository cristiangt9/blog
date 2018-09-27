<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;

class TagsController extends Controller
{
    public function show(Tag $tag)
    {
    	$posts = $tag->posts()->paginate(4);;

    	$title = "<h1>Etiqueta: <span class='read-more'>".$tag->name."</span></h1>";

    	$categories = Category::all();

    	$tags = Tag::all();

    	return view('blog',compact('posts','title','categories','tags'));
    }
}
