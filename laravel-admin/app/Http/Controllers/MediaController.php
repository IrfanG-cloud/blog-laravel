<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function index(){

        $media = [
            "id" => 1,
            "title" => "Media",
            "description" => "get Media Data",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return $media;
    }

    public function show($id){

        $media = [
            "id" => 2,
            "title" => "Irfan GHyan",
            "description" => "Media data",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return $media;
    }


    public function store(Request $request){
        $media = [
            "id" => 3,
            "title" => "irfan",
            "description" => "Media Data",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return response($media);
    }


    public function update(Request $request, $id){

        $media=[
            "id" => 2,
            "title" => "media",
            "description" => "media data updated",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return response($media);
    }


    public function destroy($id){
 
        $media = [
            "id" => 2,
            "title" => "media",
            "description" => "media data deleted",
            "created_at" => "2023-11-02T07:50:10.000000Z",
            "updated_at" => "2023-11-02T07:50:10.000000Z"
        ];

        return response(null);
    }

}
