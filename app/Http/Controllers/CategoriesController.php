<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
    	$posts = $category->posts()->paginate(4);

    	$title = "<h1>Categoria: <span class='read-more'>".$category->name."</span></h1>";

    	$categories = Category::all();

    	$tags = Tag::all();

    	return view('blog',compact('posts','title','categories','tags'));
    }
}
