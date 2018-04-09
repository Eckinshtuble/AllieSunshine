<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        "body",
        "blog_post_id"
    ];
    public function blog_post(){
        return $this->belongsTo(Blog_Post::class, 'blog_post_id');
    }
}
