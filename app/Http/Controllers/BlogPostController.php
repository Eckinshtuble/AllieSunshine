<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\BlogPost;
use App\Http\Requests\BlogPostRequest;
use \Input as Input;

class BlogPostController extends Controller
{
    public function index(){
        $blog_posts = BlogPost::all();
        return view('whatsnew.index', compact("blog_posts"));
    }

    public function show($blog_post){
        $blog_post = BlogPost::find($blog_post);
        return view('whatsnew.show', compact("blog_post"));
    }

    public function create(){
        return view('whatsnew.create');
    }

    public function store(BlogPostRequest $request){
        \Auth::User();
        $formData = $request->all();
        $formData['user_id'] = \Auth::User()->id;

        BlogPost::create($formData);

        return redirect('whatsnew');
    }

    public function edit($blog_post){
        $blog_post = BlogPost::findOrFail($blog_post);

        return view('whatsnew.edit', compact("blog_post"));
    }

    public function update(BlogPostRequest $request, $blog_post){
        $formData = $request->all();
        $blog_post = BlogPost::findOrFail($blog_post);
        $blog_post->update($formData);

        return redirect('whatsnew');
    }

    public function __construct(){
        $this->middleware('auth', ['only' =>['create', 'edit', 'destroy']]);
    }

    public function destroy(BlogPost $blog_post){
        $blog_post->delete();
        return redirect('whatsnew');
    }

    public function image(){
        if(Input::hasfile('file')){
            $file = Input::file('file');
            $file->move('images', $file->getClientOriginalName());
            echo '<img src="images/' . $file->getClientOriginalName() . '" />';
        }
    }
}