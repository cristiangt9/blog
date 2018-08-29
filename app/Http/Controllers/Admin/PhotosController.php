<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Photo;

class PhotosController extends Controller
{
    public function store(Post $post)
    {
    	$this->validate(request(),[
    		'photo' => 'required|image|max:2048'
    	]);

        $post->photos()->create([
            'url' => '/storage/'.request()->file('photo')->store('posts','public'),
        ]);

    }

    public function destroy(Photo $photo)
    {
        $photo->delete();
        return back()->with('flash', 'la foto ha sido eliminada exitosamente');
    }
}
