<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories=Category::paginate(7);
        return view('categories.index',['categories' =>  $categories]);
    }
    public function show($id){
        $category=Category::find($id);
        return view('categories.show',['category' =>  $category]);
    }
    public function edit($id){
        // dd($id);
        $category=Category::find($id);
        return view('categories.edit',['category'=>$category]);
    }
    public function update($id ,Request $request){
        // dd($id,$request->all());
        $category=Category::find($id);
        $category->update($request->except('_method','_token'));

        return redirect()->route('categories.index');
    }
}
