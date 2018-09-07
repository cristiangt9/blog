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
    public function shawarmeria()
    {
        return view('portfolio.shawarmeria_1');
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
}
