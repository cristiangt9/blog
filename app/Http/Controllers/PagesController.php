<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function home()
    {
    	$posts = Post::published()->paginate(5);
    	return view('home-rango',compact('posts'));
    }

    public function index()
    {
    	return view('admin.dashboard');
    }
    public function about()
    {
    	return view('about-rango');
    }
}
