<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function home()
    {
    	return view('home-rango');
    }

    public function index()
    {
    	return view('admin.dashboard');
    }
    public function about()
    {
    	return view('about-rango');
    }
    public function skills()
    {
    	return view('skills-rango');
    }
    public function services()
    {
    	return view('services-rango');
    }
    public function portfolio()
    {
    	return view('portfolio-rango');
    }
    public function blog()
    {
    	$posts = Post::published()->paginate(5);
    	return view('blog',compact('posts'));
    }
    public function contact()
    {
    	return view('contact-rango');
    }
    public function shawarmeria()
    {
        return view('portfolio.shawarmeria_1');
    }
}
