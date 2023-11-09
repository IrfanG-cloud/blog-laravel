<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index(){

        $comment = [
            "id" => 1,
            "title" => "Dr. Jazmyne Wilderman DVM",
            "description" => "Ellis Bahringer DVM",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return $comment;
    }

    public function show($id){

        $comment = [
            "id" => 2,
            "title" => "Irfan GHyan",
            "description" => "Ellis Bahringer DVM",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return $comment;
    }


    public function store(Request $request){
        $comment = [
            "id" => 3,
            "title" => "irfan",
            "description" => "Ellis Bahringer DVM",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return response($comment);
    }


    public function update(Request $request, $id){

        $comment=[
            "id" => 2,
            "title" => "Dr. Ja DVM",
            "description" => "updated",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return response($comment);
    }


    public function destroy($id){
 
        $comment = [
            "id" => 2,
            "title" => "Dr. Jaz",
            "description" => "deleted",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return response(null);
    }

}
