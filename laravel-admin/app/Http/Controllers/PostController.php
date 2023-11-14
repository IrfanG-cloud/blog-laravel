<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return Post::all();
    }


    public function show($id){
        return Post::find($id);
    }


    public function store(Request $request){
        $post = Post::create([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]);
        return response($post);
    }

    public function update(Request $request, $id){
        
        $post = Post::find($id);

        $post->update([
            'id' => $request->input('id'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            ]);

        return response($post);
    }


    public function destroy($id){
        
        Post::destroy($id);

        return response(null);
    }


}
