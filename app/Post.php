<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    protected $dates = ['published_at'];

    protected $fillable =[

    	'title', 'body', 'excerpt', 'published_at', 'category_id','user_id',
    ];

    protected static function boot()
    {
    	parent::boot();

    	static::deleting(function($post)
    	{
    		$post->tags()->detach();
    		$post->photos->each->delete();
    	});
    }

	public function getRouteKeyName()
	{
		return 'url';
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}

	public function photos()
	{
		return $this->hasMany(Photo::class);
	}

	public function user()	
	{
		return $this->belongsTo(User::class);
	}

	public function scopePublished($query)
	{
		$query->whereNotNull('published_at')
    					->where('published_at', '<=',Carbon::now())
    					->latest('published_at');
    					
	}

	public function isPublished()
	{
		return $this->published_at < today();
	}

	public function setTitleAttribute($title)
	{
		$this->attributes['title'] = $title;
		$url = str_slug($title);
		$duplicateUrlCount = Post::where('url', 'LIKE',"{$url}%")->count();
		if ($duplicateUrlCount) {
			$url .= "-" . uniqid();
		}
		$this->attributes['url'] = $url; 
 	}

 	public function setPublishedAtAttribute($published_at)
 	{
 		$this->attributes['published_at'] = $published_at
                             ? Carbon::parse($published_at) 
                             : null;
 	}

 	public function setCategoryIdAttribute($category_id)
 	{
 		$this->attributes['category_id'] = Category::find($category_id)
                            ? $category_id:
                            Category::create(['name' => $category_id])->id;
 	}

 	public function syncTags($tags)
 	{
 		$tagsIds = [];

        foreach ($tags as $t) {
            
            $tagsIds[] = Tag::find($t) ? $t : Tag::create(['name' => $t])->id;
        }

        return $this->tags()->sync($tagsIds);
 	}

}

