<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Resources\TagResource;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::paginate();
        return TagResource::collection($tags);
    }


    public function show($id){
        return TagResource::collection(Tag::find($id));
    }


    public function store(Request $request){

    }

    public function update(Request $request, $id){
        
    }

    public function destroy(Request $request, $id){
        
    }
}
