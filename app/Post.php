<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    protected $dates = ['published_at'];

	public function getRouteKeyName()
	{
		return 'url';
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function tags($value='')
	{
		return $this->belongsToMany(Tag::class);
	}

	public function scopePublished($query)
	{
		$query->whereNotNull('published_at')
    					->where('published_at', '<=',Carbon::now())
    					->latest('published_at');
    					
	}
}

