<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\BlogPost;
use App\Comment;

class CommentController extends Controller
{
    public function index(){
        $comments =  Comment::all();
        return view('whatsnew.show', compact("comments"));
    }

    public function show($comment){
        $comment = comment::find($comment);

        return view('whatsnew.show', compact("comment"));
    }

    public function __construct(){
        $this->middleware('auth', ['only' =>['destroy', 'create']]);
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return redirect('whatsnew.show');
    }

    public function create(){
        $blog_posts = BlogPost::all()->pluck('blog_post_title', 'blog_post_id');
        return view('whatsnew.show', compact("blog_posts"));
    }

    public function store(Request $request) {
        $blog_post = BlogPost::find($request->blog_post_id);
        $comment = new Comment($request->all());
        $comment->id = 1;
        $comment->blog_post()->associate($blog_post)->save();
        return redirect('whatsnew.show');
    }

}
