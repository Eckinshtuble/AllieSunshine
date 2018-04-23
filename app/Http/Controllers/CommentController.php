<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Http\Requests\CommentRequest;
use DB;
use App\BlogPost;
use App\Comment;

class CommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['only' =>['destroy', 'create']]);
    }

    public function index(){
        \Auth::User();
        $comments = Comment::all()->where('user_id', \Auth::User()->id)->sortBy('name');

        return view('whatsnew.index', compact("comments"));
    }

    public function show($comment){
        $comment = Comment::find($comment);

        return view('whatsnew.show', compact("comment"));
    }

    public function create(){
        $blog_posts = BlogPost::all();

        return view('whatsnew.create', compact("blog_posts"));
    }

    public function store(CommentRequest $request){
        \Auth::User();
        $formData = $request->all();
        $formData['user_id'] = \Auth::User()->id;

        Comment::create($formData);

        return redirect('whatsnew');
    }

    public function edit($comment){
        $comment = Comment::findOrFail($comment);
        $blog_posts = BlogPost::all();

        return view('whatsnew.edit', compact("comment", "blog_posts"));
    }

    public function update(CommentRequest $request, $comment){
        $formdata = $request->all();
        $comment = Comment::findOrFail($comment);
        $comment->update($formdata);

        return redirect('whatsnew');
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return redirect('whatsnew');
    }
}
