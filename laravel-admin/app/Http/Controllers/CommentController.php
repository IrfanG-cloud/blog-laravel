<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index(){

        return Comment::all();
    }

    public function show($id){

        return Comment::find($id);
    }

    public function store(Request $request){
        $comment = Comment::create([
                'comment' => $request->input('comment'),

            ]);
        return response($comment);
    }

    public function update(Request $request, $id){
        
        $comment = Comment::find($id);

        $comment->update([
                'id' => $request->input('id'),
                'comment' => $request->input('comment'),
            ]);

        return response($comment);
    }


    public function destroy($id){
        
        Comment::destroy($id);

        return response(null);
    }

}
