<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function show(Tag $tag)
    {
    	$posts = $tag->posts()->paginate(2);;

    	$title = "<h1>Etiqueta: <span class='read-more'>".$tag->name."</span></h1>";

    	return view('blog',compact('posts','title'));
    }
}
