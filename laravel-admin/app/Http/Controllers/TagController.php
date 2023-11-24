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
        $tag = Tag::create([
            'tag' => $request->input('tag'),
        ]);
    return response($tag);

    }

    public function update(Request $request, $id){

        $tag = Tag::find($id);

        $tag->update([
                'id' => $request->input('id'),
                'tag' => $request->input('tag'),
            ]);

        return response($tag);
        
    }

    public function destroy(Request $request, $id){
        Tag::destroy($id);

        return response(null);
        
    }
}
