<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = ['id', 'user_id', 'views_count', 'created_at', 'updated_at'];

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}

	public function tags()
	{
		return $this->belongsToMany('App\Models\Tag');
	}
}
