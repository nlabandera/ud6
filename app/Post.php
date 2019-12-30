<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $date = ['published_at'];

    //$posts=Post::all();
	public function user(){
		return $this->belongsTo('App\User');
	}
	public function category(){
		return $this->belongsTo('App\Category');
	}
}
