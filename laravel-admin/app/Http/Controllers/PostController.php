<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    public function index(){

        $post = [
            "id" => 1,
            "title" => "Dr. Jazmyne Wilderman DVM",
            "description" => "Ellis Bahringer DVM",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return $post;
    }

    public function show($id){

        $post = [
            "id" => 2,
            "title" => "Dr. Jazmyne Wilderman DVM",
            "description" => "Ellis Bahringer DVM",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return $post;
    }

    public function store(Request $request){
        $post = [
            "id" => 3,
            "title" => "irfan",
            "description" => "Ellis Bahringer DVM",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return response($post);
    }
    

    public function update(Request $request, $id){
        
        // $post = Post::find($id);

        $post=[
            "id" => 2,
            "title" => "Dr. Ja DVM",
            "description" => "Ellis Bahringer DVM",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return response($post);
    }

    public function destroy($id){
        
        // Post::destroy($id);
        $post = [
            "id" => 2,
            "title" => "Dr. Jazmyne Wilderman DVM",
            "description" => "Ellis Bahringer DVM",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return response(null, Response::HTTP_NO_CONTENT);
    }


}
