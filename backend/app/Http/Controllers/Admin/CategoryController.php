<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Add View and insertion
        protected function add(){
            $category = Category::all();
            return view('admin.category.add', compact('category'));
        }

        protected function insert(Request $request){
            $category = new Category();
            $category->name = $request->input('name');
            $category->image = $request->input('image');
            $category->description= $request->input('description');
            $category->brief = $request->input('brief');
            $category->save();
            return redirect('/categories')->with('success' , $category->name.' is added successfully!');
        }

    /////////////////////////////////////////////////
    // Edit View and updating
        public function edit($id){
            $category = Category::find($id);
            return view('admin.category.edit', compact('category'));
        }
    
        public function update(Request $request ,$id){
            $category = Category::findOrFail($id);
            $category->name = $request->input('name');
            $category->image = $request->input('image');
            $category->description= $request->input('description');
            $category->brief = $request->input('brief');
            $category->update();
            return redirect('/categories')->with('success', $category->name.' is updated successfully!');
        }
    ///////////////////////////////////////////////////////
    // Deleting
        public function destroy($id){
            $category = Category::find($id);
            $category->delete();
            return redirect('/categories')->with('success', $category->name.' is deleted successfully!');
        }
    ////////////////////////////////////////////
}



