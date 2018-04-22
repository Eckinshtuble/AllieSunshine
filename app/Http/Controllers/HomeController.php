<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $users_info = User::all();
        return view('userprofile.index', compact("users_info"));
    }

    public function show(UserRequest $request, $id)
    {
        if(Auth::id() == $id) {
            $user_info = Auth::user();
            return view('userprofile.show', compact("user_info"));
        } else {
            return redirect('/')->with('fail', 'You are not authorized to view that page.');
        }

    }

    public function create(){
        return view('userprofile.create');
    }

    public function store(UserRequest $request){
        $formData = $request->all();

        User::create($formData);

        return redirect('userprofile');
    }

    public function edit($user_info) {
        $user_info = User::findOrFail($user_info);

        return view('userprofile.edit', compact("user_info"));
    }

    public function update(UserRequest $request, $user_info){
        $formData = $request->all();
        $user_info = User::findOrFail($user_info);
        $user_info->update($formData);

        return view('userprofile.show');
    }

    public function __construct(){
        $this->middleware('auth', ['only' =>['create', 'edit', 'destroy']]);
    }
}
