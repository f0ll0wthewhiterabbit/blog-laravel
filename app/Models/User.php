<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
	use SoftDeletes;

	protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

	public function profile()
	{
		return $this->hasOne('App\Models\Profile');
	}

	public function posts()
	{
		return $this->hasMany('App\Models\Post');
	}
}
