<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showForm(){
        return view('form');
    }

    public function debug(Request $request){
        var_dump($request->except(['_token']));
        $post = new Post();
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;
        $post->save();

        //$post->create($request->except(['_token']));
    }
}
