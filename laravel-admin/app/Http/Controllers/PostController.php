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
}
