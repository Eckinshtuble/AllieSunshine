<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Blog_Post;

class BlogPostController extends Controller
{
    public function index(){
        $blog_posts = blog_post::all();
        return view('whatsnew.index', compact("blog_posts"));
    }

    public function show($blog_post){
        $blog_post = blog_post::find($blog_post);
        return view('whatsnew.show', compact("blog_post"));
    }

    public function create(){
        return view('whatsnew.create');
    }

    public function store(Blog_PostRequest $request){
        $formData = $request->all();

        Blog_Post::create($formData);

        return redirect('blog_posts');
    }

    public function edit($blog_post){
        $blog_post = Blog_Post::findOrFail($blog_post);

        return view('whatsnew.edit', compact("blog_post"));
    }

    public function update(Blog_PostRequest $request, $blog_post){
        $formData = $request->all();
        $blog_post = Blog_Post::findOrFail($blog_post);
        $blog_post->update($formData);

        return redirect('blog_posts');
    }

    public function __construct(){
        $this->middleware('auth', ['only' =>['create', 'edit', 'destroy']]);
    }

    public function destroy(Blog_Post $blog_Post){
        $blog_Post->delete();
        return redirect('blog_posts');
    }
}