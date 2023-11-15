<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function index(){

        return Media::all();
    }

    public function show($id){

        return Media::find($id);
    }

    public function store(Request $request){
        $media = Media::create([
                'name' => $request->input('name'),
            ]);
        return response($media);
    }

    public function update(Request $request, $id){
        
        $media = Media::find($id);

        $media->update([
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            ]);

        return response($media);
    }


    public function destroy($id){
        
        Media::destroy($id);

        return response(null);
    }

}
