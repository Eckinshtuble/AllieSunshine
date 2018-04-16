<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_Post extends Model
{
    protected $fillable = [
        "title",
        "body"
    ];

    public function comments(){
        return $this->hasMany(Comment::class, 'blog_post_id');
    }
}
