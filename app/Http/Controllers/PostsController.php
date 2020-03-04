<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PostsController extends Controller
{
    //
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'another'   =>  '',
            'caption'   =>  'required',
            'image'   =>  'required | image'
        ]);
        \app\Post::create($data);
        dd(request()->all());
    }
}
