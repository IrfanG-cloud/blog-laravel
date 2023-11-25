<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    public function index(){
        return Category::all();
    }


    public function show($id){
        return Category::find($id);
    }


    public function store(Request $request){
        $category = Category::create([
            'title' => $request->input('title'),
        ]);
    return response($category);

    }

    public function update(Request $request, $id){
        $category = Category::find($id);

        $category->update([
                'id' => $request->input('id'),
                'title' => $request->input('title'),
            ]);

        return response($category);
        
    }

    public function destroy(Request $request, $id){
        Category::destroy($id);

        return response(null);
        
    }
}
