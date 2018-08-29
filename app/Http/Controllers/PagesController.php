<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function home()
    {
    	$posts = Post::published()->paginate(5);
    	return view('home1',compact('posts'));
    }

    public function index()
    {
    	return view('admin.dashboard');
    }
}
