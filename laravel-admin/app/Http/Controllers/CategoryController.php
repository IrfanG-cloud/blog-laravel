<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return Category::all();
    }


    public function show($id){
        return Category::find($id);
    }


    public function store(Request $request){

    }

    public function update(Request $request, $id){
        
    }

    public function destroy(Request $request, $id){
        
    }
}
