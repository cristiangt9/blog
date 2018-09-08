<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;

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
    	$posts = Post::published()->paginate(6);
        $categories = Category::all();
        $tags = Tag::all();
    	return view('blog',compact('posts','categories','tags'));
    }
    public function contact()
    {
    	return view('contact-rango');
    }
    public function show_blog(Post $post)
    {
        if ($post->isPublished() || auth()->check()) {
            $categories = Category::all();
            $tags = Tag::all();
            return view('blog.show-rango',compact('post','categories','tags'));      
        }

        abort(404);
    }
    public function webMap()
    {
        return view('mapa_web');
    }
        public function shawarmeria_1()
    {
        return view('portfolio.shawarmeria_1');
    }
    public function shawarmeria_2()
    {
        return view('portfolio.shawarmeria_2');
    }
    public function nativos()
    {
        return view('portfolio.nativos');
    }
    public function aventura()
    {
        return view('portfolio.aventura');
    }
    public function previfire()
    {
        return view('portfolio.previfire');
    }
    public function previfire_logo()
    {
        return view('portfolio.previfire_logo');
    }
}
