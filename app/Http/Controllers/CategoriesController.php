<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
    	$posts = $category->posts()->paginate(2);

    	$title = "<h1>Categoria: <span class='read-more'>".$category->name."</span></h1>";

    	return view('home1',compact('posts','title'));
    }
}
