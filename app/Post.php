<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Post extends Model
{
    public function user()
   {
   	return $this->belongsTo('App\User');
   }

   public function comments()
	{
    	return $this->hasMany(Comment::class);
	}	
}
