<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\BlogPost;
use App\Comment;

class CommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['only' =>['destroy', 'create']]);
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return redirect('whatsnew.show');
    }

    public function create(){
        //I DONT KNOW HOW TO DO THIS YET

        //$blog_posts = Blog_Post::all()->pluck('title', 'id');
        //return view('posts.create', compact("blog_posts"));
    }

    public function store(Request $request) {
        $blog_post = BlogPost::find($request->blog_post_id);
        $comment = new Comment($request->all());
        $comment->id = 1;
        $comment->blog_post()->associate($blog_post)->save();
        return redirect('whatsnew.show');
    }
}
