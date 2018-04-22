<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        "blog_post_title",
        "blog_post_body"
    ];

    public function comments(){
        return $this->hasMany(Comment::class, 'blog_post_id');
    }
}
