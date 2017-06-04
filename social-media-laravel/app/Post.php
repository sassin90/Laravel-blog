<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'category-id', 'slug'
    ];

    public function category(){
    	return $this->belongsTo('App\Category','category-id');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }
}
